<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Cache Manager - TF Schwimmbadbau</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Enhanced Admin Styles */
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .admin-header {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .admin-title {
            color: #262626;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
        }
        
        .admin-title i {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-right: 15px;
        }
        
        .admin-subtitle {
            color: #8e8e8e;
            margin: 10px 0 0 0;
            font-size: 1.1rem;
        }
        
        .admin-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            border: none;
        }
        
        .card-header-enhanced {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 20px 25px;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card-header-enhanced h5 {
            margin: 0;
            color: #262626;
            font-weight: 600;
        }
        
        .header-actions {
            display: flex;
            gap: 10px;
        }
        
        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .action-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px 20px;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
        }
        
        .action-btn.primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .action-btn.danger {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            color: white;
        }
        
        .action-btn.info {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .cache-info {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            color: #8e8e8e;
            font-size: 14px;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .stat-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 24px;
            color: white;
        }
        
        .stat-icon.primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .stat-icon.success {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e6cf 100%);
        }
        
        .stat-icon.info {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }
        
        .stat-icon.warning {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        
        .stat-content h3 {
            margin: 0 0 5px 0;
            font-size: 2rem;
            font-weight: 700;
            color: #262626;
        }
        
        .stat-content p {
            margin: 0;
            color: #8e8e8e;
            font-size: 14px;
            font-weight: 500;
        }
        
        .loading-state {
            text-align: center;
            padding: 40px;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .admin-title {
                font-size: 2rem;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="admin-header">
                    <div class="header-content">
                        <div class="header-left">
                            <h1 class="admin-title">
                                <i class="fab fa-instagram"></i>
                                Instagram Cache Manager
                            </h1>
                            <p class="admin-subtitle">Verwalten Sie den Instagram Feed Cache</p>
                        </div>
                        <div class="header-right">
                            <a href="../index.php" class="btn btn-outline-primary">
                                <i class="fas fa-home"></i> Zurück zur Website
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="admin-card">
                            <div class="card-header-enhanced">
                                <h5><i class="fas fa-database"></i> Cache Status</h5>
                                <div class="header-actions">
                                    <button id="refresh-status-btn" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-sync"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="cache-status">
                                    <div class="loading-state">
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <p class="mt-2">Lade Cache Status...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="admin-card">
                            <div class="card-header-enhanced">
                                <h5><i class="fas fa-cogs"></i> Schnellaktionen</h5>
                            </div>
                            <div class="card-body">
                                <div class="action-buttons">
                                    <button id="clear-cache-btn" class="action-btn danger">
                                        <i class="fas fa-trash"></i>
                                        <span>Cache löschen</span>
                                    </button>
                                    <button id="refresh-cache-btn" class="action-btn primary">
                                        <i class="fas fa-sync"></i>
                                        <span>Cache erneuern</span>
                                    </button>
                                    <button id="test-api-btn" class="action-btn info">
                                        <i class="fas fa-vial"></i>
                                        <span>API Test</span>
                                    </button>
                                </div>
                                
                                <div class="cache-info">
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <span>Cache Dauer: 1 Stunde</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-database"></i>
                                        <span>Automatische Erneuerung</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="admin-card">
                            <div class="card-header-enhanced">
                                <h5><i class="fas fa-chart-line"></i> API Statistiken & Limits</h5>
                            </div>
                            <div class="card-body">
                                <div class="stats-grid">
                                    <div class="stat-card">
                                        <div class="stat-icon primary">
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>100</h3>
                                            <p>Requests/Monat</p>
                                        </div>
                                    </div>
                                    <div class="stat-card">
                                        <div class="stat-icon success">
                                            <i class="fas fa-bolt"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>1000</h3>
                                            <p>Requests/Stunde</p>
                                        </div>
                                    </div>
                                    <div class="stat-card">
                                        <div class="stat-icon info">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>1h</h3>
                                            <p>Cache Dauer</p>
                                        </div>
                                    </div>
                                    <div class="stat-card">
                                        <div class="stat-icon warning">
                                            <i class="fas fa-images"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>6</h3>
                                            <p>Posts Angezeigt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Cache management functions
        async function getCacheStatus() {
            try {
                const response = await fetch('../api/clear_instagram_cache.php?action=info');
                const data = await response.json();
                
                const statusDiv = document.getElementById('cache-status');
                
                if (data.exists) {
                    statusDiv.innerHTML = `
                        <div class="alert alert-success">
                            <h6><i class="fas fa-check-circle"></i> Cache vorhanden</h6>
                            <p><strong>Größe:</strong> ${(data.file_size / 1024).toFixed(2)} KB</p>
                            <p><strong>Erstellt:</strong> ${data.created_at}</p>
                            <p><strong>Alter:</strong> ${data.age_hours} Stunden</p>
                            <p><strong>Posts:</strong> ${data.items_count}</p>
                            <p><strong>Gecacht:</strong> ${data.cached_at}</p>
                        </div>
                    `;
                } else {
                    statusDiv.innerHTML = `
                        <div class="alert alert-warning">
                            <h6><i class="fas fa-exclamation-triangle"></i> Kein Cache vorhanden</h6>
                            <p>${data.message}</p>
                        </div>
                    `;
                }
            } catch (error) {
                document.getElementById('cache-status').innerHTML = `
                    <div class="alert alert-danger">
                        <h6><i class="fas fa-times-circle"></i> Fehler beim Laden</h6>
                        <p>${error.message}</p>
                    </div>
                `;
            }
        }

        async function clearCache() {
            if (!confirm('Möchten Sie wirklich den Cache löschen?')) {
                return;
            }
            
            try {
                const response = await fetch('../api/clear_instagram_cache.php?action=clear');
                const data = await response.json();
                
                if (data.success) {
                    alert('Cache erfolgreich gelöscht!');
                    getCacheStatus();
                } else {
                    alert('Fehler beim Löschen des Caches: ' + data.message);
                }
            } catch (error) {
                alert('Fehler: ' + error.message);
            }
        }

        async function refreshCache() {
            try {
                // Clear cache first
                await fetch('../api/clear_instagram_cache.php?action=clear');
                
                // Test API to create new cache
                const response = await fetch('../api/get_instagram_feed.php');
                const data = await response.json();
                
                if (data.success) {
                    alert('Cache erfolgreich erneuert!');
                    getCacheStatus();
                } else {
                    alert('Fehler beim Erneuern des Caches: ' + (data.error || 'Unbekannter Fehler'));
                }
            } catch (error) {
                alert('Fehler: ' + error.message);
            }
        }

        async function testAPI() {
            try {
                const response = await fetch('../api/get_instagram_feed.php');
                const data = await response.json();
                
                if (data.success) {
                    alert(`API Test erfolgreich!\nPosts: ${data.total_count}\nCache: ${data.cached ? 'Ja' : 'Nein'}`);
                } else {
                    alert('API Test fehlgeschlagen: ' + (data.error || 'Unbekannter Fehler'));
                }
            } catch (error) {
                alert('API Test Fehler: ' + error.message);
            }
        }

        // Event listeners
        document.getElementById('clear-cache-btn').addEventListener('click', clearCache);
        document.getElementById('refresh-cache-btn').addEventListener('click', refreshCache);
        document.getElementById('test-api-btn').addEventListener('click', testAPI);
        document.getElementById('refresh-status-btn').addEventListener('click', getCacheStatus);

        // Load cache status on page load
        document.addEventListener('DOMContentLoaded', getCacheStatus);
    </script>
</body>
</html> 