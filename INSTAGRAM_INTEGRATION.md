# Instagram Feed Integration für TF Schwimmbadbau

## Übersicht

Diese Integration zeigt die neuesten Instagram-Posts von @tf_schwimmbadbau auf der Website an. Die Integration verwendet die Instagram API über RapidAPI.

## Dateien

### API Endpoint
- `api/get_instagram_feed.php` - PHP API Endpoint für Instagram Daten (mit Caching)
- `api/clear_instagram_cache.php` - Cache Management API

### Frontend
- `js/instagram-feed.js` - JavaScript für die Anzeige des Instagram Feeds
- `css/style.css` - CSS Styles für Instagram Feed (am Ende der Datei)

### Test & Admin
- `test_instagram.php` - Testseite zur Überprüfung der API
- `admin/cache_manager.php` - Admin Panel für Cache Management

## Konfiguration

### API Credentials
Die Instagram API Credentials sind in `api/get_instagram_feed.php` konfiguriert:

```php
$instagram_user_id = '56975464822';
$rapidapi_key = '335200c4afmsh64cfbbf7fdf4cf2p1aae94jsn05a3bad585de';
$rapidapi_host = 'instagram-api-fast-reliable-data-scraper.p.rapidapi.com';
```

### Integration in index.php
Der Instagram Feed wird automatisch geladen, wenn die Seite geladen wird:

```html
<!-- Instagram Feed Start -->
<div id="instagram-feed">
    <!-- Instagram feed will be loaded here via JavaScript -->
</div>
<!-- Instagram Feed End -->
```

## Features

### Angezeigte Daten
- Instagram Posts (Bilder, Videos, Carousel)
- Like-Anzahl
- Play-Count für Videos
- Caption (gekürzt)
- Datum
- Location (falls verfügbar)
- Direkte Links zu Instagram Posts

### Responsive Design
- Mobile-optimiert
- Hover-Effekte
- Loading-Animationen
- Error-Handling

### Styling
- Konsistent mit dem Website-Design
- Bootstrap Integration
- Custom CSS für Instagram-spezifische Elemente

## Caching System

### Cache Configuration
- **Cache Dauer**: 1 Stunde (3600 Sekunden)
- **Cache Datei**: `instagram_cache.json`
- **Automatische Erneuerung**: Nach Ablauf der Cache-Dauer
- **Fallback**: Bei API-Fehlern wird alter Cache verwendet

### Cache Management
- **Admin Panel**: `admin/cache_manager.php`
- **Cache löschen**: `api/clear_instagram_cache.php?action=clear`
- **Cache Status**: `api/clear_instagram_cache.php?action=info`

## API Limits

- **Basic Plan**: 100 Requests/Monat
- **Rate Limit**: 1000 requests/hour
- **Angezeigte Posts**: Maximal 6 Posts
- **Cache-basierte Requests**: Nur 1 Request pro Stunde

## Fehlerbehandlung

### API Fehler
- Netzwerk-Fehler werden abgefangen
- Fallback zur Instagram-Link Anzeige
- Benutzerfreundliche Fehlermeldungen

### Fallback
Wenn die API nicht verfügbar ist, wird ein Link zur Instagram-Seite angezeigt.

## Testen

1. Besuchen Sie `test_instagram.php` um die API zu testen
2. Überprüfen Sie die Browser-Konsole für JavaScript-Fehler
3. Testen Sie auf verschiedenen Geräten

## Wartung

### API Key Rotation
- API Keys sollten regelmäßig rotiert werden
- Überwachen Sie die API-Nutzung
- Aktualisieren Sie die Credentials bei Bedarf

### Performance
- Instagram Feed wird client-seitig geladen
- Caching kann implementiert werden
- Bilder werden lazy-loaded

## Sicherheit

- API Keys sind serverseitig gespeichert
- CORS Headers sind konfiguriert
- Input Validation implementiert
- Error Messages enthalten keine sensiblen Daten

## Zukünftige Verbesserungen

- Caching für bessere Performance
- Mehr Posts anzeigen
- Instagram Stories Integration
- Analytics für Feed-Nutzung
- Admin-Panel für Feed-Konfiguration 