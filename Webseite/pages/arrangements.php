<?php
/**
 * Page: Arrangements
 */
$page_title       = 'Arrangements – Tea Time, Familienfrühstück & mehr';
$meta_description = 'Besondere Erlebnisse im Garten Café Magnolia: Tea Time, Mini-Treibhaus für Gruppen, Familienfrühstück im Gewächshaus & Kaffeeklatsch auf der Terrasse.';
$og_title         = 'Arrangements – Garten Café Magnolia';

require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';

$arrangements = [
  [
    'icon'     => '☕',
    'badge'    => 'Beliebt',
    'name'     => 'Tea Time',
    'tagline'  => 'Ein Genuss für alle Sinne',
    'desc'     => 'Erlebe eine klassische Tea Time im stimmungsvollen Gewächshaus. Duftende Tees, feine Sandwiches, Scones mit Clotted Cream & saisonales Gebäck – eine kleine Auszeit vom Alltag.',
    'min_persons' => 2,
    'max_persons' => 6,
    'duration' => 'ca. 1,5 Std.',
    'price'    => 'ab 18,50 € p.P.',
    'includes' => [
      'Auswahl feiner Tees',
      'Assortment von Sandwiches & Häppchen',
      'Frisch gebackene Scones',
      'Hausgemachtes Gebäck & Kuchen',
      'Dekorierter Tisch im Treibhaus',
    ],
  ],
  [
    'icon'     => '🌿',
    'badge'    => 'Exklusiv',
    'name'     => 'Mini-Treibhaus',
    'tagline'  => 'Euer eigenes Grünes Paradies',
    'desc'     => 'Reserviert exklusiv unser kleineres Treibhaus-Segment für euren besonderen Anlass. Ob Geburtstag, Jubiläum oder Firmenevent – ein unvergesslicher Rahmen für 6–8 Personen.',
    'min_persons' => 6,
    'max_persons' => 8,
    'duration' => 'ca. 2 Std.',
    'price'    => 'ab 22,00 € p.P.',
    'includes' => [
      'Exklusive Nutzung des Mini-Treibhauses',
      'Individuelles Frühstücksbuffet',
      'Kaffeespezialitäten inklusive',
      'Persönliche Betreuung',
      'Dekorations-Option buchbar',
    ],
  ],
  [
    'icon'     => '👨‍👩‍👧‍👦',
    'badge'    => 'Für Familien',
    'name'     => 'Familienfrühstück im Gewächshaus',
    'tagline'  => 'Gemeinsam genießen im Grünen',
    'desc'     => 'Das große Familienfrühstück mit allem, was das Herz begehrt: herzhaftes Buffet, Süßes, frische Säfte, Kaffee & Kindersäfte. Inmitten üppiger Pflanzen – ein besonderes Erlebnis für die ganze Familie.',
    'min_persons' => 3,
    'max_persons' => 12,
    'duration' => 'ca. 2 Std.',
    'price'    => 'ab 15,90 € p.P.',
    'includes' => [
      'Herzhafte & süße Buffet-Auswahl',
      'Frische Fruchtsäfte',
      'Kaffee & Tee unbegrenzt',
      'Kindersäfte & -getränke',
      'Kinderfreundliche Atmosphäre',
    ],
  ],
  [
    'icon'     => '☀️',
    'badge'    => 'Saisonal',
    'name'     => 'Kaffeeklatsch auf der Terrasse',
    'tagline'  => 'Draußen unter dem Himmel',
    'desc'     => 'An warmen Tagen zieht der Genuss nach draußen: Auf unserer Terrasse mit Blick ins Grüne genießt ihr Kaffeespezialitäten, hausgemachten Kuchen und gute Gespräche. Perfekt für spontane Treffen.',
    'min_persons' => 2,
    'max_persons' => 8,
    'duration' => 'Nach Wunsch',
    'price'    => 'ab 9,50 € p.P.',
    'includes' => [
      'Kaffeespezialität deiner Wahl',
      'Kuchen aus dem Tagesangebot',
      'Platz auf der Sonnenterrasse',
      'Ideal bei schönem Wetter',
    ],
  ],
];
?>

<main id="main-content" class="site-main">

  <!-- Page Hero -->
  <section class="page-hero" aria-labelledby="arr-heading">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Startseite</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Arrangements</span>
      </nav>
      <h1 id="arr-heading">Arrangements</h1>
      <p>Für jeden Anlass das passende Erlebnis – curated for you.</p>
    </div>
  </section>


  <!-- Arrangements Cards -->
  <section class="section" aria-label="Unsere Arrangements">
    <div class="container">
      <div class="section-header text-center reveal">
        <span class="section-tag">Besondere Erlebnisse</span>
        <h2>Curated Moments</h2>
        <p>Lass dich verwöhnen – von der Tea Time bis zum exklusiven Treibhaus-Event.</p>
      </div>

      <div class="arrangements-scroll">
        <?php foreach ($arrangements as $i => $arr): ?>
          <article class="arrangement-card reveal reveal-delay-<?= ($i % 4) + 1 ?>">
            <div class="arrangement-img">
              <div class="img-placeholder" style="font-size:3.5rem;"><?= $arr['icon'] ?></div>
              <?php if (!empty($arr['badge'])): ?>
                <div class="arrangement-badge"><?= htmlspecialchars($arr['badge'], ENT_QUOTES, 'UTF-8') ?></div>
              <?php endif; ?>
            </div>
            <div class="arrangement-body">
              <h3><?= htmlspecialchars($arr['name'], ENT_QUOTES, 'UTF-8') ?></h3>
              <p class="serif" style="font-size:.95rem;margin-bottom:.5rem;font-style:italic;color:var(--primary);">
                <?= htmlspecialchars($arr['tagline'], ENT_QUOTES, 'UTF-8') ?>
              </p>
              <p><?= htmlspecialchars($arr['desc'], ENT_QUOTES, 'UTF-8') ?></p>

              <div class="arrangement-meta">
                <span>👥 <?= $arr['min_persons'] ?>–<?= $arr['max_persons'] ?> Personen</span>
                <span>⏱ <?= htmlspecialchars($arr['duration'], ENT_QUOTES, 'UTF-8') ?></span>
              </div>

              <div class="arrangement-price"><?= htmlspecialchars($arr['price'], ENT_QUOTES, 'UTF-8') ?></div>

              <ul class="arrangement-includes" aria-label="Im Arrangement enthalten">
                <?php foreach ($arr['includes'] as $include): ?>
                  <li><?= htmlspecialchars($include, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
              </ul>

              <a href="/?page=tischreservieren" class="btn btn-accent btn-sm">
                Anfragen &amp; Reservieren
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- Hinweis & CTA -->
  <section class="section bg-light">
    <div class="container">
      <div class="highlight-box text-center reveal">
        <h3 style="margin-bottom:.75rem;">Individuelles Arrangement gewünscht?</h3>
        <p style="margin-inline:auto;max-width:55ch;margin-bottom:1.5rem;">
          Du hast einen besonderen Anlass oder besondere Wünsche? Wir stellen gerne ein
          individuelles Arrangement für dich zusammen. Schreib uns einfach an!
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
          <a href="/?page=tischreservieren" class="btn btn-accent">🗓 Jetzt anfragen</a>
          <a href="mailto:info@gartencafe-magnolia.de" class="btn btn-ghost">✉ E-Mail schreiben</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
