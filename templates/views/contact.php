

<div class="drawer" id="drawer" aria-hidden="true">
  <nav>
    <ul class="drawer__links">
      <li><a href="about.html" class="drawer__link">About</a></li>
      <li><a href="projects.html" class="drawer__link">Work</a></li>
      <li><a href="skills.html" class="drawer__link">Skills</a></li>
      <li><a href="contact.html" class="drawer__link">Contact</a></li>
    </ul>
  </nav>
</div>

<main>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="page-hero__bg" aria-hidden="true"></div>
    <div class="container">
      <p class="page-hero__eyebrow">
        <a href="../index.html">Home</a><span>/</span>Contact
      </p>
      <h1 class="page-hero__title fade-up">Let's<br /><em>work together.</em></h1>
      <p class="page-hero__desc fade-up">
        Whether you have a project in mind, a role to fill, or just want to say hi —
        I'd love to hear from you.
      </p>
    </div>
  </section>

  <!-- MAIN CONTENT -->
  <section class="section">
    <div class="container">
      <div class="contact-page__layout">

        <!-- LEFT: info -->
        <div class="reveal">
          <div class="section-label"><span>01.</span> Reach Out</div>

          <div class="contact-note">
            <span class="contact-note__icon">◎</span>
            <span>I'm currently <strong style="color:var(--accent);">open to opportunities</strong> —
              full-time roles, contracts, and interesting projects. I usually respond within 24 hours.</span>
          </div>

          <!-- Location -->
          <div class="location-card">
            <span class="location-card__icon">◎</span>
            <div>
              <p class="location-card__city">Nairobi, Kenya</p>
              <p class="location-card__tz">EAT (UTC+3) · Local time: <span class="local-time" id="localTime">--:--</span></p>
            </div>
          </div>

          <!-- Social links -->
          <div class="social-links">
            <a href="mailto:hello@yourname.dev" class="social-link">
              <span class="social-link__icon">✉</span>
              <span class="social-link__info">
                <p class="social-link__platform">Email</p>
                <p class="social-link__handle">hello@yourname.dev</p>
              </span>
              <span class="social-link__arrow">→</span>
            </a>
            <a href="https://github.com/yourusername" target="_blank" rel="noopener" class="social-link">
              <span class="social-link__icon">⌥</span>
              <span class="social-link__info">
                <p class="social-link__platform">GitHub</p>
                <p class="social-link__handle">github.com/yourusername</p>
              </span>
              <span class="social-link__arrow">→</span>
            </a>
            <a href="https://linkedin.com/in/yourusername" target="_blank" rel="noopener" class="social-link">
              <span class="social-link__icon">◈</span>
              <span class="social-link__info">
                <p class="social-link__platform">LinkedIn</p>
                <p class="social-link__handle">linkedin.com/in/yourusername</p>
              </span>
              <span class="social-link__arrow">→</span>
            </a>
            <a href="https://twitter.com/yourusername" target="_blank" rel="noopener" class="social-link">
              <span class="social-link__icon">◉</span>
              <span class="social-link__info">
                <p class="social-link__platform">X / Twitter</p>
                <p class="social-link__handle">@yourusername</p>
              </span>
              <span class="social-link__arrow">→</span>
            </a>
          </div>
        </div>

        <!-- RIGHT: form -->
        <form class="contact__form reveal" id="contactForm" novalidate>
          <div class="section-label" style="margin-bottom:var(--s8);"><span>02.</span> Send a Message</div>

          <div class="field">
            <label for="fname">Name *</label>
            <input type="text" id="fname" name="name" placeholder="Jane Doe" required autocomplete="name" />
            <span class="field__err" id="nameErr"></span>
          </div>

          <div class="field">
            <label for="femail">Email *</label>
            <input type="email" id="femail" name="email" placeholder="jane@example.com" required autocomplete="email" />
            <span class="field__err" id="emailErr"></span>
          </div>

          <div class="field">
            <label for="ftype">Enquiry Type</label>
            <select id="ftype" name="type" style="background:var(--bg-2);border:1px solid var(--border);border-radius:var(--r);padding:0.8rem 1rem;color:var(--text-0);font-size:var(--scale-sm);transition:border-color var(--t1);">
              <option value="project">New project</option>
              <option value="job">Job opportunity</option>
              <option value="collaboration">Collaboration</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="field">
            <label for="fbudget">Budget / Rate (optional)</label>
            <input type="text" id="fbudget" name="budget" placeholder="e.g. $2,000 / month or open" />
          </div>

          <div class="field">
            <label for="fmessage">Message * <span style="color:var(--text-2);font-size:var(--scale-xs);margin-left:0.5ch;">(min 20 chars)</span></label>
            <textarea id="fmessage" name="message" rows="6" placeholder="Tell me about your project, role, or idea..." required maxlength="1000"></textarea>
            <div class="char-count" id="charCount">0 / 1000</div>
            <span class="field__err" id="msgErr"></span>
          </div>

          <button type="submit" class="btn btn--filled btn--block" id="submitBtn">
            <span id="btnLabel">Send Message</span>
            <span class="btn-arrow">→</span>
          </button>

          <p class="form-status" id="formStatus" aria-live="polite"></p>
        </form>

      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" style="background:var(--bg-1);">
    <div class="container" style="max-width:680px;">
      <div class="section-label reveal"><span>03.</span> FAQ</div>
      <h2 class="section-heading reveal">Common questions</h2>

      <div class="faq reveal">

        <div class="faq__item">
          <p class="faq__q">Are you available for freelance / contract work?</p>
          <p class="faq__a">Yes — I'm currently taking on new projects. I work with both startups and established companies. Reach out with your timeline and scope and we'll see if there's a good fit.</p>
        </div>

        <div class="faq__item">
          <p class="faq__q">What's your typical response time?</p>
          <p class="faq__a">I reply to all messages within 24 hours on weekdays. For urgent matters, email is the fastest channel.</p>
        </div>

        <div class="faq__item">
          <p class="faq__q">Do you work remotely?</p>
          <p class="faq__a">Yes, fully remote. I'm based in Nairobi (EAT, UTC+3) and have experience collaborating with teams across Europe, North America, and the Middle East.</p>
        </div>

        <div class="faq__item">
          <p class="faq__q">What kind of projects do you take on?</p>
          <p class="faq__a">Full-stack web applications, REST/GraphQL APIs, developer tooling, SaaS MVPs, and performance audits. If it involves JavaScript, Python, or Node.js, I'm interested.</p>
        </div>

        <div class="faq__item">
          <p class="faq__q">Do you offer ongoing maintenance / retainer work?</p>
          <p class="faq__a">Yes — I offer monthly retainer arrangements for teams that need a reliable developer on-call for maintenance, new features, and code review.</p>
        </div>

      </div>
    </div>
  </section>

</main>


<script src="../js/pages.js"></script>
<script>
  /* Local time clock */
  function updateTime() {
    const el = document.getElementById('localTime');
    if (!el) return;
    const now = new Date().toLocaleTimeString('en-KE', {
      timeZone: 'Africa/Nairobi',
      hour: '2-digit',
      minute: '2-digit',
      hour12: false
    });
    el.textContent = now;
  }
  updateTime();
  setInterval(updateTime, 30000);

  /* Char counter */
  const msg = document.getElementById('fmessage');
  const cnt = document.getElementById('charCount');
  if (msg && cnt) {
    msg.addEventListener('input', () => {
      const n = msg.value.length;
      cnt.textContent = n + ' / 1000';
      cnt.classList.toggle('warn', n > 900);
    });
  }

  /* Form (same backend hook pattern) */
  (function() {
    const form = document.getElementById('contactForm');
    const statusEl = document.getElementById('formStatus');
    const btn = document.getElementById('submitBtn');
    const label = document.getElementById('btnLabel');
    if (!form) return;

    function showErr(id, msg) {
      const e = document.getElementById(id);
      if (e) e.textContent = msg;
    }

    function clearErrs() {
      ['nameErr', 'emailErr', 'msgErr'].forEach(id => showErr(id, ''));
      statusEl.textContent = '';
      statusEl.className = 'form-status';
    }

    function isEmail(v) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
    }

    /**
     * ─────────────────────────────────────────────────────────
     * TODO: replace with your backend call.
     * data = { name, email, type, budget, message }
     * ─────────────────────────────────────────────────────────
     */
    async function submitToBackend(data) {
      console.log('[contact] submitting:', data);
      await new Promise(r => setTimeout(r, 900));
    }

    form.addEventListener('submit', async e => {
      e.preventDefault();
      clearErrs();
      const name = form.name.value.trim();
      const email = form.email.value.trim();
      const message = form.message.value.trim();
      let ok = true;
      if (!name) {
        showErr('nameErr', 'Name is required.');
        ok = false;
      }
      if (!isEmail(email)) {
        showErr('emailErr', 'Enter a valid email.');
        ok = false;
      }
      if (message.length < 20) {
        showErr('msgErr', 'Please write at least 20 characters.');
        ok = false;
      }
      if (!ok) return;

      btn.disabled = true;
      label.textContent = 'Sending…';
      try {
        await submitToBackend({
          name,
          email,
          type: form.type?.value,
          budget: form.budget?.value,
          message
        });
        statusEl.textContent = '✓ Sent! I\'ll get back to you within 24 hours.';
        form.reset();
        if (cnt) cnt.textContent = '0 / 1000';
      } catch {
        statusEl.textContent = 'Something went wrong — please try again.';
        statusEl.classList.add('err');
      } finally {
        btn.disabled = false;
        label.textContent = 'Send Message';
      }
    });
  })();
</script>