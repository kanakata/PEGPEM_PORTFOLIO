/* skills.js — Animate skill bars when visible */
(function () {
  'use strict';

  const rows = document.querySelectorAll('.skill-row');
  if (!rows.length) return;

  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const fill  = e.target.querySelector('.skill-fill');
        const level = e.target.dataset.level || '0';
        if (fill) fill.style.width = level + '%';
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.4 });

  rows.forEach(row => io.observe(row));
})();
