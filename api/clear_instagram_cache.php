<?php
// Instagram Cache Management Script
// This script allows you to manually clear the Instagram cache

header('Content-Type: application/json');

$cache_file = 'instagram_cache.json';

// Function to clear cache
function clearCache($cache_file) {
    if (file_exists($cache_file)) {
        if (unlink($cache_file)) {
            return ['success' => true, 'message' => 'Cache cleared successfully'];
        } else {
            return ['success' => false, 'message' => 'Failed to delete cache file'];
        }
    } else {
        return ['success' => false, 'message' => 'Cache file does not exist'];
    }
}

// Function to get cache info
function getCacheInfo($cache_file) {
    if (!file_exists($cache_file)) {
        return ['exists' => false, 'message' => 'Cache file does not exist'];
    }
    
    $cache_data = file_get_contents($cache_file);
    $data = json_decode($cache_data, true);
    
    if (!$data) {
        return ['exists' => true, 'message' => 'Cache file is corrupted'];
    }
    
    $file_time = filemtime($cache_file);
    $current_time = time();
    $age = $current_time - $file_time;
    
    return [
        'exists' => true,
        'file_size' => filesize($cache_file),
        'created_at' => date('Y-m-d H:i:s', $file_time),
        'age_seconds' => $age,
        'age_hours' => round($age / 3600, 2),
        'items_count' => count($data['items'] ?? []),
        'cached_at' => $data['cached_at'] ?? 'Unknown'
    ];
}

// Handle different actions
$action = $_GET['action'] ?? 'info';

switch ($action) {
    case 'clear':
        $result = clearCache($cache_file);
        break;
        
    case 'info':
    default:
        $result = getCacheInfo($cache_file);
        break;
}

echo json_encode($result, JSON_PRETTY_PRINT);
?> 