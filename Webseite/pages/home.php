<?php
/**
 * Page: Startseite / Home
 */

$page_title       = 'Frühstückserlebnis & Kaffeespezialitäten im Treibhaus';
$meta_description = 'Garten Café Magnolia in Handewitt – einzigartiges Frühstückserlebnis, Kaffeespezialitäten & Genuss im Grünen. Im Treibhaus des Gartencenters Garten2000. Jetzt Tisch reservieren.';
$og_title         = 'Garten Café Magnolia – Frühstück & Kaffee im Treibhaus';

require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';

// Öffnungszeiten (hier editierbar)
$opening_hours = [
    'monday'    => ['label' => 'Montag',     'hours' => '09:00 – 17:00'],
    'tuesday'   => ['label' => 'Dienstag',   'hours' => '09:00 – 17:00'],
    'wednesday' => ['label' => 'Mittwoch',   'hours' => '09:00 – 17:00'],
    'thursday'  => ['label' => 'Donnerstag', 'hours' => '09:00 – 17:00'],
    'friday'    => ['label' => 'Freitag',    'hours' => '09:00 – 18:00'],
    'saturday'  => ['label' => 'Samstag',    'hours' => '09:00 – 18:00'],
    'sunday'    => ['label' => 'Sonntag',    'hours' => 'Geschlossen', 'closed' => true],
];
?>

<main id="main-content" class="site-main">

  <!-- ════════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════════ -->
  <section class="hero" aria-label="Willkommen im Garten Café Magnolia">
    <div class="hero-bg">
      <!-- Animated leaf SVGs -->
      <div class="hero-leaves" aria-hidden="true">
        <svg class="hero-leaf" style="top:15%;left:8%;width:120px;" viewBox="0 0 120 160" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M60 155 C15 120 5 70 60 5 C115 70 105 120 60 155Z" fill="#2ea88e"/>
          <line x1="60" y1="155" x2="60" y2="5" stroke="#1C5E52" stroke-width="1.5"/>
        </svg>
        <svg class="hero-leaf" style="top:55%;right:6%;width:180px;animation-delay:-3s;animation-duration:11s;" viewBox="0 0 120 160" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M60 155 C15 120 5 70 60 5 C115 70 105 120 60 155Z" fill="#d90076"/>
          <line x1="60" y1="155" x2="60" y2="5" stroke="#b00062" stroke-width="1.5"/>
        </svg>
        <svg class="hero-leaf" style="bottom:10%;left:30%;width:90px;animation-delay:-1.5s;animation-duration:9s;" viewBox="0 0 120 160" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M60 155 C15 120 5 70 60 5 C115 70 105 120 60 155Z" fill="#F6EEE3"/>
          <line x1="60" y1="155" x2="60" y2="5" stroke="#ccc" stroke-width="1.5"/>
        </svg>
        <svg class="hero-leaf" style="top:25%;right:22%;width:70px;animation-delay:-4s;animation-duration:13s;" viewBox="0 0 120 160" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M60 155 C15 120 5 70 60 5 C115 70 105 120 60 155Z" fill="#2ea88e"/>
        </svg>
      </div>
    </div>

    <div class="container hero-content">
      <div class="hero-tag">🌿 Im Herzen des Treibhauses</div>
      <h1>Garten Café<br><span class="gradient-text">Magnolia</span></h1>
      <p class="hero-sub">Frühstückserlebnis, Kaffeespezialitäten &amp; Genuss im Grünen.</p>
      <div class="hero-ctas">
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=tischreservieren" class="btn btn-accent">🗓 Tisch reservieren</a>
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=speisekarte"      class="btn btn-ghost-light">📋 Speisekarte ansehen</a>
      </div>
    </div>

    <div class="hero-scroll" aria-hidden="true">
      <div class="hero-scroll-line"></div>
      <span>Entdecken</span>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════
       USP KACHELN
  ═══════════════════════════════════════════════════════════════ -->
  <section class="section bg-light" aria-labelledby="usp-heading">
    <div class="container">
      <div class="section-header text-center reveal">
        <span class="section-tag">Was uns besonders macht</span>
        <h2 id="usp-heading">Ein Ort für alle Sinne</h2>
        <p>Erlebe ein einzigartiges Café-Erlebnis inmitten grüner Pflanzen, frischen Aromen und herzlichem Service.</p>
      </div>

      <div class="usp-grid">
        <div class="usp-card reveal reveal-delay-1">
          <div class="usp-icon" aria-hidden="true">🌿</div>
          <h3>Frühstück im Treibhaus</h3>
          <p>Genieße dein Frühstück umgeben von tropischen Pflanzen – ein unvergessliches Erlebnis mitten in der Natur.</p>
        </div>
        <div class="usp-card reveal reveal-delay-2">
          <div class="usp-icon" aria-hidden="true">☕</div>
          <h3>Kaffeespezialitäten</h3>
          <p>Von cremigem Cappuccino bis zum handgefertigten Pour-over – wir lieben guten Kaffee und zeigen das in jeder Tasse.</p>
        </div>
        <div class="usp-card reveal reveal-delay-3">
          <div class="usp-icon" aria-hidden="true">🗺️</div>
          <h3>Draußen &amp; drinnen erreichbar</h3>
          <p>Unser Café liegt im Gartencenter Garten2000, ist aber auch direkt von außen – ohne Eintritt – erreichbar.</p>
        </div>
        <div class="usp-card reveal reveal-delay-4">
          <div class="usp-icon" aria-hidden="true">🌱</div>
          <h3>Nachhaltig &amp; regional</h3>
          <p>Wir beziehen unsere Zutaten bevorzugt von regionalen Erzeugern und setzen auf nachhaltige Praktiken.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════
       ARRANGEMENTS TEASER
  ═══════════════════════════════════════════════════════════════ -->
  <section class="section" aria-labelledby="arrangements-heading">
    <div class="container">
      <div class="section-header flex-between" style="flex-wrap:wrap;gap:1rem;">
        <div class="reveal">
          <span class="section-tag">Besondere Momente</span>
          <h2 id="arrangements-heading">Unsere Arrangements</h2>
          <p>Von der romantischen Tea Time bis zum Familienfrühstück – für jeden Anlass das passende Erlebnis.</p>
        </div>
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=arrangements" class="btn btn-ghost reveal">Alle Arrangements →</a>
      </div>

      <div class="grid-3">
        <div class="card reveal reveal-delay-1">
          <div class="card-img">
            <div class="img-placeholder">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 8C8 10 5.9 16.17 3.82 22M9.1 17.4c.8.8 2.1 1.9 3.1 2.6M16 21c0-4.4-6-7-6-7M12 10c0 0-2-3-5-3M12 10c0 0 2-3 5-3"/></svg>
              <span>Tea Time Bild</span>
            </div>
          </div>
          <div class="card-body">
            <span class="card-tag">Ab 2 Personen</span>
            <h3>Tea Time</h3>
            <p>Ein romantisches Tee-Erlebnis mit feinen Sandwiches, Scones und Gebäck im Grünen.</p>
            <div class="card-price">ab <strong>18,50 €</strong> p.P.</div>
            <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=arrangements" class="btn btn-primary btn-sm">Mehr erfahren</a>
          </div>
        </div>

        <div class="card reveal reveal-delay-2">
          <div class="card-img">
            <div class="img-placeholder">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              <span>Mini-Treibhaus Bild</span>
            </div>
          </div>
          <div class="card-body">
            <span class="card-tag">6 – 8 Personen</span>
            <h3>Mini-Treibhaus</h3>
            <p>Exklusive Nutzung unseres kleineren Gewächshauses für Gruppen – perfekt für besondere Anlässe.</p>
            <div class="card-price">ab <strong>22,00 €</strong> p.P.</div>
            <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=arrangements" class="btn btn-primary btn-sm">Mehr erfahren</a>
          </div>
        </div>

        <div class="card reveal reveal-delay-3">
          <div class="card-img">
            <div class="img-placeholder">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M6 20v-2a4 4 0 014-4h4a4 4 0 014 4v2"/></svg>
              <span>Familienfrühstück Bild</span>
            </div>
          </div>
          <div class="card-body">
            <span class="card-tag">Für die ganze Familie</span>
            <h3>Familienfrühstück</h3>
            <p>Das große Frühstücksbuffet für die ganze Familie – genießt gemeinsam inmitten des Gewächshauses.</p>
            <div class="card-price">ab <strong>15,90 €</strong> p.P.</div>
            <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=arrangements" class="btn btn-primary btn-sm">Mehr erfahren</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════
       ÖFFNUNGSZEITEN & ANFAHRT
  ═══════════════════════════════════════════════════════════════ -->
  <section class="section bg-light" aria-labelledby="hours-heading">
    <div class="container">
      <div class="section-header text-center reveal">
        <span class="section-tag">Wir freuen uns auf dich</span>
        <h2 id="hours-heading">Öffnungszeiten &amp; Anfahrt</h2>
        <p>Besuche uns im Treibhaus – auch ohne Eintritt in das Gartencenter erreichbar.</p>
      </div>

      <div class="hours-map-grid">
        <div class="hours-card reveal">
          <h3 style="margin-bottom:1.5rem;">Öffnungszeiten</h3>
          <table class="hours-table" aria-label="Öffnungszeiten">
            <tbody>
              <?php foreach ($opening_hours as $day_key => $day): ?>
                <tr data-day="<?= htmlspecialchars($day_key, ENT_QUOTES, 'UTF-8') ?>"<?= isset($day['closed']) ? ' class="closed"' : '' ?>>
                  <td><?= htmlspecialchars($day['label'], ENT_QUOTES, 'UTF-8') ?></td>
                  <td><?= htmlspecialchars($day['hours'], ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <div class="hours-note" role="note">
            <span aria-hidden="true">ℹ️</span>
            <span>Unser Café ist <strong>auch außerhalb des Gartencenters erreichbar</strong> – kein Eintritt nötig.</span>
          </div>

          <div style="margin-top:1.5rem;">
            <p style="font-size:.9rem;color:color-mix(in srgb, var(--dark) 60%, transparent);margin-bottom:.5rem;">
              <strong>Adresse:</strong> Altholzkrug 40, 24976 Handewitt
            </p>
            <p style="font-size:.9rem;color:color-mix(in srgb, var(--dark) 60%, transparent);">
              Im Gartencenter Garten2000 GmbH &amp; Co. KG
            </p>
          </div>
        </div>

        <div class="map-wrap reveal reveal-delay-1">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2321.0!2d9.35!3d54.77!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sAltholzkrug+40%2C+24976+Handewitt!5e0!3m2!1sde!2sde!4v1700000000000!5m2!1sde!2sde"
            title="Standort Garten Café Magnolia auf Google Maps"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen
            aria-label="Google Maps Karte: Altholzkrug 40, 24976 Handewitt">
          </iframe>
        </div>
      </div>
    </div>
  </section>


  <!-- ════════════════════════════════════════════════════════════
       GOOGLE BEWERTUNG CTA
  ═══════════════════════════════════════════════════════════════ -->
  <section class="review-section" aria-labelledby="review-heading">
    <div class="container">
      <div class="stars" aria-label="5 von 5 Sternen">
        ⭐⭐⭐⭐⭐
      </div>
      <h2 id="review-heading" class="reveal">Du warst bei uns? Teile deine Erfahrung!</h2>
      <p class="reveal reveal-delay-1">
        Deine Bewertung hilft uns zu wachsen und anderen Gästen, uns zu finden.
        Wir freuen uns über jedes Feedback!
      </p>
      <div class="reveal reveal-delay-2">
        <!-- TODO: Echte Google-Bewertungs-URL hier eintragen -->
        <a href="https://g.page/r/TODO-google-review-url/review"
           target="_blank"
           rel="noopener noreferrer"
           class="btn btn-accent"
           aria-label="Garten Café Magnolia auf Google bewerten (öffnet in neuem Tab)">
          ⭐ Auf Google bewerten
        </a>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
