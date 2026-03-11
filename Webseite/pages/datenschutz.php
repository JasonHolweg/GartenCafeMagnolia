<?php
/**
 * Page: Datenschutz
 */
$page_title       = 'Datenschutzerklärung';
$meta_description = 'Datenschutzerklärung des Garten Café Magnolia GbR – Informationen zur Verarbeitung deiner Daten gemäß DSGVO.';
$og_title         = 'Datenschutz – Garten Café Magnolia';

// No-index for legal pages
header('X-Robots-Tag: noindex, nofollow');

require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>

<main id="main-content" class="site-main">

  <!-- Page Hero -->
  <section class="page-hero" aria-labelledby="privacy-heading">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/">Startseite</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Datenschutz</span>
      </nav>
      <h1 id="privacy-heading">Datenschutzerklärung</h1>
      <p>Informationen gemäß DSGVO &amp; TTDSG</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="legal-content">

        <p style="background:var(--primary-10);padding:1rem 1.25rem;border-radius:var(--radius);border-left:3px solid var(--primary);font-size:.9rem;">
          <strong>Hinweis:</strong> Diese Datenschutzerklärung ist ein Grundgerüst und muss durch einen
          Rechtsanwalt oder Datenschutzbeauftragten auf Ihre konkrete Situation angepasst werden.
          Textstellen mit <em>[Platzhalter / bitte prüfen]</em> müssen ergänzt bzw. geprüft werden.
        </p>

        <h2>1. Verantwortlicher</h2>
        <address>
          <strong>Garten Café Magnolia GbR</strong><br>
          Jason Holweg &amp; Kristian Meister<br>
          Altholzkrug 40<br>
          24976 Handewitt<br>
          E-Mail: <a href="mailto:info@gartencafe-magnolia.de">info@gartencafe-magnolia.de</a><br>
          Telefon: <em>[Platzhalter / bitte prüfen]</em>
        </address>

        <h2>2. Allgemeines zur Datenverarbeitung</h2>
        <p>
          Wir verarbeiten personenbezogene Daten unserer Nutzer grundsätzlich nur, soweit dies zur Bereitstellung
          einer funktionsfähigen Webseite sowie unserer Inhalte und Leistungen erforderlich ist. Die Verarbeitung
          personenbezogener Daten unserer Nutzer erfolgt regelmäßig nur nach Einwilligung des Nutzers. Eine Ausnahme
          gilt in solchen Fällen, in denen eine vorherige Einholung einer Einwilligung aus tatsächlichen Gründen nicht
          möglich ist und die Verarbeitung der Daten durch gesetzliche Vorschriften gestattet ist.
        </p>

        <h2>3. Hosting</h2>
        <p>
          Diese Webseite wird gehostet bei: <em>[Platzhalter / bitte prüfen: Name &amp; Adresse des Hosters eintragen]</em>.<br>
          Der Hoster wurde sorgfältig ausgewählt und verarbeitet Daten im Auftrag des Verantwortlichen gemäß Art. 28 DSGVO.
          <em>[Ggf. Auftragsverarbeitungsvertrag (AVV) erwähnen]</em>
        </p>

        <h2>4. Server-Logfiles</h2>
        <p>
          Der Hosting-Provider erhebt und speichert automatisch Informationen in sogenannten Server-Logfiles,
          die Ihr Browser automatisch übermittelt. Dies sind:
        </p>
        <ul>
          <li>Browsertyp und Browserversion</li>
          <li>Verwendetes Betriebssystem</li>
          <li>Referrer-URL</li>
          <li>Hostname des zugreifenden Rechners</li>
          <li>Uhrzeit der Serveranfrage</li>
          <li>IP-Adresse</li>
        </ul>
        <p>
          Diese Daten werden nicht mit anderen Datenquellen zusammengeführt.
          Die Erhebung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO.
          <em>[Platzhalter / bitte prüfen: Löschfristen beim Hoster erfragen und hier angeben]</em>
        </p>

        <h2>5. Kontaktformular / Reservierungsanfragen</h2>
        <p>
          Wenn Sie uns über das Reservierungsformular Anfragen zukommen lassen, werden Ihre Angaben
          aus dem Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung
          der Anfrage und für den Fall von Anschlussfragen gespeichert.
        </p>
        <p>
          Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.
        </p>
        <p>
          Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre Anfrage
          mit der Erfüllung eines Vertrags zusammenhängt oder zur Durchführung vorvertraglicher Maßnahmen erforderlich
          ist. In allen übrigen Fällen beruht die Verarbeitung auf unserem berechtigten Interesse an der effektiven
          Bearbeitung der an uns gerichteten Anfragen (Art. 6 Abs. 1 lit. f DSGVO) oder auf Ihrer Einwilligung
          (Art. 6 Abs. 1 lit. a DSGVO) sofern diese abgefragt wurde.
        </p>
        <p>
          Die von Ihnen im Kontaktformular eingegebenen Daten verbleiben bei uns, bis Sie uns zur Löschung
          auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung entfällt.
          Zwingende gesetzliche Bestimmungen – insbesondere Aufbewahrungsfristen – bleiben unberührt.
        </p>

        <h2>6. Google Maps</h2>
        <p>
          Diese Seite nutzt den Kartendienst Google Maps. Anbieter ist die Google Ireland Limited,
          Gordon House, Barrow Street, Dublin 4, Irland.
        </p>
        <p>
          Zur Nutzung der Funktionen von Google Maps ist es notwendig, Ihre IP-Adresse zu speichern.
          Diese Informationen werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert.
          Der Anbieter dieser Seite hat keinen Einfluss auf diese Datenübertragung. Sofern Google Maps aktiviert ist,
          kann Google zum Zwecke der einheitlichen Darstellung der Schriftarten Google Fonts verwenden.
          Beim Aufruf von Google Maps lädt Ihr Browser die benötigten Web Fonts in ihren Browser-Cache,
          um Texte und Schriftarten korrekt anzuzeigen.
        </p>
        <p>
          Die Nutzung von Google Maps erfolgt im Interesse einer ansprechenden Darstellung unserer
          Online-Angebote und an einer leichten Auffindbarkeit der von uns auf der Webseite angegebenen Orte.
          Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.
          Sofern eine entsprechende Einwilligung abgefragt wurde, erfolgt die Verarbeitung ausschließlich auf
          Grundlage von Art. 6 Abs. 1 lit. a DSGVO.
          <em>[Platzhalter / bitte prüfen: ggf. Consent-Management-Tool notwendig]</em>
        </p>
        <p>
          Mehr Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Google:
          <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">
            https://policies.google.com/privacy
          </a>
        </p>

        <h2>7. Google-Bewertungen (Externer Link)</h2>
        <p>
          Auf unserer Webseite befindet sich ein Link zu Google-Bewertungen (Plattform Google My Business /
          Google Maps). Wenn Sie diesen Link aufrufen, verlassen Sie unsere Webseite und werden zu einer
          externen Seite von Google Ireland Limited weitergeleitet. Für die dort stattfindende Datenverarbeitung
          sind wir nicht verantwortlich. Es gelten die Datenschutzbestimmungen von Google:
          <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">
            https://policies.google.com/privacy
          </a>
        </p>

        <h2>8. Google Fonts</h2>
        <p>
          Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so genannte Google Fonts,
          die von Google bereitgestellt werden. Beim Aufruf einer Seite lädt Ihr Browser die benötigten Fonts
          in ihren Browser-Cache, um Texte und Schriftarten korrekt anzuzeigen.
          Zu diesem Zweck muss der von Ihnen verwendete Browser Verbindung zu den Servern von Google aufnehmen.
          <em>[Platzhalter / bitte prüfen: ggf. Fonts lokal hosten, um DSGVO-Konformität sicherzustellen]</em>
        </p>

        <h2>9. Ihre Rechte</h2>
        <p>Sie haben jederzeit das Recht:</p>
        <ul>
          <li>Auskunft über Ihre gespeicherten Daten zu erhalten (Art. 15 DSGVO)</li>
          <li>Berichtigung unrichtiger Daten zu verlangen (Art. 16 DSGVO)</li>
          <li>Löschung Ihrer Daten zu verlangen (Art. 17 DSGVO)</li>
          <li>Einschränkung der Verarbeitung zu verlangen (Art. 18 DSGVO)</li>
          <li>Datenübertragbarkeit zu verlangen (Art. 20 DSGVO)</li>
          <li>Widerspruch gegen die Verarbeitung einzulegen (Art. 21 DSGVO)</li>
          <li>Eine erteilte Einwilligung jederzeit zu widerrufen (Art. 7 Abs. 3 DSGVO)</li>
          <li>Beschwerde bei einer Aufsichtsbehörde einzulegen (Art. 77 DSGVO)</li>
        </ul>
        <p>
          Zur Geltendmachung Ihrer Rechte wenden Sie sich bitte an:
          <a href="mailto:info@gartencafe-magnolia.de">info@gartencafe-magnolia.de</a>
        </p>

        <h2>10. Aufsichtsbehörde</h2>
        <p>
          Die zuständige Datenschutz-Aufsichtsbehörde für Schleswig-Holstein ist:<br>
          Unabhängiges Landeszentrum für Datenschutz Schleswig-Holstein (ULD)<br>
          Holstenstraße 98, 24103 Kiel<br>
          <a href="https://www.datenschutzzentrum.de" target="_blank" rel="noopener noreferrer">
            www.datenschutzzentrum.de
          </a>
        </p>

        <p style="font-size:.85rem;color:color-mix(in srgb, var(--dark) 50%, transparent);margin-top:2rem;">
          <em>Stand: <?= date('m/Y') ?> – Dieses Dokument wurde als Grundgerüst erstellt und muss rechtlich geprüft werden.</em>
        </p>

      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
