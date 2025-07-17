<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');

// Instagram API configuration
$instagram_user_id = '56975464822';
$rapidapi_key = '335200c4afmsh64cfbbf7fdf4cf2p1aae94jsn05a3bad585de';
$rapidapi_host = 'instagram-api-fast-reliable-data-scraper.p.rapidapi.com';

// Cache configuration
$cache_file = 'instagram_cache.json';
$cache_duration = 3600; // 1 hour in seconds

// Function to check if cache is valid
function isCacheValid($cache_file, $cache_duration) {
    if (!file_exists($cache_file)) {
        return false;
    }
    
    $cache_time = filemtime($cache_file);
    $current_time = time();
    
    return ($current_time - $cache_time) < $cache_duration;
}

// Function to read cache
function readCache($cache_file) {
    if (!file_exists($cache_file)) {
        return null;
    }
    
    $cache_data = file_get_contents($cache_file);
    $data = json_decode($cache_data, true);
    
    if (!$data || !isset($data['timestamp']) || !isset($data['items'])) {
        return null;
    }
    
    return $data;
}

// Function to write cache
function writeCache($cache_file, $data) {
    $cache_data = [
        'timestamp' => time(),
        'items' => $data,
        'cached_at' => date('Y-m-d H:i:s')
    ];
    
    file_put_contents($cache_file, json_encode($cache_data, JSON_PRETTY_PRINT));
}

// Function to fetch Instagram feed
function getInstagramFeed($user_id, $api_key, $api_host) {
    $url = "https://{$api_host}/feed?user_id={$user_id}";
    
    $options = [
        'http' => [
            'method' => 'GET',
            'header' => [
                'x-rapidapi-key: ' . $api_key,
                'x-rapidapi-host: ' . $api_host
            ]
        ]
    ];
    
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    
    if ($response === false) {
        return ['error' => 'Failed to fetch Instagram data'];
    }
    
    $data = json_decode($response, true);
    
    if (!$data) {
        return ['error' => 'Invalid response from Instagram API'];
    }
    
    return $data;
}

// Function to process Instagram items for display
function processInstagramItems($items) {
    $processed_items = [];
    
    foreach ($items as $item) {
        $processed_item = [
            'id' => $item['id'] ?? '',
            'code' => $item['code'] ?? '',
            'media_type' => $item['media_type'] ?? 1,
            'taken_at' => $item['taken_at'] ?? '',
            'like_count' => $item['like_count'] ?? 0,
            'play_count' => $item['play_count'] ?? 0,
            'caption' => $item['caption']['text'] ?? '',
            'image_url' => '',
            'video_url' => '',
            'location' => $item['location']['name'] ?? '',
            'permalink' => "https://www.instagram.com/p/{$item['code']}/"
        ];
        
        // Get image URL
        if (isset($item['image_versions2']['candidates'][0]['url'])) {
            $processed_item['image_url'] = $item['image_versions2']['candidates'][0]['url'];
        }
        
        // Get video URL for video posts
        if ($item['media_type'] == 2 && isset($item['video_versions'][0]['url'])) {
            $processed_item['video_url'] = $item['video_versions'][0]['url'];
        }
        
        // Get carousel images
        if ($item['media_type'] == 8 && isset($item['carousel_media'])) {
            $carousel_images = [];
            foreach ($item['carousel_media'] as $carousel_item) {
                if (isset($carousel_item['image_versions2']['candidates'][0]['url'])) {
                    $carousel_images[] = $carousel_item['image_versions2']['candidates'][0]['url'];
                }
            }
            $processed_item['carousel_images'] = $carousel_images;
        }
        
        $processed_items[] = $processed_item;
    }
    
    return $processed_items;
}

try {
    // Check if cache is valid
    if (isCacheValid($cache_file, $cache_duration)) {
        // Use cached data
        $cached_data = readCache($cache_file);
        
        if ($cached_data) {
            echo json_encode([
                'success' => true,
                'items' => array_slice($cached_data['items'], 0, 6),
                'total_count' => count($cached_data['items']),
                'cached' => true,
                'cached_at' => $cached_data['cached_at']
            ]);
            exit;
        }
    }
    
    // Fetch fresh data from Instagram API
    $instagram_data = getInstagramFeed($instagram_user_id, $rapidapi_key, $rapidapi_host);
    
    if (isset($instagram_data['error'])) {
        // If API fails, try to use old cache as fallback
        $old_cache = readCache($cache_file);
        if ($old_cache) {
            echo json_encode([
                'success' => true,
                'items' => array_slice($old_cache['items'], 0, 6),
                'total_count' => count($old_cache['items']),
                'cached' => true,
                'cached_at' => $old_cache['cached_at'],
                'warning' => 'Using cached data due to API error'
            ]);
            exit;
        }
        
        http_response_code(500);
        echo json_encode(['error' => $instagram_data['error']]);
        exit;
    }
    
    // Process items for display
    if (isset($instagram_data['items'])) {
        $processed_items = processInstagramItems($instagram_data['items']);
        
        // Save to cache
        writeCache($cache_file, $processed_items);
        
        // Return data
        $display_items = array_slice($processed_items, 0, 6);
        
        echo json_encode([
            'success' => true,
            'items' => $display_items,
            'total_count' => count($processed_items),
            'cached' => false,
            'cached_at' => date('Y-m-d H:i:s')
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'error' => 'No items found in Instagram feed'
        ]);
    }
    
} catch (Exception $e) {
    // Try to use cache as fallback
    $fallback_cache = readCache($cache_file);
    if ($fallback_cache) {
        echo json_encode([
            'success' => true,
            'items' => array_slice($fallback_cache['items'], 0, 6),
            'total_count' => count($fallback_cache['items']),
            'cached' => true,
            'cached_at' => $fallback_cache['cached_at'],
            'warning' => 'Using cached data due to error'
        ]);
        exit;
    }
    
    http_response_code(500);
    echo json_encode([
        'error' => 'Internal server error: ' . $e->getMessage()
    ]);
}
?> 