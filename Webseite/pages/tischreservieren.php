<?php
/**
 * Page: Tisch Reservieren
 * Server-side validation + mail() stub
 */
$page_title       = 'Tisch reservieren – Jetzt online anfragen';
$meta_description = 'Reserviere deinen Tisch im Garten Café Magnolia in Handewitt. Online-Formular für Tischreservierungen – schnell, einfach, unkompliziert.';
$og_title         = 'Tisch reservieren – Garten Café Magnolia';

// ─────────────────────────────────────────────────────────────────────
// Formular-Handling (POST)
// ─────────────────────────────────────────────────────────────────────
$form_errors  = [];
$form_success = false;
$form_data    = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // JSON-Response für AJAX
  $is_ajax = (
    isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'
  ) || (
    isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false
  );

  // Honeypot check (Feld muss leer sein)
  if (!empty($_POST['website_url'])) {
    // Stiller Erfolg, aber nichts tun (Bot-Block)
    if ($is_ajax) {
      header('Content-Type: application/json');
      echo json_encode(['success' => true, 'name' => 'Gast']);
      exit;
    }
    $form_success = true;
  } else {

    // Eingaben bereinigen
    $name    = trim(htmlspecialchars($_POST['name']    ?? '', ENT_QUOTES, 'UTF-8'));
    $email   = trim(htmlspecialchars($_POST['email']   ?? '', ENT_QUOTES, 'UTF-8'));
    $phone   = trim(htmlspecialchars($_POST['phone']   ?? '', ENT_QUOTES, 'UTF-8'));
    $date    = trim($_POST['date']    ?? '');
    $time    = trim($_POST['time']    ?? '');
    $guests  = (int) ($_POST['guests'] ?? 0);
    $message = trim(htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8'));
    $privacy = isset($_POST['privacy']) && $_POST['privacy'] === '1';

    $form_data = compact('name', 'email', 'phone', 'date', 'time', 'guests', 'message');

    // Validierung
    if (strlen($name) < 2) {
      $form_errors['name'] = 'Bitte gib deinen vollständigen Namen ein.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $form_errors['email'] = 'Bitte gib eine gültige E-Mail-Adresse ein.';
    }
    if (empty($date) || strtotime($date) < strtotime('today')) {
      $form_errors['date'] = 'Bitte wähle ein gültiges Datum aus (nicht in der Vergangenheit).';
    }
    if (empty($time)) {
      $form_errors['time'] = 'Bitte wähle eine Uhrzeit aus.';
    }
    if ($guests < 1 || $guests > 30) {
      $form_errors['guests'] = 'Bitte gib eine gültige Personenzahl ein (1–30).';
    }
    if (!$privacy) {
      $form_errors['privacy'] = 'Bitte stimme der Datenschutzerklärung zu.';
    }

    if (empty($form_errors)) {
      // ── Mail senden (TODO: Konfiguration anpassen) ──────────────────
      $to      = 'reservierung@gartencafe-magnolia.de'; // TODO: echte Adresse
      $subject = 'Neue Tischreservierung von ' . $name;
      $body    = "Neue Reservierungsanfrage:\n\n"
               . "Name:       {$name}\n"
               . "E-Mail:     {$email}\n"
               . "Telefon:    {$phone}\n"
               . "Datum:      {$date}\n"
               . "Uhrzeit:    {$time}\n"
               . "Personen:   {$guests}\n"
               . "Nachricht:  {$message}\n";
      $headers = "From: noreply@gartencafe-magnolia.de\r\n"
               . "Reply-To: {$email}\r\n"
               . "Content-Type: text/plain; charset=UTF-8\r\n";

      // mail($to, $subject, $body, $headers); // TODO: aktivieren wenn live

      $form_success = true;

      if ($is_ajax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'name' => $name]);
        exit;
      }
    } else {
      if ($is_ajax) {
        header('Content-Type: application/json');
        http_response_code(422);
        echo json_encode(['success' => false, 'message' => 'Bitte prüfe deine Eingaben.', 'errors' => $form_errors]);
        exit;
      }
    }
  }
}

require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';

// Öffnungszeiten für Info-Panel
$times = ['08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30'];
?>

<main id="main-content" class="site-main">

  <!-- Page Hero -->
  <section class="page-hero" aria-labelledby="res-heading">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Startseite</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Tisch reservieren</span>
      </nav>
      <h1 id="res-heading">Tisch reservieren</h1>
      <p>Sichere dir deinen Platz im Treibhaus – wir freuen uns auf dich!</p>
    </div>
  </section>

  <!-- Form Section -->
  <section class="section" aria-label="Reservierungsformular">
    <div class="container">
      <div class="reservation-wrap">

        <!-- Info Panel -->
        <aside class="reservation-info reveal">
          <h3>Deine Reservierung</h3>
          <p>Reservierungen werden per E-Mail bestätigt. Bitte rechne mit einer Rückmeldung innerhalb von 24 Stunden.</p>
          <div class="res-info-list">
            <div class="res-info-item">
              <span class="icon">🕐</span>
              <span><strong>Öffnungszeiten:</strong><br>Mo–Fr: 09:00–17:00 Uhr<br>Sa: 09:00–18:00 Uhr<br>So: Geschlossen</span>
            </div>
            <div class="res-info-item">
              <span class="icon">📍</span>
              <span>Altholzkrug 40, 24976 Handewitt<br>Im Gartencenter Garten2000</span>
            </div>
            <div class="res-info-item">
              <span class="icon">ℹ️</span>
              <span>Auch ohne Eintritt in das Gartencenter erreichbar.</span>
            </div>
            <div class="res-info-item">
              <span class="icon">👥</span>
              <span>Für Gruppen ab 8 Personen bitten wir um mindestens 48 h Vorlaufzeit.</span>
            </div>
          </div>
        </aside>

        <!-- Form Card -->
        <div class="form-card reveal reveal-delay-1">

          <?php if ($form_success): ?>
            <div class="booking-success" role="status">
              <div class="icon">🌿</div>
              <h3>Reservierungsanfrage gesendet!</h3>
              <p>Vielen Dank, <?= htmlspecialchars($form_data['name'] ?? 'lieber Gast', ENT_QUOTES, 'UTF-8') ?>!
                Wir melden uns so schnell wie möglich per E-Mail bei dir.</p>
              <a href="/" class="btn btn-primary" style="margin-top:1.5rem;">Zurück zur Startseite</a>
            </div>
          <?php else: ?>

            <h3 style="margin-bottom:1.5rem;">Anfrage senden</h3>

            <form id="reservation-form"
                  action="/?page=tischreservieren"
                  method="POST"
                  novalidate
                  aria-label="Tischreservierung">

              <!-- Honeypot -->
              <div class="honeypot-field" aria-hidden="true">
                <label for="website_url">Website</label>
                <input type="text" id="website_url" name="website_url" tabindex="-1" autocomplete="off">
              </div>

              <div class="form-grid">

                <!-- Name -->
                <div class="form-group">
                  <label for="name">Name <span class="required" aria-label="Pflichtfeld">*</span></label>
                  <input type="text" id="name" name="name"
                         value="<?= htmlspecialchars($form_data['name'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                         autocomplete="name"
                         aria-required="true"
                         aria-describedby="err-name"
                         <?= isset($form_errors['name']) ? 'aria-invalid="true"' : '' ?>>
                  <span id="err-name" class="field-error" role="alert">
                    <?= htmlspecialchars($form_errors['name'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                  </span>
                </div>

                <!-- E-Mail -->
                <div class="form-group">
                  <label for="email">E-Mail <span class="required" aria-label="Pflichtfeld">*</span></label>
                  <input type="email" id="email" name="email"
                         value="<?= htmlspecialchars($form_data['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                         autocomplete="email"
                         aria-required="true"
                         aria-describedby="err-email"
                         <?= isset($form_errors['email']) ? 'aria-invalid="true"' : '' ?>>
                  <span id="err-email" class="field-error" role="alert">
                    <?= htmlspecialchars($form_errors['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                  </span>
                </div>

                <!-- Telefon -->
                <div class="form-group">
                  <label for="phone">Telefon (optional)</label>
                  <input type="tel" id="phone" name="phone"
                         value="<?= htmlspecialchars($form_data['phone'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                         autocomplete="tel">
                </div>

                <!-- Personen -->
                <div class="form-group">
                  <label for="guests">Personen <span class="required" aria-label="Pflichtfeld">*</span></label>
                  <select id="guests" name="guests"
                          aria-required="true"
                          aria-describedby="err-guests"
                          <?= isset($form_errors['guests']) ? 'aria-invalid="true"' : '' ?>>
                    <option value="">Bitte wählen</option>
                    <?php for ($i = 1; $i <= 15; $i++): ?>
                      <option value="<?= $i ?>" <?= ($form_data['guests'] ?? 0) == $i ? 'selected' : '' ?>>
                        <?= $i ?> <?= $i === 1 ? 'Person' : 'Personen' ?>
                      </option>
                    <?php endfor; ?>
                    <option value="16">16+ Personen (Gruppe)</option>
                  </select>
                  <span id="err-guests" class="field-error" role="alert">
                    <?= htmlspecialchars($form_errors['guests'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                  </span>
                </div>

                <!-- Datum -->
                <div class="form-group">
                  <label for="date">Datum <span class="required" aria-label="Pflichtfeld">*</span></label>
                  <input type="date" id="date" name="date"
                         value="<?= htmlspecialchars($form_data['date'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                         min="<?= date('Y-m-d') ?>"
                         aria-required="true"
                         aria-describedby="err-date"
                         <?= isset($form_errors['date']) ? 'aria-invalid="true"' : '' ?>>
                  <span id="err-date" class="field-error" role="alert">
                    <?= htmlspecialchars($form_errors['date'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                  </span>
                </div>

                <!-- Uhrzeit -->
                <div class="form-group">
                  <label for="time">Uhrzeit <span class="required" aria-label="Pflichtfeld">*</span></label>
                  <select id="time" name="time"
                          aria-required="true"
                          aria-describedby="err-time"
                          <?= isset($form_errors['time']) ? 'aria-invalid="true"' : '' ?>>
                    <option value="">Bitte wählen</option>
                    <?php foreach ($times as $t): ?>
                      <option value="<?= $t ?>" <?= ($form_data['time'] ?? '') === $t ? 'selected' : '' ?>>
                        <?= $t ?> Uhr
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <span id="err-time" class="field-error" role="alert">
                    <?= htmlspecialchars($form_errors['time'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                  </span>
                </div>

                <!-- Nachricht -->
                <div class="form-group full">
                  <label for="message">Anmerkungen (optional)</label>
                  <textarea id="message" name="message" rows="3"
                            placeholder="Besondere Wünsche, Allergien, Anlässe …"><?= htmlspecialchars($form_data['message'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
                </div>

                <!-- Datenschutz -->
                <div class="form-group full">
                  <label class="form-checkbox">
                    <input type="checkbox" name="privacy" value="1"
                           <?= !empty($form_data) && !empty($_POST['privacy']) ? 'checked' : '' ?>
                           aria-required="true"
                           aria-describedby="err-privacy">
                    <span>
                      Ich habe die <a href="/?page=datenschutz" target="_blank">Datenschutzerklärung</a> gelesen
                      und bin mit der Verarbeitung meiner Daten für die Bearbeitung der Reservierungsanfrage einverstanden. <span class="required">*</span>
                    </span>
                  </label>
                  <span id="err-privacy" class="field-error" role="alert" style="padding-left:1.8rem;">
                    <?= htmlspecialchars($form_errors['privacy'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                  </span>
                </div>

              </div><!-- /.form-grid -->

              <div style="margin-top:1.5rem;">
                <button type="submit" class="btn btn-accent" style="width:100%;justify-content:center;">
                  🗓 Reservierung anfragen
                </button>
              </div>

              <p style="font-size:.78rem;color:color-mix(in srgb, var(--dark) 55%, transparent);margin-top:.75rem;text-align:center;">
                * Pflichtfeld. Mit dem Absenden wird keine verbindliche Buchung vorgenommen; du erhältst eine Bestätigung per E-Mail.
              </p>

            </form>

          <?php endif; ?>

        </div><!-- /.form-card -->
      </div><!-- /.reservation-wrap -->
    </div>
  </section>

</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
