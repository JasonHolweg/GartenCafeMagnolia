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
        <a href="/" class="site-logo" style="margin-bottom:.75rem;" aria-label="Garten Café Magnolia">
          <div class="logo-icon" aria-hidden="true">🌸</div>
          <div>
            <span class="logo-text-top" style="color:rgba(255,255,255,.5);">Garten Café</span>
            <span class="logo-text-bottom" style="color:#fff;">Magnolia</span>
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
          <li><a href="/">Startseite</a></li>
          <li><a href="/?page=ueber-uns">Über uns</a></li>
          <li><a href="/?page=speisekarte">Speisekarte</a></li>
          <li><a href="/?page=arrangements">Arrangements</a></li>
          <li><a href="/?page=tischreservieren">Tisch reservieren</a></li>
        </ul>
      </div>

      <!-- Infos -->
      <div class="footer-col">
        <h4>Info</h4>
        <ul>
          <li><a href="/?page=impressum">Impressum</a></li>
          <li><a href="/?page=datenschutz">Datenschutz</a></li>
        </ul>
      </div>

      <!-- Kontakt -->
      <div class="footer-col">
        <h4>Kontakt</h4>
        <ul>
          <li style="color:rgba(255,255,255,.6); font-size:.9rem;">Altholzkrug 40</li>
          <li style="color:rgba(255,255,255,.6); font-size:.9rem;">24976 Handewitt</li>
          <li style="color:rgba(255,255,255,.6); font-size:.9rem; margin-top:.5rem;">Im Gartencenter Garten2000</li>
          <li style="margin-top:.5rem;"><a href="mailto:info@gartencafe-magnolia.de">info@gartencafe-magnolia.de</a></li>
          <!-- TODO: Echte Telefonnummer eintragen -->
        </ul>
      </div>

    </div><!-- /.footer-grid -->

    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> Garten Café Magnolia GbR – Jason Holweg &amp; Kristian Meister</span>
      <span>
        <a href="/?page=impressum">Impressum</a>&nbsp;·&nbsp;
        <a href="/?page=datenschutz">Datenschutz</a>
      </span>
    </div>

  </div>
</footer>

<!-- Back to top -->
<button class="back-to-top" aria-label="Zurück nach oben">↑</button>

<!-- JS -->
<script src="/assets/js/main.js" defer></script>
</body>
</html>
