/* reveal.js — IntersectionObserver scroll reveals */
(function () {
  'use strict';

  const els = document.querySelectorAll('.reveal');
  if (!els.length) return;

  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });

  els.forEach(el => io.observe(el));
})();
