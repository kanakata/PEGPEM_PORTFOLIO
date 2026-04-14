/* nav.js */
(function () {
  'use strict';

  const nav    = document.getElementById('nav');
  const burger = document.getElementById('burger');
  const drawer = document.getElementById('drawer');
  const drawerLinks = document.querySelectorAll('.drawer__link');

  /* Scroll state */
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 30);
  }, { passive: true });

  /* Burger toggle */
  function setDrawer(open) {
    drawer.classList.toggle('open', open);
    burger.classList.toggle('open', open);
    burger.setAttribute('aria-expanded', open);
    drawer.setAttribute('aria-hidden', !open);
    document.body.style.overflow = open ? 'hidden' : '';
  }

  burger.addEventListener('click', () => setDrawer(!drawer.classList.contains('open')));

  drawerLinks.forEach(link => link.addEventListener('click', () => setDrawer(false)));

  /* Active link highlight */
  const sections  = document.querySelectorAll('section[id]');
  const navLinks  = document.querySelectorAll('.nav__link');

  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        navLinks.forEach(l => l.classList.toggle(
          'active', l.getAttribute('href') === '#' + e.target.id
        ));
      }
    });
  }, { rootMargin: '-45% 0px -50% 0px' });

  sections.forEach(s => io.observe(s));
})();
