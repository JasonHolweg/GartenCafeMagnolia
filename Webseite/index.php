<?php
/**
 * Garten Café Magnolia – index.php
 * Router: lädt Unterseiten via ?page=KEY sicher (LFI-Whitelist)
 */

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
