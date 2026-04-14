<!-- Custom cursor -->


<!-- Mobile drawer -->
<div class="drawer" id="drawer" aria-hidden="true">
  <nav>
    <ul class="drawer__links">
      <li><a href="pages/about.html" class="drawer__link">About</a></li>
      <li><a href="pages/projects.html" class="drawer__link">Work</a></li>
      <li><a href="pages/skills.html" class="drawer__link">Skills</a></li>
      <li><a href="pages/contact.html" class="drawer__link">Contact</a></li>
    </ul>
  </nav>
</div>

<main>

  <!-- ══════════════════════════════════
         HERO
    ══════════════════════════════════ -->
  <section class="hero" id="hero">
    <div class="hero__bg-lines" aria-hidden="true"></div>

    <div class="hero__inner">
      <p class="hero__eyebrow fade-up">
        <span class="hero__eyebrow-dot"></span> Available for work
      </p>

      <h1 class="hero__headline fade-up">
        I build things<br />
        <em>for the web.</em>
      </h1>

      <p class="hero__sub fade-up">
        Hi — I'm <strong>Patrick KIprop</strong>, a software developer based in
        <strong>Eldoret, Kenya</strong>. I specialise in crafting
        performant, accessible applications from database to pixel.
      </p>

      <div class="hero__terminal fade-up" aria-label="Terminal prompt">
        <span class="t-prompt">$</span>
        <span class="t-cmd" id="terminalText"></span><span class="t-cursor">▌</span>
      </div>

      <div class="hero__actions fade-up">
        <a href="pages/projects.html" class="btn btn--filled">See My Work</a>
        <a href="pages/contact.html" class="btn btn--outline">Let's Talk</a>
      </div>
    </div>

    <div class="hero__scroll" aria-hidden="true">
      <span class="hero__scroll-label">scroll</span>
      <div class="hero__scroll-track">
        <div class="hero__scroll-thumb"></div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════
         ABOUT
    ══════════════════════════════════ -->
  <section class="about section" id="about">
    <div class="container">
      <div class="section-label reveal">
        <span>01.</span> About Me
      </div>

      <div class="about__layout">
        <div class="about__text reveal">
          <h2 class="about__heading">
            Turning complex problems<br />into clean, working software.
          </h2>
          <p>
            I'm a full-stack software developer who cares deeply about the craft —
            clean code, thoughtful architecture, and interfaces that feel effortless.
            I've built everything from internal tooling to customer-facing SaaS products.
          </p>
          <p>
            When I'm not coding, you'll find me reading about distributed systems,
            contributing to open source, or exploring Nairobi's coffee shops.
          </p>

          <ul class="about__facts">
            <li><span class="fact-label">Experience</span><span class="fact-val">3+ years</span></li>
            <li><span class="fact-label">Projects shipped</span><span class="fact-val">20+</span></li>
            <li><span class="fact-label">Availability</span><span class="fact-val accent">Open to opportunities</span></li>
          </ul>
        </div>

        <div class="about__avatar reveal">
          <div class="avatar-frame">
            <div class="avatar-placeholder">
              <span class="avatar-initials">YN</span>
            </div>
            <div class="avatar-border"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════
         PROJECTS
    ══════════════════════════════════ -->
  <section class="projects section" id="projects">
    <div class="container">
      <div class="section-label reveal"><span>02.</span> Selected Work</div>

      <h2 class="section-heading reveal">Things I've built</h2>

      <!-- Featured project -->
      <article class="project-featured reveal">
        <div class="project-featured__meta">
          <p class="project-featured__label">Featured Project</p>
          <h3 class="project-featured__title">Project Alpha</h3>
          <div class="project-featured__desc">
            <p>
              A full-stack e-commerce platform with real-time inventory management,
              Stripe payment integration, an admin dashboard, and automated email
              notifications. Handles thousands of orders daily.
            </p>
          </div>
          <ul class="project-featured__stack">
            <li>Next.js</li>
            <li>TypeScript</li>
            <li>PostgreSQL</li>
            <li>Redis</li>
            <li>Stripe</li>
          </ul>
          <div class="project-featured__links">
            <a href="#" class="project-link" target="_blank" rel="noopener">Live ↗</a>
            <a href="#" class="project-link" target="_blank" rel="noopener">GitHub ↗</a>
          </div>
        </div>
        <div class="project-featured__visual">
          <div class="project-mockup project-mockup--1">
            <div class="mockup-bar"><span></span><span></span><span></span></div>
            <div class="mockup-body">
              <div class="mockup-line w-60"></div>
              <div class="mockup-line w-40"></div>
              <div class="mockup-spacer"></div>
              <div class="mockup-line w-80"></div>
              <div class="mockup-line w-55"></div>
              <div class="mockup-line w-70"></div>
              <div class="mockup-spacer"></div>
              <div class="mockup-btn"></div>
            </div>
          </div>
        </div>
      </article>

      <!-- Project grid -->
      <div class="projects__grid">

        <article class="project-card reveal">
          <div class="project-card__top">
            <span class="project-card__icon">◈</span>
            <div class="project-card__links">
              <a href="#" aria-label="GitHub" target="_blank" rel="noopener">↗</a>
              <a href="#" aria-label="Live" target="_blank" rel="noopener">⊡</a>
            </div>
          </div>
          <h3 class="project-card__title">Project Beta</h3>
          <p class="project-card__desc">
            Real-time collaborative task manager with WebSocket syncing,
            role-based access control, and an analytics dashboard.
          </p>
          <ul class="project-card__stack">
            <li>React</li>
            <li>Node.js</li>
            <li>Socket.io</li>
            <li>MongoDB</li>
          </ul>
        </article>

        <article class="project-card reveal">
          <div class="project-card__top">
            <span class="project-card__icon">◉</span>
            <div class="project-card__links">
              <a href="#" aria-label="GitHub" target="_blank" rel="noopener">↗</a>
              <a href="#" aria-label="Live" target="_blank" rel="noopener">⊡</a>
            </div>
          </div>
          <h3 class="project-card__title">Project Gamma</h3>
          <p class="project-card__desc">
            High-performance REST API with JWT auth, Redis caching,
            background job queues, and auto-generated OpenAPI docs.
          </p>
          <ul class="project-card__stack">
            <li>Python</li>
            <li>FastAPI</li>
            <li>Redis</li>
            <li>Docker</li>
          </ul>
        </article>

        <article class="project-card reveal">
          <div class="project-card__top">
            <span class="project-card__icon">◇</span>
            <div class="project-card__links">
              <a href="#" aria-label="GitHub" target="_blank" rel="noopener">↗</a>
            </div>
          </div>
          <h3 class="project-card__title">Project Delta</h3>
          <p class="project-card__desc">
            CLI tool that automates repetitive dev workflows — scaffolding,
            deploys, and environment management — saving hours per week.
          </p>
          <ul class="project-card__stack">
            <li>Go</li>
            <li>Cobra CLI</li>
            <li>Bash</li>
          </ul>
        </article>

      </div>

      <div class="projects__more reveal">
        <a href="https://github.com/yourusername" target="_blank" rel="noopener" class="btn btn--ghost">
          See more on GitHub ↗
        </a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════
         SKILLS
    ══════════════════════════════════ -->
  <section class="skills section" id="skills">
    <div class="container">
      <div class="section-label reveal"><span>03.</span> Skills</div>
      <h2 class="section-heading reveal">My toolkit</h2>

      <div class="skills__layout">

        <div class="skill-col reveal">
          <h4 class="skill-col__title">// Frontend</h4>
          <div class="skill-list">
            <div class="skill-row" data-level="92"><span>HTML & CSS</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
            <div class="skill-row" data-level="88"><span>JavaScript (ES2022+)</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
            <div class="skill-row" data-level="84"><span>React / Next.js</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
            <div class="skill-row" data-level="75"><span>TypeScript</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="skill-col reveal">
          <h4 class="skill-col__title">// Backend</h4>
          <div class="skill-list">
            <div class="skill-row" data-level="86"><span>Node.js / Express</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
            <div class="skill-row" data-level="78"><span>Python / FastAPI</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
            <div class="skill-row" data-level="73"><span>PostgreSQL</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
            <div class="skill-row" data-level="68"><span>MongoDB</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="skill-col reveal">
          <h4 class="skill-col__title">// DevOps & Tools</h4>
          <div class="skill-list">
            <div class="skill-row" data-level="90"><span>Git / GitHub</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
            <div class="skill-row" data-level="74"><span>Docker / Compose</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
            <div class="skill-row" data-level="66"><span>AWS (EC2, S3, RDS)</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
            <div class="skill-row" data-level="82"><span>Linux / CLI</span>
              <div class="skill-bar">
                <div class="skill-fill"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════
         CONTACT
    ══════════════════════════════════ -->
  <section class="contact section" id="contact">
    <div class="container">
      <div class="section-label reveal"><span>04.</span> Contact</div>

      <div class="contact__layout">
        <div class="contact__left reveal">
          <h2 class="contact__heading">
            Got a project?<br /><em>Let's talk.</em>
          </h2>
          <p class="contact__body">
            Whether it's a new build, a tricky bug, or just a conversation —
            my inbox is open. I typically respond within 24 hours.
          </p>

          <div class="contact__links">
            <a href="mailto:hello@yourname.dev" class="contact__link">
              <span class="contact__link-icon">✉</span>
              <span>hello@yourname.dev</span>
            </a>
            <a href="https://github.com/yourusername" target="_blank" rel="noopener" class="contact__link">
              <span class="contact__link-icon">⌥</span>
              <span>github.com/yourusername</span>
            </a>
            <a href="https://linkedin.com/in/yourusername" target="_blank" rel="noopener" class="contact__link">
              <span class="contact__link-icon">◈</span>
              <span>linkedin.com/in/yourusername</span>
            </a>
          </div>
        </div>

        <form class="contact__form reveal" id="contactForm" novalidate>
          <div class="field">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="name" placeholder="Jane Doe" required />
            <span class="field__err" id="nameErr"></span>
          </div>
          <div class="field">
            <label for="femail">Email</label>
            <input type="email" id="femail" name="email" placeholder="jane@example.com" required />
            <span class="field__err" id="emailErr"></span>
          </div>
          <div class="field">
            <label for="fsubject">Subject</label>
            <input type="text" id="fsubject" name="subject" placeholder="Project enquiry" />
          </div>
          <div class="field">
            <label for="fmessage">Message</label>
            <textarea id="fmessage" name="message" rows="5" placeholder="Tell me about your project..." required></textarea>
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

</main>