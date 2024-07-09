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
                Größe 4 x 8 m, 1,5 m tief mit Treppe<br>
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
        3 => [
            'id' => 3,
            'images' => ['portfolio-3-1.jpg', 'portfolio-3-2.jpg', 'portfolio-3-3.jpg', 'portfolio-3-4.jpg', 'portfolio-3-5.jpg'],
            'title' => 'Bauvorhaben - Zeitlarn',
            'description' => 'Einfamilienhaus in Zeitlarn mit Gartenanlage und Pool',
            'full_description' => '
                Eingangsbereich: Betonpflaster grau, Natursteinmosaik; Dunkelgrauer Granit; Mauersteine aus Beton in Muschelkalk (bosiert)
                <br><br>
                Garten: Rasenkanten aus gelbem Granit<br>
                Terrasse: Betonplatten Großformat 80/40 der Firma Godelmann in der Farbe Muschelkalk
                <br><br>
                Stufenanlage: Gelber Granit in verschiedenen Variation Blockstufen bzw. Randsteine<br>
                Mauern: Bosierten Betonsteine der Fa. Godelmann in der Farbe Muschelkalk
                <br><br>
                Pool: Größe 3,5 m x 7,5 m mit Treppe und Sitzfläche, Verkleidung mit Folie in Hellblau
                <br><br>
                Die gesamte Technik befindet sich im Haus im Heizraum, Rollabdeckung, Beleuchtung in den Poolwänden integriert
                <br><br>
                Bepflanzung: Formschnitte in Kiesflächen bzw. mit Rinde abgedeckt
            ',
        ],
        4 => [
            'id' => 4,
            'images' => ['portfolio-4-1.jpg', 'portfolio-4-2.jpg', 'portfolio-4-3.jpg', 'portfolio-4-4.jpg', 'portfolio-4-5.jpg', 'portfolio-4-6.jpg', 'portfolio-4-7.jpg', 'portfolio-4-8.jpg'],
            'title' => 'Hundertwasserturm in Abensberg',
            'description' => 'Einzigartige Außenanlagen nach den Visionen des österreichischen Künstlers Hundertwasser.',
            'full_description' => '
                Als Referenzobjekt ist der Hundertwasserturm in Abensberg bisher meine größte Herausforderung gewesen. Über 1 Jahr dauerte die Planung, Gestaltung und Ausführung der Außenanlagen, die allesamt die speziellen Anforderungen des österreichischen Visionärs sowie den Vorstellungen der Brauerei Kuchelbauer erfüllen sollten. Auch bei dem anschließend gebauten Kunsthaus wurden die Außenanlagen von mir gestaltet und ausgeführt.
            ',
        ],
        5 => [
            'id' => 5,
            'images' => [
                'portfolio-5-1.jpg',
                'portfolio-5-2.jpg',
                'portfolio-5-3.jpg',
                'portfolio-5-4.jpg',
                'portfolio-5-5.jpg',
                'portfolio-5-6.jpg',
                'portfolio-5-7.jpg',
                'portfolio-5-8.jpg',
                'portfolio-5-9.jpg',
                'portfolio-5-10.jpg',
                'portfolio-5-11.jpg',
                'portfolio-5-12.jpg',
                'portfolio-5-13.jpg',
                'portfolio-5-14.jpg',
                'portfolio-5-15.jpg',
                'portfolio-5-16.jpg',
                'portfolio-5-17.jpg',
                'portfolio-5-18.jpg',
                'portfolio-5-19.jpg',
                'portfolio-5-20.jpg'
            ],
            'title' => 'Pools - Schwimmteiche - Wasserspiele',
            'description' => 'Wasser im Garten',
            'full_description' => 'Es gibt wohl nichts beruhigenderes, als ein leises Wasserplätschern ... Ein kleines Stück Urlaubsfeeling im eigenen Garten. Wir bauen Schwimmbäder, Schwimmteiche oder auch nur Quellsteine ... Auch mit kleinen Wasserspielen kann man sich ein kleines Stück Urlaub nach Hause holen. Hierbei sind der Kreativität keine Grenzen gesetzt ... Ebenso können wir Ihnen passende Außenduschen auch mit anbieten. Ich freue mich darauf, Sie individuell beraten zu dürfen!        ',
        ],
        6 => [
            'id' => 6,
            'images' => [
                'portfolio-6-1.jpg', 'portfolio-6-2.jpg', 'portfolio-6-3.jpg', 'portfolio-6-4.jpg', 'portfolio-6-5.jpg',
                'portfolio-6-6.jpg', 'portfolio-6-7.jpg', 'portfolio-6-8.jpg', 'portfolio-6-9.jpg', 'portfolio-6-10.jpg',
                'portfolio-6-11.jpg', 'portfolio-6-12.jpg', 'portfolio-6-13.jpg'
            ],
            'title' => 'Holz im Garten',
            'description' => 'Holz im Garten',
            'full_description' => 'Was ist wärmer als Holz im Gartenbereich? Wir verbauen alle Arten von Hölzern, ob als Terrasse oder Sichtschutz ... Verbaute Hölzer hier auf den Bildern Bankirai, Thermoesche, Kebonie, Sichtschutz aus Rombusleisten Auch Gartenhäuser mit Rombusverschalung können wir Ihnen anfertigen ...'
        ],
        7 => [
            'id' => 7,
            'images' => [
                'portfolio-7-1.jpg', 'portfolio-7-2.jpg', 'portfolio-7-3.jpg', 'portfolio-7-4.jpg', 'portfolio-7-5.jpg',
                'portfolio-7-6.jpg', 'portfolio-7-7.jpg', 'portfolio-7-8.jpg', 'portfolio-7-9.jpg', 'portfolio-7-10.jpg',
                'portfolio-7-11.jpg', 'portfolio-7-12.jpg', 'portfolio-7-13.jpg', 'portfolio-7-14.jpg', 'portfolio-7-15.jpg',
                'portfolio-7-16.jpg', 'portfolio-7-17.jpg', 'portfolio-7-18.jpg', 'portfolio-7-19.jpg', 'portfolio-7-20.jpg',
                'portfolio-7-21.jpg', 'portfolio-7-22.jpg', 'portfolio-7-23.jpg', 'portfolio-7-24.jpg', 'portfolio-7-25.jpg'
            ],
            'title' => 'Einfamilienhaus in leichter Hanglage',
            'description' => 'Einfamilienhaus in leichter Hanglage',
            'full_description' => '
                Einfamilienhaus in leichter Hanglage:
                Grundgedanken waren ein ebenerdiger Garten mit Hochbeeten und einem Sichtschutz zur Straße.
                Folgende Materialien wurden verwendet:
                Eingangsbereich: Betonpflaster grau/schwarz; Dunkelgrauer Granit
                Einfahrt: Einfaßungen aus gebrauchtem Granit-Großsteinen
                Garten: Sitzbank aus Gabionenkorb befüllt mit grauem Granit
                        Hochbeete aus L-Winkelsteinen zum Abfangen des Höhenunterschiedes
                        Sichtschutzstehlen aus Beton
                Zaun: Doppelstabmatte anthrazit pulverbeschichtet und elektrisches Hoftor
                Bepflanzung: Formschnitte in Kiesflächen
                Terrasse: Dunkelgrauer Granit mit Kunstharzfuge
            '
        ],
        8 => [
            'id' => 8,
            'images' => [
                'portfolio-8-1.jpg', 'portfolio-8-2.jpg', 'portfolio-8-3.jpg', 'portfolio-8-4.jpg', 'portfolio-8-5.jpg',
                'portfolio-8-6.jpg', 'portfolio-8-7.jpg', 'portfolio-8-8.jpg', 'portfolio-8-9.jpg', 'portfolio-8-10.jpg',
                'portfolio-8-11.jpg', 'portfolio-8-12.jpg', 'portfolio-8-13.jpg', 'portfolio-8-14.jpg', 'portfolio-8-15.jpg',
                'portfolio-8-16.jpg', 'portfolio-8-17.jpg', 'portfolio-8-18.jpg', 'portfolio-8-19.jpg', 'portfolio-8-20.jpg',
                'portfolio-8-21.jpg', 'portfolio-8-22.jpg', 'portfolio-8-23.jpg', 'portfolio-8-24.jpg', 'portfolio-8-25.jpg',
                'portfolio-8-26.jpg', 'portfolio-8-27.jpg'
            ],
            'title' => 'Pool mit Ausblick',
            'description' => 'Pool mit Ausblick',
            'full_description' => 'Hier sehen Sie einige Referenzen aus den letzten Jahren'
        ], 9 => [
            'id' => 9,
            'images' => [
                'portfolio-8-1.jpg', 'portfolio-8-2.jpg', 'portfolio-8-3.jpg', 'portfolio-8-4.jpg', 'portfolio-8-5.jpg',
                'portfolio-8-6.jpg', 'portfolio-8-7.jpg', 'portfolio-8-8.jpg', 'portfolio-8-9.jpg', 'portfolio-8-10.jpg',
                'portfolio-8-11.jpg', 'portfolio-8-12.jpg', 'portfolio-8-13.jpg', 'portfolio-8-14.jpg', 'portfolio-8-15.jpg',
                'portfolio-8-16.jpg', 'portfolio-8-17.jpg', 'portfolio-8-18.jpg', 'portfolio-8-19.jpg', 'portfolio-8-20.jpg',
                'portfolio-8-21.jpg', 'portfolio-8-22.jpg', 'portfolio-8-23.jpg', 'portfolio-8-24.jpg', 'portfolio-8-25.jpg',
                'portfolio-8-26.jpg', 'portfolio-8-27.jpg'
            ],
            'title' => 'Poolanlage Regensburg',
            'description' => 'Poolanlage Regensburg',
            'full_description' => 'Hier sehen Sie einige Referenzen aus den letzten Jahren'
        ],
        10 => [
            'id' => 10,
            'images' => [
                'portfolio-8-1.jpg', 'portfolio-8-2.jpg', 'portfolio-8-3.jpg', 'portfolio-8-4.jpg', 'portfolio-8-5.jpg',
                'portfolio-8-6.jpg', 'portfolio-8-7.jpg', 'portfolio-8-8.jpg', 'portfolio-8-9.jpg', 'portfolio-8-10.jpg',
                'portfolio-8-11.jpg', 'portfolio-8-12.jpg', 'portfolio-8-13.jpg', 'portfolio-8-14.jpg', 'portfolio-8-15.jpg',
                'portfolio-8-16.jpg', 'portfolio-8-17.jpg', 'portfolio-8-18.jpg', 'portfolio-8-19.jpg', 'portfolio-8-20.jpg',
                'portfolio-8-21.jpg', 'portfolio-8-22.jpg', 'portfolio-8-23.jpg', 'portfolio-8-24.jpg', 'portfolio-8-25.jpg',
                'portfolio-8-26.jpg', 'portfolio-8-27.jpg'
            ],
            'title' => 'Pool mit Holzeinfassung',
            'description' => 'Pool mit Holzeinfassung',
            'full_description' => 'Hier sehen Sie einige Referenzen aus den ersten Jahren'
        ],
        11 => [
            'id' => 11,
            'images' => [
                'portfolio-8-1.jpg', 'portfolio-8-2.jpg', 'portfolio-8-3.jpg', 'portfolio-8-4.jpg', 'portfolio-8-5.jpg',
                'portfolio-8-6.jpg', 'portfolio-8-7.jpg', 'portfolio-8-8.jpg', 'portfolio-8-9.jpg', 'portfolio-8-10.jpg',
                'portfolio-8-11.jpg', 'portfolio-8-12.jpg', 'portfolio-8-13.jpg', 'portfolio-8-14.jpg', 'portfolio-8-15.jpg',
                'portfolio-8-16.jpg', 'portfolio-8-17.jpg', 'portfolio-8-18.jpg', 'portfolio-8-19.jpg', 'portfolio-8-20.jpg',
                'portfolio-8-21.jpg', 'portfolio-8-22.jpg', 'portfolio-8-23.jpg', 'portfolio-8-24.jpg', 'portfolio-8-25.jpg',
                'portfolio-8-26.jpg', 'portfolio-8-27.jpg'
            ],
            'title' => 'Pool mit grauer Folie',
            'description' => 'Pool mit grauer Folie',
            'full_description' => 'Hier sehen Sie einige Referenzen aus den ersten Jahren'
        ],
        12 => [
            'id' => 12,
            'images' => [
                // 5
                'portfolio-11-1.jpg',
                'portfolio-11-2.jpg',
                'portfolio-11-3.jpg',
                'portfolio-11-4.jpg',
                'portfolio-11-5.jpg',
            ],
            'title' => 'Gartenanlage mit Pool 7 x 3,5 m',
            'description' => 'Gartenanlage mit Pool 7 x 3,5 m',
            'full_description' => ''
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
