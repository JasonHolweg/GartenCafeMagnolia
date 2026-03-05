<?php
/**
 * Page: Impressum
 */
$page_title       = 'Impressum';
$meta_description = 'Impressum des Garten Café Magnolia GbR – Angaben gemäß § 5 TMG.';
$og_title         = 'Impressum – Garten Café Magnolia';

// No-index for legal pages
header('X-Robots-Tag: noindex, nofollow');

require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>

<main id="main-content" class="site-main">

  <!-- Page Hero -->
  <section class="page-hero" aria-labelledby="imprint-heading">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Startseite</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Impressum</span>
      </nav>
      <h1 id="imprint-heading">Impressum</h1>
      <p>Angaben gemäß § 5 TMG</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="legal-content">

        <h2>Angaben gemäß § 5 TMG</h2>
        <address>
          <strong>Garten Café Magnolia GbR</strong><br>
          Altholzkrug 40<br>
          24976 Handewitt<br>
          Deutschland
        </address>

        <h3>Gesellschafter</h3>
        <p>Jason Holweg &amp; Kristian Meister</p>

        <h3>Kontakt</h3>
        <p>
          E-Mail: <a href="mailto:info@gartencafe-magnolia.de">info@gartencafe-magnolia.de</a><br>
          Telefon: <em>[Bitte Telefonnummer ergänzen]</em>
        </p>

        <h2>Umsatzsteuer-ID</h2>
        <p>
          Sofern eine Umsatzsteuer-Identifikationsnummer gemäß § 27a UStG vorliegt, wird diese hier ergänzt:<br>
          <em>[Falls vorhanden – bitte prüfen und eintragen]</em>
        </p>

        <h2>Berufsrechtliche Regelungen</h2>
        <p>Garten Café Magnolia GbR ist als Gastronomie-/Einzelhandelbetrieb tätig. Es gelten die jeweils anwendbaren gesetzlichen Vorschriften.</p>

        <h2>EU-Streitschlichtung</h2>
        <p>
          Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:
          <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer">
            https://ec.europa.eu/consumers/odr/
          </a><br>
          Unsere E-Mail-Adresse finden Sie oben im Impressum.
        </p>

        <h2>Verbraucherstreitbeilegung / Universalschlichtungsstelle</h2>
        <p>
          Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer
          Verbraucherschlichtungsstelle teilzunehmen.
        </p>

        <h2>Haftung für Inhalte</h2>
        <p>
          Als Diensteanbieter sind wir gemäß § 7 Abs. 1 TMG für eigene Inhalte auf diesen Seiten nach den
          allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht
          verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen
          zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
        </p>
        <p>
          Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen
          Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der
          Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden
          Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.
        </p>

        <h2>Haftung für Links</h2>
        <p>
          Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben.
          Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der
          verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.
        </p>

        <h2>Urheberrecht</h2>
        <p>
          Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen
          Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der
          Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
          Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.
        </p>

        <p style="font-size:.85rem;color:color-mix(in srgb, var(--dark) 50%, transparent);margin-top:2rem;">
          <em>Stand: <?= date('m/Y') ?></em>
        </p>

      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
