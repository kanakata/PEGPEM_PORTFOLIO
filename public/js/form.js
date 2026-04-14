/* form.js — Contact form validation + backend hook
 *
 * TO CONNECT YOUR BACKEND:
 *   Find submitToBackend() below and replace the stub
 *   with your fetch / axios call.
 */
(function () {
  'use strict';

  const form      = document.getElementById('contactForm');
  const statusEl  = document.getElementById('formStatus');
  const submitBtn = document.getElementById('submitBtn');
  const btnLabel  = document.getElementById('btnLabel');

  if (!form) return;

  /* ── Helpers ──────────────────────── */
  const $ = id => document.getElementById(id);

  function showErr(elId, msg) {
    const el = $(elId);
    if (el) el.textContent = msg;
  }
  function clearErrs() {
    ['nameErr', 'emailErr', 'msgErr'].forEach(id => showErr(id, ''));
    statusEl.textContent = '';
    statusEl.className   = 'form-status';
  }

  function setLoading(on) {
    submitBtn.disabled = on;
    btnLabel.textContent = on ? 'Sending…' : 'Send Message';
  }

  function isEmail(v) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }

  /* ── Backend call ─────────────────────────────────────────────
   * Replace this stub with your actual implementation.
   *
   * @param {Object} data  { name, email, subject, message }
   * @returns {Promise}    resolves on success, rejects on failure
   *
   * Example with fetch:
   *
   *   return fetch('/api/contact', {
   *     method: 'POST',
   *     headers: { 'Content-Type': 'application/json' },
   *     body: JSON.stringify(data),
   *   }).then(res => {
   *     if (!res.ok) throw new Error('Server error ' + res.status);
   *   });
   *
   * ─────────────────────────────────────────────────────────── */
  async function submitToBackend(data) {
    // TODO: replace with your real backend call
    console.log('[form] Ready to submit:', data);
    await new Promise(r => setTimeout(r, 900)); // simulated delay
  }

  /* ── Submit ───────────────────────── */
  form.addEventListener('submit', async e => {
    e.preventDefault();
    clearErrs();

    const name    = form.name.value.trim();
    const email   = form.email.value.trim();
    const subject = form.subject ? form.subject.value.trim() : '';
    const message = form.message.value.trim();

    let valid = true;

    if (!name) {
      showErr('nameErr', 'Name is required.');
      valid = false;
    }
    if (!email || !isEmail(email)) {
      showErr('emailErr', 'Enter a valid email address.');
      valid = false;
    }
    if (message.length < 10) {
      showErr('msgErr', 'Message must be at least 10 characters.');
      valid = false;
    }

    if (!valid) return;

    setLoading(true);
    try {
      await submitToBackend({ name, email, subject, message });
      statusEl.textContent = '✓ Message sent — I\'ll be in touch soon!';
      form.reset();
    } catch (err) {
      console.error('[form] error:', err);
      statusEl.textContent = 'Something went wrong. Please try again.';
      statusEl.classList.add('err');
    } finally {
      setLoading(false);
    }
  });
})();
