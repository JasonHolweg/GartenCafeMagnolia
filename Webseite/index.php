<?php
/**
 * Garten Café Magnolia – index.php
 * Router: lädt Unterseiten via ?page=KEY sicher (LFI-Whitelist)
 */

// Wartungsmodus / Coming Soon
// Auf false setzen, sobald die Website live gehen soll.
$site_under_construction = true;

if ($site_under_construction) {
    require __DIR__ . '/pages/under-construction.php';
    exit;
}

// Whitelist erlaubter Seiten
$allowed_pages = [
    'home',
    'ueber-uns',
    'speisekarte',
    'arrangements',
    'tischreservieren',
    'impressum',
    'datenschutz',
];

$requested = isset($_GET['page']) ? trim($_GET['page']) : 'home';

// LFI-Schutz: nur Whitelist, keine Pfad-Traversal
if (!in_array($requested, $allowed_pages, true)) {
    $requested = 'home';
}

$page_file = __DIR__ . '/pages/' . $requested . '.php';

// Fallback auf home wenn Datei fehlt
if (!is_file($page_file)) {
    $requested = 'home';
    $page_file = __DIR__ . '/pages/home.php';
}

// Home-Seite direkt rendern (kein Redirect nötig)
require $page_file;
