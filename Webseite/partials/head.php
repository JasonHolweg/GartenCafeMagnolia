<?php
/**
 * Partial: <head> section
 * Variables expected (set before include):
 *   $page_title       string – SEO title
 *   $meta_description string – meta description
 *   $og_title         string – OG title (falls back to $page_title)
 *   $og_description   string – OG description (falls back to $meta_description)
 *   $og_image         string – absolute URL to OG image (optional)
 *   $canonical        string – canonical URL (optional)
 */

$site_name        = 'Garten Café Magnolia';
$base_url         = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http')
                    . '://' . htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
$page_url         = $base_url . htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');

$page_title       = isset($page_title)       ? $page_title       : 'Frühstück & Kaffeespezialitäten in Handewitt';
$meta_description = isset($meta_description) ? $meta_description : 'Das Garten Café Magnolia bietet ein einzigartiges Frühstückserlebnis im Treibhaus – Kaffeespezialitäten & Genuss im Grünen. Tischreservierung online möglich.';
$og_title         = isset($og_title)         ? $og_title         : $page_title;
$og_description   = isset($og_description)   ? $og_description   : $meta_description;
$og_image         = isset($og_image)         ? $og_image         : $base_url . '/assets/img/og-default.png';
$canonical        = isset($canonical)        ? $canonical        : $page_url;

$full_title = $page_title . ' | ' . $site_name;
?>
<!DOCTYPE html>
<html lang="de" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Primary Meta -->
  <title><?= htmlspecialchars($full_title, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="author"      content="Garten Café Magnolia GbR">
  <link rel="canonical"    href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:site_name"   content="<?= htmlspecialchars($site_name, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:title"       content="<?= htmlspecialchars($og_title, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($og_description, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image"       content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:url"         content="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= htmlspecialchars($og_title, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($og_description, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:image"       content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">

  <!-- Favicon (SVG inline) -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌸</text></svg>">

  <!-- Fonts: system stack first, Inter as web-safe upgrade -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<a class="skip-link" href="#main-content">Zum Inhalt springen</a>
