<?php
// portfoliodetails.php
// Start the session (if you're using sessions for any purpose)
session_start();
// Function to get portfolio item
function getPortfolioItem($id)
{
    $portfolioItems = [
        1 => [
            'id' => 1,
            'images' => ['portfolio-1-1.jpg', 'portfolio-1-2.jpg', 'portfolio-1-3.jpg', 'portfolio-1-4.jpg', 'portfolio-1-5.jpg'],
            'title' => 'Ausstellungsgarten in Abensberg',
            'description' => 'Modernes Einfamilienhaus mit Außenpool in Abensberg - Ausstellungsgarten',
            'full_description' => '
                Diese Materialien wurden verwendet:
                <br><br>
                <strong>Außenpool:</strong><br>
                Größe 7 x 2,75 m, 1,5 m tief<br>
                Die Innenseiten wurden mit hellblauer Folie verkleidet.<br>
                Eine Badu-Jet Gegenstromanlage, Einlaufdüsen sowie LED-Strahler wurden mit eingebaut.<br>
                Kontroll- und Technikschacht gehören zur Ausstattung.<br><br>
                <strong>Poolumrandung:</strong><br>
                NUEVA ferro grau-uni L/B/D = 100/100/8 cm von der Fa. Godelmann wurden als Poolumrandung verlegt.<br><br>
                <strong>Holzterrasse:</strong><br>
                Ein schöner Akzent setzt die Holzterrasse aus Bangkirai Premium.<br><br>
                <strong>Überdachung:</strong><br>
                Lamellenüberdachung in anthrazit von der Fa. INODEQ mit seitlichem Sonnenschutz.
            ',
        ],
        2 => [
            'id' => 2,
            'images' => ['portfolio-2-1.jpg', 'portfolio-2-2.jpg', 'portfolio-2-3.jpg', 'portfolio-2-4.jpg', 'portfolio-2-5.jpg'],
            'title' => 'Bauvorhaben - Zeitlarn, Pool im Garten',
            'description' => 'Pool im Garten Modernes Einfamilienhaus in Zeitlarn mit Außenpool',
            'full_description' => '
                Diese Materialien haben wir verwendet:
                <br><br>
                <strong>Außenpool:</strong><br>
                Größe 4 x 8 m,1,5 m tief mit Treppe<br>
                Die Innenseiten wurden mit hellblauer Folie verkleidet.<br>
                Badu-Jet Gegenstromanlage, Einlaufdüsen sowie LED-Strahler wurden integriert.<br>
                Kontroll- und Technikschacht zurück zur Ausstattung.<br>
                Eine Unterflur-Abdeckung aus Edelstahl wurde montiert.<br>
                <strong>Poolumrandung:</strong><br>
                MASSIMO Platte SV-Beton visia grau, Fa. Godelmann Format: 100/100/8 cm OF schalungsglatt, Kanten leicht gefast<br>
                Die Platten wurden auf Einkornbeton verlegt.<br>
                Sitzwürfel aus Sichtbeton.
            ',
        ],
        // Bauvorhaben - Zeitlarn
        // Einfamilienhaus in Zeitlarn mit Gartenanlage und Pool ​ folgende Materialien wurden verwendet: Eingangsbereich:  Betonpflaster grau, Natursteinmosaik;Dunkelgrauer Granit; Mauersteine aus Beton in Muschelkalk (bosiert) Garten :                  Rasenkanten aus gelben Granit Terrasse:               Betonplatten Großformat 80/40 der Firma Godelman in der Farbe Muschelkalk Stufenanlage:        Gelber Granit in verschiedenen Variation Blockstufen bzw. Randsteine Mauern :                 bosierten Betonsteine der Fa Godelman  in Farbe Muschelkalk Pool :                       Größe 3,5m x 7,5m mi Treppe und Sitzfläche Verkleidung mit Folie in Hellblau Die Gesamte Technik befindet sich im Haus im Heizraum Rollabdeckung Beleuchtung in den Poolwänden integriert Bepflanzung :        Formschnitte in Kiesflächen bzw. mit Rinde abgedeckt
        3 => [
            'id' => 3,
            'images' => ['portfolio-3-1.jpg', 'portfolio-3-2.jpg', 'portfolio-3-3.jpg', 'portfolio-3-4.jpg', 'portfolio-3-5.jpg'],
            'title' => 'Bauvorhaben - Zeitlarn',
            'description' => 'Einfamilienhaus in Zeitlarn mit Gartenanlage und Pool',
            'full_description' => '
            Eingangsbereich :  Betonpflaster grau, Natursteinmosaik;Dunkelgrauer Granit; Mauersteine aus Beton in Muschelkalk (bosiert)
            <br><br>
            Garden :                  Rasenkanten aus gelben Granit Terrasse:               Betonplatten Großformat 80/40 der Firma Godelman in der Farbe Muschelkalk
            <br><br>
            Stufenanlage :        Gelber Granit in verschiedenen Variation Blockstufen bzw. Randsteine Mauern :                 boserten Betonsteine der Fa Godelman  in Farbe Muschelkalk
            <br><br>
            Pool :                       Größe 3,5m x 7,5m mi Treppe und Sitzfläche Verkleidung mit Folie in Hellblau
            <br><br>
            Die Gesamte Technik befindet sich im Haus im Heizraum Rollabdeckung Beleuchtung in den Poolwänden integriert
            <br><br>
            Bepflanzung :        Formschnitte in Kiesflächen bzw. mit Rinde abgedeckt
            ',
        ]
    ];
    return isset($portfolioItems[$id]) ? $portfolioItems[$id] : null;
}
// Get the ID from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// Fetch the portfolio item
$item = getPortfolioItem($id);
// If the item doesn't exist, redirect to a 404 page or the main portfolio page
if (!$item) {
    header("Location: portfolio.php");
    exit();
}
