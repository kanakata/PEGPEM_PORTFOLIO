/* pages.js — shared utilities for all sub-pages */
(function () {
  'use strict';

  /* ── Sticky nav ─────────────── */
  const nav = document.getElementById('nav');
  if (nav) {
    window.addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', window.scrollY > 30);
    }, { passive: true });
  }

  /* ── Burger / drawer ─────────── */
  const burger = document.getElementById('burger');
  const drawer = document.getElementById('drawer');
  const drawerLinks = document.querySelectorAll('.drawer__link');

  if (burger && drawer) {
    function setDrawer(open) {
      drawer.classList.toggle('open', open);
      burger.classList.toggle('open', open);
      burger.setAttribute('aria-expanded', open);
      drawer.setAttribute('aria-hidden', !open);
      document.body.style.overflow = open ? 'hidden' : '';
    }
    burger.addEventListener('click', () => setDrawer(!drawer.classList.contains('open')));
    drawerLinks.forEach(l => l.addEventListener('click', () => setDrawer(false)));
  }

  /* ── Scroll reveal ───────────── */
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length) {
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.08 });
    revealEls.forEach(el => io.observe(el));
  }

  /* ── Skill bars ──────────────── */
  const skillRows = document.querySelectorAll('[data-level]');
  if (skillRows.length) {
    const sio = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          const fill = e.target.querySelector('.sbar__fill, .skill-fill');
          if (fill) fill.style.width = (e.target.dataset.level || 0) + '%';
          sio.unobserve(e.target);
        }
      });
    }, { threshold: 0.3 });
    skillRows.forEach(r => sio.observe(r));
  }

  /* ── FAQ accordion ───────────── */
  document.querySelectorAll('.faq__item').forEach(item => {
    item.querySelector('.faq__q')?.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq__item').forEach(i => i.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    });
  });

  /* ── Custom cursor ───────────── */
  const dot  = document.getElementById('cursorDot');
  const ring = document.getElementById('cursorRing');
  if (dot && ring) {
    let mx = -100, my = -100, rx = -100, ry = -100;
    document.addEventListener('mousemove', e => {
      mx = e.clientX; my = e.clientY;
      dot.style.left = mx + 'px'; dot.style.top = my + 'px';
    });
    (function lerp() {
      rx += (mx - rx) * 0.12; ry += (my - ry) * 0.12;
      ring.style.left = rx + 'px'; ring.style.top = ry + 'px';
      requestAnimationFrame(lerp);
    })();
    document.querySelectorAll('a, button, input, textarea').forEach(el => {
      el.addEventListener('mouseenter', () => ring.classList.add('hover'));
      el.addEventListener('mouseleave', () => ring.classList.remove('hover'));
    });
  }

  /* ── Filter buttons ──────────── */
  document.querySelectorAll('.filter-bar').forEach(bar => {
    bar.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        bar.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.dataset.filter;
        const cards  = document.querySelectorAll('[data-category]');
        cards.forEach(card => {
          const show = filter === 'all' || card.dataset.category.includes(filter);
          card.style.display = show ? '' : 'none';
          // re-trigger reveal animation
          if (show) {
            card.classList.remove('visible');
            setTimeout(() => card.classList.add('visible'), 50);
          }
        });
      });
    });
  });

  /* ── Project modal ───────────── */
  const overlay = document.getElementById('projectModal');
  if (overlay) {
    // Open
    document.querySelectorAll('[data-modal-trigger]').forEach(trigger => {
      trigger.addEventListener('click', e => {
        e.preventDefault();
        const id   = trigger.dataset.modalTrigger;
        const data = window.PROJECTS?.find(p => p.id === id);
        if (!data) return;

        overlay.querySelector('#modalLabel').textContent   = data.label   || 'Project';
        overlay.querySelector('#modalTitle').textContent   = data.title   || '';
        overlay.querySelector('#modalVisual').textContent  = data.icon    || '◈';
        overlay.querySelector('#modalDesc').innerHTML      = data.desc    || '';
        overlay.querySelector('#modalHighlights').innerHTML =
          (data.highlights || []).map(h => `<li>${h}</li>`).join('');
        overlay.querySelector('#modalTags').innerHTML =
          (data.stack || []).map(t => `<span class="tag">${t}</span>`).join('');
        const liveLink = overlay.querySelector('#modalLive');
        const codeLink = overlay.querySelector('#modalCode');
        if (liveLink) { liveLink.href = data.live || '#'; liveLink.style.display = data.live ? '' : 'none'; }
        if (codeLink) { codeLink.href = data.code || '#'; codeLink.style.display = data.code ? '' : 'none'; }

        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
      });
    });

    // Close
    function closeModal() {
      overlay.classList.remove('open');
      document.body.style.overflow = '';
    }
    overlay.querySelector('.modal__close')?.addEventListener('click', closeModal);
    overlay.addEventListener('click', e => { if (e.target === overlay) closeModal(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
  }

})();
