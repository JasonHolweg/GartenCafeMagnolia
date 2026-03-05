<?php
/**
 * Partial: Site Header & Navigation
 */
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';

$nav_items = [
  ['page' => 'home',             'label' => 'Startseite',       'href' => '/'],
  ['page' => 'ueber-uns',        'label' => 'Über uns',          'href' => '/?page=ueber-uns'],
  ['page' => 'speisekarte',      'label' => 'Speisekarte',       'href' => '/?page=speisekarte'],
  ['page' => 'arrangements',     'label' => 'Arrangements',      'href' => '/?page=arrangements'],
  ['page' => 'tischreservieren', 'label' => 'Tisch reservieren', 'href' => '/?page=tischreservieren'],
];
?>
<header class="site-header" role="banner">
  <div class="container header-inner">

    <!-- Logo -->
    <a href="/" class="site-logo" aria-label="Garten Café Magnolia – Startseite">
      <div class="logo-icon" aria-hidden="true">
        <img src="/assets/img/garten-cafe-magnolia.png" alt="" loading="lazy" decoding="async">
      </div>
      <div>
        <span class="logo-text-top">Garten Café</span>
        <span class="logo-text-bottom">Magnolia</span>
      </div>
    </a>

    <!-- Desktop Nav -->
    <nav class="main-nav" role="navigation" aria-label="Hauptnavigation">
      <?php foreach ($nav_items as $item): ?>
        <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"
           <?= $current_page === $item['page'] ? 'class="active" aria-current="page"' : '' ?>>
          <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <!-- Header Actions -->
    <div class="header-actions">
      <a href="/?page=tischreservieren" class="btn btn-accent btn-sm" aria-label="Tisch reservieren">
        🗓 Reservieren
      </a>
      <button class="hamburger" aria-label="Menü öffnen" aria-expanded="false" aria-controls="mobile-nav">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div>
</header>

<!-- Mobile Navigation -->
<nav class="mobile-nav" id="mobile-nav" role="navigation" aria-label="Mobile Navigation">
  <button class="mobile-nav-close" aria-label="Menü schließen">✕</button>
  <?php foreach ($nav_items as $item): ?>
    <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"
       <?= $current_page === $item['page'] ? 'aria-current="page"' : '' ?>>
      <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
    </a>
  <?php endforeach; ?>
  <div style="margin-top:2rem; display:flex; gap:.75rem; flex-wrap:wrap; justify-content:center;">
    <a href="/?page=tischreservieren" class="btn btn-accent">🗓 Tisch reservieren</a>
    <a href="/?page=speisekarte"      class="btn btn-ghost">📋 Speisekarte</a>
  </div>
</nav>
