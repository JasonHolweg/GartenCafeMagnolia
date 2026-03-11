<?php
/**
 * Page: Über uns
 */
$page_title       = 'Über uns – Unsere Geschichte & Werte';
$meta_description = 'Lerne das Team hinter dem Garten Café Magnolia kennen. Jason Holweg & Kristian Meister stehen für Qualität, Nachhaltigkeit und ein einzigartiges Café-Erlebnis im Treibhaus.';
$og_title         = 'Über uns – Garten Café Magnolia';

require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>

<main id="main-content" class="site-main">

  <!-- Page Hero -->
  <section class="page-hero" aria-labelledby="about-heading">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/">Startseite</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Über uns</span>
      </nav>
      <h1 id="about-heading">Über uns</h1>
      <p>Menschen, Werte &amp; die Geschichte unseres Café-Projekts im Grünen.</p>
    </div>
  </section>

  <!-- Story -->
  <section class="section" aria-labelledby="story-heading">
    <div class="container">
      <div class="grid-2" style="align-items:center;">
        <div class="reveal">
          <span class="section-tag">Unsere Geschichte</span>
          <h2 id="story-heading">Wo Natur und Genuss<br>aufeinandertreffen</h2>
          <p style="margin-bottom:1rem;">
            Das <strong>Garten Café Magnolia</strong> entstand aus der Leidenschaft für außergewöhnliche Café-Erlebnisse
            und der Liebe zur Natur. Eingebettet in das Treibhaus des Gartencenters Garten2000 in Handewitt,
            bieten wir unseren Gästen eine grüne Oase zum Innehalten, Genießen und Auftanken.
          </p>
          <p style="margin-bottom:1rem;">
            Umgeben von üppigen Pflanzen, durchflutet von natürlichem Licht – unser Café ist kein gewöhnlicher
            Ort. Es ist ein Erlebnis, das alle Sinne anspricht: der Duft frischer Kräuter, das sanfte Rauschen
            der Pflanzen, der Geschmack eines sorgfältig zubereiteten Kaffees.
          </p>
          <p>
            Wir legen größten Wert auf Qualität, regionale Zutaten und nachhaltiges Wirtschaften –
            weil wir glauben, dass guter Genuss und Verantwortungsbewusstsein Hand in Hand gehen.
          </p>
        </div>
        <div class="reveal reveal-delay-1">
          <div style="aspect-ratio:4/3;border-radius:1.5rem;overflow:hidden;background:linear-gradient(135deg,var(--primary-10),rgba(217,0,118,.08));">
            <div class="img-placeholder" style="height:100%;">
              <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M12 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10z"/><path d="M12 12c3 0 5-2.5 5-5M12 12c-3 0-5-2.5-5-5M12 12v10"/></svg>
              <span>Treibhaus Stimmungsbild</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Team -->
  <section class="section bg-light" aria-labelledby="team-heading">
    <div class="container">
      <div class="section-header text-center reveal">
        <span class="section-tag">Die Menschen dahinter</span>
        <h2 id="team-heading">Unser Team</h2>
        <p>Mit Herzblut, Erfahrung und der gemeinsamen Vision, etwas Besonderes zu schaffen.</p>
      </div>

      <div class="grid-2" style="max-width:720px;margin-inline:auto;">
        <div class="team-card reveal reveal-delay-1">
          <div class="team-img">🧑</div>
          <div class="card-body">
            <h3>Jason Holweg</h3>
            <p class="team-role">Gründer &amp; Gesellschafter</p>
            <p>Mit kreativer Vision und unternehmerischem Antrieb hat Jason das Garten Café Magnolia von Grund auf mitgeprägt.</p>
          </div>
        </div>

        <div class="team-card reveal reveal-delay-2">
          <div class="team-img">👨</div>
          <div class="card-body">
            <h3>Kristian Meister</h3>
            <p class="team-role">Gründer &amp; Gesellschafter</p>
            <p>Kristians Leidenschaft für Gastfreundschaft und Qualität sorgt dafür, dass jeder Gast sich rundum wohlfühlt.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Werte -->
  <section class="section" aria-labelledby="values-heading">
    <div class="container">
      <div class="grid-2" style="align-items:start;">
        <div class="reveal">
          <span class="section-tag">Was uns leitet</span>
          <h2 id="values-heading">Unsere Werte</h2>
          <p>Hinter jedem Gericht, jeder Tasse Kaffee und jedem Lächeln steckt unsere Überzeugung:</p>
        </div>
        <div class="values-list reveal reveal-delay-1">
          <div class="value-item">
            <div class="value-icon" aria-hidden="true">🌱</div>
            <div>
              <h4>Nachhaltigkeit</h4>
              <p>Wir handeln mit Blick auf die Zukunft – von der Beschaffung der Zutaten bis zur Verpackung.</p>
            </div>
          </div>
          <div class="value-item">
            <div class="value-icon" aria-hidden="true">🏡</div>
            <div>
              <h4>Regionalität</h4>
              <p>Kurze Lieferwege, frische Qualität: unsere Partner sind so nah wie möglich.</p>
            </div>
          </div>
          <div class="value-item">
            <div class="value-icon" aria-hidden="true">⭐</div>
            <div>
              <h4>Qualität</h4>
              <p>Keine Kompromisse bei den Zutaten – von der Kaffeebohne bis zum frisch gebackenen Kuchen.</p>
            </div>
          </div>
          <div class="value-item">
            <div class="value-icon" aria-hidden="true">💚</div>
            <div>
              <h4>Herzlichkeit</h4>
              <p>Jeder Gast ist bei uns willkommen. Wir schaffen eine Atmosphäre, in der man sich zuhause fühlt.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- CTA -->
  <section class="section bg-light" style="text-align:center;">
    <div class="container reveal">
      <h2>Überzeuge dich selbst</h2>
      <p style="margin-inline:auto;margin-bottom:2rem;max-width:50ch;">
        Worte können das Erlebnis nicht vollständig beschreiben. Komm vorbei und lass dich verzaubern.
      </p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=tischreservieren" class="btn btn-accent">🗓 Jetzt Tisch reservieren</a>
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=speisekarte"      class="btn btn-ghost">📋 Zur Speisekarte</a>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
