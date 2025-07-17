<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram API Test - TF Schwimmbadbau</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-5">Instagram API Test</h1>
                
                <div class="card">
                    <div class="card-header">
                        <h5>API Response Test</h5>
                    </div>
                    <div class="card-body">
                        <div id="api-response">
                            <div class="text-center">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <p class="mt-2">Lade Instagram Daten...</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="index.php" class="btn btn-primary">Zurück zur Hauptseite</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Test the Instagram API
        async function testInstagramAPI() {
            try {
                const response = await fetch('api/get_instagram_feed.php');
                const data = await response.json();
                
                const responseDiv = document.getElementById('api-response');
                
                if (data.success) {
                    responseDiv.innerHTML = `
                        <div class="alert alert-success">
                            <h6>✅ API erfolgreich!</h6>
                            <p><strong>Anzahl Posts:</strong> ${data.total_count}</p>
                            <p><strong>Angezeigt:</strong> ${data.items.length}</p>
                        </div>
                        <div class="row">
                            ${data.items.map(item => `
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img src="${item.image_url}" class="card-img-top" alt="Instagram Post" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <p class="card-text small">${item.caption.substring(0, 100)}...</p>
                                            <div class="d-flex justify-content-between">
                                                <small class="text-muted">❤️ ${item.like_count}</small>
                                                <small class="text-muted">${new Date(item.taken_at * 1000).toLocaleDateString('de-DE')}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `).join('')}
                        </div>
                    `;
                } else {
                    responseDiv.innerHTML = `
                        <div class="alert alert-danger">
                            <h6>❌ API Fehler!</h6>
                            <p>${data.error}</p>
                        </div>
                    `;
                }
            } catch (error) {
                document.getElementById('api-response').innerHTML = `
                    <div class="alert alert-danger">
                        <h6>❌ Netzwerk Fehler!</h6>
                        <p>${error.message}</p>
                    </div>
                `;
            }
        }

        // Run test when page loads
        document.addEventListener('DOMContentLoaded', testInstagramAPI);
    </script>
</body>
</html> 