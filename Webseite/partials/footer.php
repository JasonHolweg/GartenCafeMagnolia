<?php
/**
 * Partial: Site Footer
 */
?>
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand Column -->
      <div class="footer-brand">
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/" class="site-logo" style="margin-bottom:.75rem;" aria-label="Garten Café Magnolia">
          <div class="logo-icon" aria-hidden="true">
            <img src="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/assets/img/garten-cafe-magnolia.png" alt="" loading="lazy" decoding="async">
          </div>
          <div>
            <span class="logo-text-top footer-logo-top">Garten Café</span>
            <span class="logo-text-bottom footer-logo-bottom">Magnolia</span>
          </div>
        </a>
        <p>Frühstückserlebnis, Kaffeespezialitäten &amp; Genuss im Grünen – mitten im Treibhaus.</p>
        <div class="footer-social">
          <a href="#" aria-label="Instagram" title="Instagram">📸</a>
          <a href="#" aria-label="Facebook"  title="Facebook">📘</a>
          <a href="#" aria-label="Google"    title="Google">🔍</a>
        </div>
      </div>

      <!-- Seiten -->
      <div class="footer-col">
        <h4>Seiten</h4>
        <ul>
          <li><a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/">Startseite</a></li>
          <li><a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=ueber-uns">Über uns</a></li>
          <li><a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=speisekarte">Speisekarte</a></li>
          <li><a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=arrangements">Arrangements</a></li>
          <li><a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=tischreservieren">Tisch reservieren</a></li>
        </ul>
      </div>

      <!-- Infos -->
      <div class="footer-col">
        <h4>Info</h4>
        <ul>
          <li><a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=impressum">Impressum</a></li>
          <li><a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=datenschutz">Datenschutz</a></li>
        </ul>
      </div>

      <!-- Kontakt -->
      <div class="footer-col">
        <h4>Kontakt</h4>
        <ul>
          <li class="footer-muted">Altholzkrug 40</li>
          <li class="footer-muted">24976 Handewitt</li>
          <li class="footer-muted spaced">Im Gartencenter Garten2000</li>
          <li class="spaced"><a href="mailto:info@gartencafe-magnolia.de">info@gartencafe-magnolia.de</a></li>
          <!-- TODO: Echte Telefonnummer eintragen -->
        </ul>
      </div>

    </div><!-- /.footer-grid -->

    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> Garten Café Magnolia GbR – Jason Holweg &amp; Kristian Meister</span>
      <span>
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=impressum">Impressum</a>&nbsp;·&nbsp;
        <a href="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/?page=datenschutz">Datenschutz</a>
      </span>
    </div>

  </div>
</footer>

<!-- Back to top -->
<button class="back-to-top" aria-label="Zurück nach oben">↑</button>

<!-- JS -->
<script src="<?= htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8') ?>/assets/js/main.js" defer></script>
</body>
</html>
