/**
 * Garten Café Magnolia – main.js
 * Vanilla JS: scroll-reveal, click-spark, mobile menu, theme toggle,
 * menu tabs, reservation form validation, toast, smooth page transitions
 */

'use strict';

// ──────────────────────────────────────────────────────────────────────────────
// Utilities
// ──────────────────────────────────────────────────────────────────────────────

const REDUCED_MOTION = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

function $(selector, context = document) {
  return context.querySelector(selector);
}
function $$(selector, context = document) {
  return [...context.querySelectorAll(selector)];
}

// ──────────────────────────────────────────────────────────────────────────────
// Scroll-reveal (IntersectionObserver)
// ──────────────────────────────────────────────────────────────────────────────
function initScrollReveal() {
  if (REDUCED_MOTION) {
    $$('.reveal').forEach(el => el.classList.add('visible'));
    return;
  }

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
  );

  $$('.reveal').forEach(el => observer.observe(el));
}

// ──────────────────────────────────────────────────────────────────────────────
// Click-Spark (Canvas)
// ──────────────────────────────────────────────────────────────────────────────
function initClickSpark() {
  if (REDUCED_MOTION) return;

  const canvas = document.createElement('canvas');
  canvas.id = 'click-spark-canvas';
  canvas.setAttribute('aria-hidden', 'true');
  document.body.appendChild(canvas);

  const ctx = canvas.getContext('2d');
  let particles = [];

  function resize() {
    canvas.width  = window.innerWidth;
    canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener('resize', resize, { passive: true });

  const COLORS = ['#1C5E52', '#d90076', '#2ea88e', '#F6EEE3', '#ffffff'];

  function createParticles(x, y) {
    const count = 10 + Math.floor(Math.random() * 8);
    for (let i = 0; i < count; i++) {
      const angle  = Math.random() * Math.PI * 2;
      const speed  = 1.5 + Math.random() * 4;
      const size   = 2 + Math.random() * 3.5;
      const life   = 0.8 + Math.random() * 0.4;
      particles.push({
        x, y,
        vx: Math.cos(angle) * speed,
        vy: Math.sin(angle) * speed - 1.5,
        size,
        life,
        maxLife: life,
        color: COLORS[Math.floor(Math.random() * COLORS.length)],
      });
    }
  }

  let rafId = null;
  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    particles = particles.filter(p => p.life > 0);

    particles.forEach(p => {
      p.x  += p.vx;
      p.y  += p.vy;
      p.vy += 0.12;          // gravity
      p.vx *= 0.97;          // drag
      p.life -= 0.03;

      const alpha = Math.max(0, p.life / p.maxLife);
      ctx.save();
      ctx.globalAlpha = alpha;
      ctx.fillStyle   = p.color;
      ctx.shadowColor = p.color;
      ctx.shadowBlur  = p.size * 2;
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.size * alpha, 0, Math.PI * 2);
      ctx.fill();
      ctx.restore();
    });

    if (particles.length) {
      rafId = requestAnimationFrame(animate);
    } else {
      rafId = null;
    }
  }

  document.addEventListener('click', e => {
    // Skip clicks on buttons/inputs to avoid interference
    createParticles(e.clientX, e.clientY);
    if (!rafId) rafId = requestAnimationFrame(animate);
  }, { passive: true });
}

// ──────────────────────────────────────────────────────────────────────────────
// Sticky Header
// ──────────────────────────────────────────────────────────────────────────────
function initStickyHeader() {
  const header = $('.site-header');
  if (!header) return;

  const onScroll = () => {
    header.classList.toggle('scrolled', window.scrollY > 30);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}

// ──────────────────────────────────────────────────────────────────────────────
// Mobile Menu
// ──────────────────────────────────────────────────────────────────────────────
function initMobileMenu() {
  const hamburger  = $('.hamburger');
  const mobileNav  = $('.mobile-nav');
  const closeBtn   = $('.mobile-nav-close');

  if (!hamburger || !mobileNav) return;

  const open = () => {
    mobileNav.classList.add('open');
    hamburger.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
    closeBtn && closeBtn.focus();
  };

  const close = () => {
    mobileNav.classList.remove('open');
    hamburger.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
    hamburger.focus();
  };

  hamburger.addEventListener('click', open);
  closeBtn && closeBtn.addEventListener('click', close);

  // Close on nav link click
  $$('a', mobileNav).forEach(a => a.addEventListener('click', close));

  // Close on Escape
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && mobileNav.classList.contains('open')) close();
  });
}

// ──────────────────────────────────────────────────────────────────────────────
// Theme Toggle (Dark / Light)
// ──────────────────────────────────────────────────────────────────────────────
function initThemeToggle() {
  const toggles = $$('.theme-toggle');
  if (!toggles.length) return;

  const stored  = localStorage.getItem('theme');
  const system  = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  let current   = stored || system;

  function apply(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    toggles.forEach(btn => {
      btn.textContent = theme === 'dark' ? '☀️' : '🌙';
      btn.setAttribute('aria-label', theme === 'dark' ? 'Zum hellen Modus wechseln' : 'Zum dunklen Modus wechseln');
    });
    localStorage.setItem('theme', theme);
    current = theme;
  }

  apply(current);

  toggles.forEach(btn => {
    btn.addEventListener('click', () => apply(current === 'dark' ? 'light' : 'dark'));
  });
}

// ──────────────────────────────────────────────────────────────────────────────
// Back to Top
// ──────────────────────────────────────────────────────────────────────────────
function initBackToTop() {
  const btn = $('.back-to-top');
  if (!btn) return;

  window.addEventListener('scroll', () => {
    btn.classList.toggle('visible', window.scrollY > 400);
  }, { passive: true });

  btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

// ──────────────────────────────────────────────────────────────────────────────
// Toast Notifications
// ──────────────────────────────────────────────────────────────────────────────
function showToast(message, type = 'success', duration = 4000) {
  let container = $('.toast-container');
  if (!container) {
    container = document.createElement('div');
    container.className = 'toast-container';
    container.setAttribute('aria-live', 'polite');
    document.body.appendChild(container);
  }

  const icons = { success: '✅', error: '❌', info: 'ℹ️' };
  const toast = document.createElement('div');
  toast.className = `toast ${type}`;
  toast.setAttribute('role', 'status');
  toast.innerHTML = `
    <span class="toast-icon" aria-hidden="true">${icons[type] || icons.info}</span>
    <span class="toast-msg">${message}</span>
    <button class="toast-close" aria-label="Benachrichtigung schließen">✕</button>
  `;

  container.appendChild(toast);

  const remove = () => {
    toast.classList.add('removing');
    toast.addEventListener('animationend', () => toast.remove(), { once: true });
  };

  toast.querySelector('.toast-close').addEventListener('click', remove);
  setTimeout(remove, duration);
}

// Make globally accessible
window.showToast = showToast;

// ──────────────────────────────────────────────────────────────────────────────
// Menu Tabs (Speisekarte)
// ──────────────────────────────────────────────────────────────────────────────
function initMenuTabs() {
  const tabBtns   = $$('.menu-tab-btn');
  const tabPanels = $$('.menu-tab-panel');
  if (!tabBtns.length) return;

  tabBtns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => { b.classList.remove('active'); b.setAttribute('aria-selected', 'false'); });
      tabPanels.forEach(p => { p.classList.remove('active'); p.hidden = true; });

      btn.classList.add('active');
      btn.setAttribute('aria-selected', 'true');
      const panel = tabPanels[i];
      if (panel) { panel.classList.add('active'); panel.hidden = false; }
    });
  });
}

// ──────────────────────────────────────────────────────────────────────────────
// Menu Filter (vegan / veggie / glutenfrei)
// ──────────────────────────────────────────────────────────────────────────────
function initMenuFilter() {
  const filterBtns = $$('.filter-btn');
  if (!filterBtns.length) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;

      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const panel = btn.closest('.menu-tab-panel') || btn.closest('section');
      if (!panel) return;

      $$('.menu-item', panel).forEach(item => {
        if (filter === 'all') {
          item.style.display = '';
        } else {
          const has = item.dataset[filter] === '1';
          item.style.display = has ? '' : 'none';
        }
      });
    });
  });
}

// ──────────────────────────────────────────────────────────────────────────────
// Reservation Form (client-side validation)
// ──────────────────────────────────────────────────────────────────────────────
function initReservationForm() {
  const form = $('#reservation-form');
  if (!form) return;

  const showError = (field, msg) => {
    const errEl = $(`#err-${field}`);
    if (errEl) errEl.textContent = msg;
    const input = form.elements[field];
    if (input) input.setAttribute('aria-invalid', 'true');
  };

  const clearError = (field) => {
    const errEl = $(`#err-${field}`);
    if (errEl) errEl.textContent = '';
    const input = form.elements[field];
    if (input) input.removeAttribute('aria-invalid');
  };

  const validate = () => {
    let valid = true;
    const fields = ['name', 'email', 'date', 'time', 'guests'];
    fields.forEach(f => clearError(f));
    clearError('privacy');

    const name  = form.elements['name']?.value.trim();
    const email = form.elements['email']?.value.trim();
    const date  = form.elements['date']?.value;
    const time  = form.elements['time']?.value;
    const guests = form.elements['guests']?.value;
    const privacy = form.elements['privacy']?.checked;

    if (!name || name.length < 2) {
      showError('name', 'Bitte gib deinen Namen ein (mind. 2 Zeichen).'); valid = false;
    }
    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      showError('email', 'Bitte gib eine gültige E-Mail-Adresse ein.'); valid = false;
    }
    if (!date) {
      showError('date', 'Bitte wähle ein Datum aus.'); valid = false;
    } else {
      const chosen = new Date(date);
      const today  = new Date(); today.setHours(0,0,0,0);
      if (chosen < today) {
        showError('date', 'Das Datum darf nicht in der Vergangenheit liegen.'); valid = false;
      }
    }
    if (!time) { showError('time', 'Bitte wähle eine Uhrzeit aus.'); valid = false; }
    if (!guests || guests < 1) { showError('guests', 'Bitte gib die Personenzahl an.'); valid = false; }
    if (!privacy) { showError('privacy', 'Bitte stimme der Datenschutzerklärung zu.'); valid = false; }

    return valid;
  };

  // Live validation on blur
  ['name','email','date','time','guests'].forEach(field => {
    const el = form.elements[field];
    if (el) el.addEventListener('blur', () => { clearError(field); if(field === 'name' && el.value.trim().length < 2) showError(field, 'Mind. 2 Zeichen.'); });
  });

  form.addEventListener('submit', async e => {
    e.preventDefault();
    if (!validate()) {
      showToast('Bitte prüfe deine Eingaben.', 'error');
      return;
    }

    const submitBtn = form.querySelector('[type="submit"]');
    submitBtn.disabled = true;
    submitBtn.textContent = 'Wird gesendet …';

    try {
      const res = await fetch(form.action || window.location.href, {
        method: 'POST',
        body: new FormData(form),
      });

      if (res.ok) {
        const data = await res.json().catch(() => ({}));
        if (data.success) {
          form.innerHTML = `
            <div class="booking-success">
              <div class="icon">🌿</div>
              <h3>Reservierungsanfrage gesendet!</h3>
              <p>Vielen Dank, ${data.name || ''}! Wir melden uns so schnell wie möglich bei dir.</p>
            </div>`;
          showToast('Reservierung erfolgreich übermittelt! ✓', 'success');
        } else {
          showToast(data.message || 'Fehler beim Senden. Bitte versuche es erneut.', 'error');
          submitBtn.disabled = false;
          submitBtn.textContent = 'Reservierung anfragen';
        }
      } else {
        throw new Error('Server error');
      }
    } catch {
      showToast('Netzwerkfehler. Bitte versuche es erneut.', 'error');
      submitBtn.disabled = false;
      submitBtn.textContent = 'Reservierung anfragen';
    }
  });
}

// ──────────────────────────────────────────────────────────────────────────────
// Active nav link based on current page
// ──────────────────────────────────────────────────────────────────────────────
function initActiveNav() {
  const params = new URLSearchParams(window.location.search);
  const page   = params.get('page') || 'home';

  $$('.main-nav a, .mobile-nav a').forEach(a => {
    const href    = a.getAttribute('href') || '';
    const isHome  = ['/', '/index.php', 'index.php', '?page=home', './', ''].includes(href);
    const match   = href.includes(`page=${page}`) || (page === 'home' && isHome);
    a.classList.toggle('active', match);
    if (match) a.setAttribute('aria-current', 'page');
  });
}

// ──────────────────────────────────────────────────────────────────────────────
// Smooth page transitions
// ──────────────────────────────────────────────────────────────────────────────
function initPageTransitions() {
  if (REDUCED_MOTION) return;

  document.addEventListener('click', e => {
    const anchor = e.target.closest('a');
    if (!anchor) return;
    const href = anchor.getAttribute('href');
    if (!href || href.startsWith('#') || href.startsWith('mailto:') || href.startsWith('tel:') || anchor.target === '_blank') return;
    if (href.startsWith('http') && !href.startsWith(window.location.origin)) return;

    e.preventDefault();
    document.body.classList.add('page-transition-out');
    setTimeout(() => { window.location.href = href; }, 250);
  });
}

// ──────────────────────────────────────────────────────────────────────────────
// Parallax hero (subtle)
// ──────────────────────────────────────────────────────────────────────────────
function initHeroParallax() {
  if (REDUCED_MOTION) return;
  const heroBg = $('.hero-bg');
  if (!heroBg) return;

  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    heroBg.style.transform = `translateY(${y * 0.18}px)`;
  }, { passive: true });
}

// ──────────────────────────────────────────────────────────────────────────────
// Highlight current weekday in opening hours
// ──────────────────────────────────────────────────────────────────────────────
function initTodayHighlight() {
  const dayMap = { 0: 'sunday', 1: 'monday', 2: 'tuesday', 3: 'wednesday', 4: 'thursday', 5: 'friday', 6: 'saturday' };
  const today  = dayMap[new Date().getDay()];
  const row    = $(`tr[data-day="${today}"]`);
  if (row) row.classList.add('today');
}

// ──────────────────────────────────────────────────────────────────────────────
// Init all
// ──────────────────────────────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
  initThemeToggle();
  initStickyHeader();
  initMobileMenu();
  initScrollReveal();
  initClickSpark();
  initBackToTop();
  initMenuTabs();
  initMenuFilter();
  initReservationForm();
  initActiveNav();
  initHeroParallax();
  initTodayHighlight();
  initPageTransitions();
});
