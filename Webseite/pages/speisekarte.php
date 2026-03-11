<?php
/**
 * Page: Speisekarte
 * Datenhaltung: PHP-Array (kann leicht in JSON/DB migriert werden)
 */
$page_title       = 'Speisekarte – Frühstück, Kaffee & mehr';
$meta_description = 'Entdecke die Speisekarte des Garten Café Magnolia: Frühstücksspezialitäten, Kaffeespezialitäten, Kuchen & Süßes sowie Getränke. Vegan, vegetarisch & glutenfrei Optionen.';
$og_title         = 'Speisekarte – Garten Café Magnolia';

require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';

// ─────────────────────────────────────────────────────────────────────
// Speisekarten-Daten (editierbar)
// ─────────────────────────────────────────────────────────────────────
$menu = [
  'fruehstueck' => [
    'label' => 'Frühstück',
    'icon'  => '🥐',
    'items' => [
      ['name' => 'Magnolia Frühstück',        'desc' => 'Frischkäse, Aufschnitt, Ei, Marmelade, Butter, Brot-Auswahl & Kaffee',  'price' => '13,90', 'vegan' => 0, 'veggie' => 1, 'gf' => 0],
      ['name' => 'Veganes Treibhaus-Frühstück','desc' => 'Avocado, Hummus, Tomaten, Gurke, Sprossen, Brot & Saft',                'price' => '11,90', 'vegan' => 1, 'veggie' => 1, 'gf' => 0],
      ['name' => 'Avocado Toast',              'desc' => 'Auf Sauerteig, mit Cherry-Tomaten, Chili-Flocken & Microgreens',         'price' => '9,50',  'vegan' => 1, 'veggie' => 1, 'gf' => 0],
      ['name' => 'Granola Bowl',               'desc' => 'Hausgemachtes Granola, Joghurt, Beeren & Honig',                         'price' => '7,90',  'vegan' => 0, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Rührei mit Brot',            'desc' => 'Zwei Eier mit Schnittlauch, Brot & frischen Tomatenscheiben',            'price' => '8,50',  'vegan' => 0, 'veggie' => 1, 'gf' => 0],
      ['name' => 'Eggs Benedict',              'desc' => 'Pochierte Eier auf English Muffin mit Hollandaise & Lachs',              'price' => '12,90', 'vegan' => 0, 'veggie' => 0, 'gf' => 0],
    ],
  ],
  'kaffee' => [
    'label' => 'Kaffee & Espresso',
    'icon'  => '☕',
    'items' => [
      ['name' => 'Espresso',          'desc' => 'Single Shot, kräftig & aromatisch',                               'price' => '2,80',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Doppelter Espresso','desc' => 'Doppelter Shot für Kaffeeliebhaber',                               'price' => '3,50',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Cappuccino',        'desc' => 'Espresso mit cremig aufgeschäumter Milch',                         'price' => '3,80',  'vegan' => 0, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Flat White',        'desc' => 'Intensiver Espresso mit seidigem Milchdampf',                      'price' => '4,20',  'vegan' => 0, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Latte Macchiato',   'desc' => 'Schichtweise Milch, Espresso & Milchschaum',                       'price' => '4,50',  'vegan' => 0, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Oat Latte',         'desc' => 'Espresso mit Hafermilch – vollmundig & pflanzlich',                'price' => '4,80',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Cold Brew',         'desc' => '12h kalt gezogen, sanft & erfrischend',                            'price' => '4,90',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Filterkaffee',      'desc' => 'Täglich frisch gebrüht, klassisch & aromatisch',                   'price' => '2,90',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
    ],
  ],
  'kuchen' => [
    'label' => 'Kuchen & Süßes',
    'icon'  => '🍰',
    'items' => [
      ['name' => 'Magnolia Cheesecake',    'desc' => 'Cremiger New-York-Style Cheesecake mit Beerentopping',         'price' => '5,90',  'vegan' => 0, 'veggie' => 1, 'gf' => 0],
      ['name' => 'Tagesgebäck',            'desc' => 'Frisch gebacken – bitte frag nach dem aktuellen Angebot',       'price' => '3,50',  'vegan' => 0, 'veggie' => 1, 'gf' => 0],
      ['name' => 'Veganer Brownie',        'desc' => 'Saftig, schokoladig & 100 % pflanzlich',                        'price' => '4,20',  'vegan' => 1, 'veggie' => 1, 'gf' => 0],
      ['name' => 'Glutenfreier Mohnkuchen','desc' => 'Saftig mit Mohnfüllung, glutenfreier Boden',                    'price' => '4,80',  'vegan' => 0, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Waffel',                 'desc' => 'Knusprige belgische Waffel mit Sahne & frischen Beeren',        'price' => '5,50',  'vegan' => 0, 'veggie' => 1, 'gf' => 0],
    ],
  ],
  'getraenke' => [
    'label' => 'Getränke',
    'icon'  => '🥤',
    'items' => [
      ['name' => 'Tee (Saison)',            'desc' => 'Auswahl regionaler & fair gehandelter Teesorten',               'price' => '3,20',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Heiße Schokolade',        'desc' => 'Mit echter Kuvertüre & Milchschaum',                            'price' => '4,20',  'vegan' => 0, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Frischer Orangensaft',    'desc' => 'Direkt gepresst, ohne Zuckerzusatz',                            'price' => '4,80',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Smoothie des Tages',      'desc' => 'Saisonale Früchte, bitte frag nach dem aktuellen Angebot',      'price' => '5,90',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Mineralwasser',           'desc' => 'Still oder mit Kohlensäure (0,3l / 0,5l)',                      'price' => '2,50',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
      ['name' => 'Lemonade (hausgemacht)',  'desc' => 'Zitrone, Minze & Agavensirup – erfrischend & leicht',           'price' => '4,50',  'vegan' => 1, 'veggie' => 1, 'gf' => 1],
    ],
  ],
];
?>

<main id="main-content" class="site-main">

  <!-- Page Hero -->
  <section class="page-hero" aria-labelledby="menu-heading">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/">Startseite</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Speisekarte</span>
      </nav>
      <h1 id="menu-heading">Speisekarte</h1>
      <p>Von herzhaftem Frühstück bis zum perfekten Espresso – alles mit Liebe gemacht.</p>
    </div>
  </section>

  <!-- Menu Content -->
  <section class="section" aria-label="Speisekarte Kategorien">
    <div class="container">

      <!-- Tab Navigation -->
      <div class="menu-tabs" role="tablist" aria-label="Speisekarte Kategorien">
        <?php $first = true; foreach ($menu as $key => $cat): ?>
          <button class="menu-tab-btn <?= $first ? 'active' : '' ?>"
                  role="tab"
                  aria-selected="<?= $first ? 'true' : 'false' ?>"
                  aria-controls="panel-<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>"
                  id="tab-<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>">
            <?= htmlspecialchars($cat['icon'] . ' ' . $cat['label'], ENT_QUOTES, 'UTF-8') ?>
          </button>
          <?php $first = false; endforeach; ?>
      </div>

      <!-- Tab Panels -->
      <?php $first = true; foreach ($menu as $key => $cat): ?>
        <div class="menu-tab-panel <?= $first ? 'active' : '' ?>"
             id="panel-<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>"
             role="tabpanel"
             aria-labelledby="tab-<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>"
             <?= !$first ? 'hidden' : '' ?>>

          <!-- Filter Bar -->
          <div class="menu-filter-bar" role="group" aria-label="Filter">
            <button class="filter-btn active" data-filter="all">Alle</button>
            <button class="filter-btn" data-filter="vegan">🌱 Vegan</button>
            <button class="filter-btn" data-filter="veggie">🥗 Vegetarisch</button>
            <button class="filter-btn" data-filter="gf">🌾 Glutenfrei</button>
          </div>

          <div class="menu-grid">
            <?php foreach ($cat['items'] as $item): ?>
              <article class="menu-item"
                       data-vegan="<?= $item['vegan'] ?>"
                       data-veggie="<?= $item['veggie'] ?>"
                       data-gf="<?= $item['gf'] ?>">
                <div class="menu-item-img">
                  <div class="img-placeholder">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                  </div>
                </div>
                <div class="menu-item-body">
                  <h4><?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') ?></h4>
                  <p><?= htmlspecialchars($item['desc'], ENT_QUOTES, 'UTF-8') ?></p>
                  <div class="menu-item-footer">
                    <span class="menu-price"><?= htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8') ?> €</span>
                    <div class="badges">
                      <?php if ($item['vegan']): ?><span class="badge badge-vegan" title="Vegan">🌱 Vegan</span><?php endif; ?>
                      <?php if (!$item['vegan'] && $item['veggie']): ?><span class="badge badge-veggie" title="Vegetarisch">🥗 Veggie</span><?php endif; ?>
                      <?php if ($item['gf']): ?><span class="badge badge-gf" title="Glutenfrei">🌾 GF</span><?php endif; ?>
                    </div>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>

        </div>
        <?php $first = false; endforeach; ?>

    </div>
  </section>

  <!-- Allergen Hinweis -->
  <section class="section--sm bg-light">
    <div class="container">
      <div class="highlight-box text-center reveal">
        <p style="font-size:.9rem;color:color-mix(in srgb, var(--dark) 65%, transparent);margin-inline:auto;">
          🌾 <strong>Allergene &amp; Unverträglichkeiten:</strong>
          Informationen zu Allergenen und Inhaltsstoffen erhältst du gerne auf Anfrage bei unseren Mitarbeitenden.
          Preisänderungen &amp; saisonale Anpassungen vorbehalten. Alle Preise inkl. MwSt.
        </p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" style="text-align:center;">
    <div class="container reveal">
      <h2>Lust bekommen?</h2>
      <p style="margin-inline:auto;margin-bottom:2rem;">Reserviere deinen Tisch und erlebe die Speisekarte live im Treibhaus.</p>
      <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=tischreservieren" class="btn btn-accent">🗓 Jetzt Tisch reservieren</a>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
