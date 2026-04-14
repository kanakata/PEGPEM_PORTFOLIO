
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
        <a href="../index.html">Home</a>
        <span>/</span>
        Projects
      </p>
      <h1 class="page-hero__title fade-up">Things I've<br /><em>built.</em></h1>
      <p class="page-hero__desc fade-up">
        A collection of projects spanning full-stack apps, APIs, developer tooling,
        and open source contributions. Click any card to see the full story.
      </p>
    </div>
  </section>

  <!-- STATS -->
  <section class="section" style="padding-top:var(--s16);padding-bottom:0;">
    <div class="container">
      <div class="stats-row">
        <div class="stat-card reveal">
          <div class="stat-card__num">20+</div>
          <div class="stat-card__label">Projects shipped</div>
        </div>
        <div class="stat-card reveal">
          <div class="stat-card__num">8</div>
          <div class="stat-card__label">Open source repos</div>
        </div>
        <div class="stat-card reveal">
          <div class="stat-card__num">3</div>
          <div class="stat-card__label">Years building</div>
        </div>
        <div class="stat-card reveal">
          <div class="stat-card__num">∞</div>
          <div class="stat-card__label">Bugs squashed</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FILTERS + GRID -->
  <section class="section" id="work">
    <div class="container">

      <div class="filter-bar reveal" role="group" aria-label="Filter projects">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="fullstack">Full-Stack</button>
        <button class="filter-btn" data-filter="backend">Backend / API</button>
        <button class="filter-btn" data-filter="frontend">Frontend</button>
        <button class="filter-btn" data-filter="tooling">Tooling</button>
        <button class="filter-btn" data-filter="opensource">Open Source</button>
      </div>

      <div class="all-projects-grid">

        <!-- Featured -->
        <article class="proj-card proj-card--featured reveal"
          data-category="fullstack"
          data-modal-trigger="alpha">
          <div class="proj-card__thumb" style="background:hsl(220,30%,10%);">
            <div style="display:flex;flex-direction:column;gap:8px;padding:24px;width:100%;">
              <div style="height:8px;width:70%;background:var(--bg-0);border-radius:2px;"></div>
              <div style="height:8px;width:45%;background:var(--bg-0);border-radius:2px;"></div>
              <div style="height:1px;background:var(--border);margin:8px 0;"></div>
              <div style="height:8px;width:80%;background:var(--bg-0);border-radius:2px;"></div>
              <div style="height:8px;width:60%;background:var(--bg-0);border-radius:2px;"></div>
              <div style="height:32px;width:100px;background:var(--accent-dim);border:1px solid var(--accent);border-radius:4px;margin-top:12px;"></div>
            </div>
          </div>
          <div class="proj-card__body">
            <div class="proj-card__meta">
              <span class="proj-card__type">Full-Stack · Featured</span>
              <span class="proj-card__year">2024</span>
            </div>
            <h2 class="proj-card__title">Project Alpha — E-Commerce Platform</h2>
            <p class="proj-card__desc">
              A production-grade e-commerce platform with real-time inventory,
              Stripe payments, an admin dashboard, and automated order email flows.
              Processes thousands of orders monthly.
            </p>
            <ul class="proj-card__stack">
              <li>Next.js</li>
              <li>TypeScript</li>
              <li>PostgreSQL</li>
              <li>Redis</li>
              <li>Stripe</li>
              <li>Docker</li>
            </ul>
          </div>
        </article>

        <!-- Card 2 -->
        <article class="proj-card reveal" data-category="fullstack" data-modal-trigger="beta">
          <div class="proj-card__thumb" style="background:hsl(160,30%,9%);color:hsl(160,60%,45%);">◉</div>
          <div class="proj-card__body">
            <div class="proj-card__meta">
              <span class="proj-card__type">Full-Stack</span>
              <span class="proj-card__year">2024</span>
            </div>
            <h3 class="proj-card__title">Project Beta — Task Manager SaaS</h3>
            <p class="proj-card__desc">Real-time collaborative task manager with WebSocket syncing, RBAC, and an analytics dashboard.</p>
            <ul class="proj-card__stack">
              <li>React</li>
              <li>Node.js</li>
              <li>Socket.io</li>
              <li>MongoDB</li>
            </ul>
          </div>
        </article>

        <!-- Card 3 -->
        <article class="proj-card reveal" data-category="backend" data-modal-trigger="gamma">
          <div class="proj-card__thumb" style="background:hsl(30,30%,9%);color:hsl(30,60%,50%);">◈</div>
          <div class="proj-card__body">
            <div class="proj-card__meta">
              <span class="proj-card__type">Backend / API</span>
              <span class="proj-card__year">2023</span>
            </div>
            <h3 class="proj-card__title">Project Gamma — REST API Service</h3>
            <p class="proj-card__desc">High-performance API with JWT auth, Redis caching, background job queues, and auto-generated OpenAPI docs.</p>
            <ul class="proj-card__stack">
              <li>Python</li>
              <li>FastAPI</li>
              <li>Redis</li>
              <li>Docker</li>
            </ul>
          </div>
        </article>

        <!-- Card 4 -->
        <article class="proj-card reveal" data-category="tooling opensource" data-modal-trigger="delta">
          <div class="proj-card__thumb" style="background:hsl(270,25%,10%);color:hsl(270,50%,55%);">◇</div>
          <div class="proj-card__body">
            <div class="proj-card__meta">
              <span class="proj-card__type">Tooling · Open Source</span>
              <span class="proj-card__year">2023</span>
            </div>
            <h3 class="proj-card__title">Project Delta — Dev CLI</h3>
            <p class="proj-card__desc">CLI tool automating scaffolding, deploys, and env management. Saves hours per week on repetitive tasks.</p>
            <ul class="proj-card__stack">
              <li>Go</li>
              <li>Cobra CLI</li>
              <li>Bash</li>
            </ul>
          </div>
        </article>

        <!-- Card 5 -->
        <article class="proj-card reveal" data-category="frontend" data-modal-trigger="epsilon">
          <div class="proj-card__thumb" style="background:hsl(190,25%,10%);color:hsl(190,55%,45%);">⬡</div>
          <div class="proj-card__body">
            <div class="proj-card__meta">
              <span class="proj-card__type">Frontend</span>
              <span class="proj-card__year">2024</span>
            </div>
            <h3 class="proj-card__title">Project Epsilon — Design System</h3>
            <p class="proj-card__desc">Component library with 40+ components, Storybook docs, accessibility audits, and auto-published npm packages.</p>
            <ul class="proj-card__stack">
              <li>React</li>
              <li>TypeScript</li>
              <li>Storybook</li>
              <li>Radix UI</li>
            </ul>
          </div>
        </article>

        <!-- Card 6 -->
        <article class="proj-card reveal" data-category="backend opensource" data-modal-trigger="zeta">
          <div class="proj-card__thumb" style="background:hsl(0,25%,10%);color:hsl(0,50%,55%);">⬢</div>
          <div class="proj-card__body">
            <div class="proj-card__meta">
              <span class="proj-card__type">Backend · Open Source</span>
              <span class="proj-card__year">2023</span>
            </div>
            <h3 class="proj-card__title">Project Zeta — Auth Middleware</h3>
            <p class="proj-card__desc">Drop-in Express/Fastify middleware for JWT + refresh token auth. 500+ GitHub stars.</p>
            <ul class="proj-card__stack">
              <li>Node.js</li>
              <li>Express</li>
              <li>JWT</li>
              <li>npm</li>
            </ul>
          </div>
        </article>

        <!-- Card 7 -->
        <article class="proj-card reveal" data-category="fullstack" data-modal-trigger="eta">
          <div class="proj-card__thumb" style="background:hsl(50,25%,9%);color:hsl(50,60%,50%);">◑</div>
          <div class="proj-card__body">
            <div class="proj-card__meta">
              <span class="proj-card__type">Full-Stack</span>
              <span class="proj-card__year">2022</span>
            </div>
            <h3 class="proj-card__title">Project Eta — Blog CMS</h3>
            <p class="proj-card__desc">Headless CMS with a markdown editor, media uploads, SEO fields, and a public API for any frontend.</p>
            <ul class="proj-card__stack">
              <li>Next.js</li>
              <li>Prisma</li>
              <li>S3</li>
              <li>PostgreSQL</li>
            </ul>
          </div>
        </article>

        <!-- Card 8 -->
        <article class="proj-card reveal" data-category="tooling" data-modal-trigger="theta">
          <div class="proj-card__thumb" style="background:hsl(130,20%,9%);color:hsl(130,45%,45%);">◎</div>
          <div class="proj-card__body">
            <div class="proj-card__meta">
              <span class="proj-card__type">Tooling</span>
              <span class="proj-card__year">2024</span>
            </div>
            <h3 class="proj-card__title">Project Theta — CI/CD Pipeline</h3>
            <p class="proj-card__desc">Reusable GitHub Actions workflows for multi-env deploys with Slack notifications and rollback support.</p>
            <ul class="proj-card__stack">
              <li>GitHub Actions</li>
              <li>Docker</li>
              <li>AWS ECS</li>
              <li>Terraform</li>
            </ul>
          </div>
        </article>

      </div>
    </div>
  </section>
</main>

<!-- PROJECT MODAL -->
<div class="modal-overlay" id="projectModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
  <div class="modal">
    <div class="modal__header">
      <div>
        <p class="modal__label" id="modalLabel"></p>
        <h2 class="modal__title" id="modalTitle"></h2>
      </div>
      <button class="modal__close" aria-label="Close modal">✕</button>
    </div>
    <div class="modal__body">
      <div class="modal__visual" id="modalVisual" aria-hidden="true"></div>
      <p class="modal__desc" id="modalDesc"></p>
      <p class="modal__section-title">Key Highlights</p>
      <ul id="modalHighlights" style="display:flex;flex-direction:column;gap:0.5rem;font-size:var(--scale-sm);color:var(--text-1);line-height:1.7;padding-left:1.2rem;list-style:disc;"></ul>
      <p class="modal__section-title">Tech Stack</p>
      <div class="modal__tags" id="modalTags"></div>
      <div class="modal__links">
        <a href="#" class="btn btn--filled" id="modalLive" target="_blank" rel="noopener">Live Site ↗</a>
        <a href="#" class="btn btn--outline" id="modalCode" target="_blank" rel="noopener">View Code ↗</a>
      </div>
    </div>
  </div>
</div>

<!-- Project data -->
<script>
  window.PROJECTS = [{
      id: 'alpha',
      label: 'Full-Stack · Featured',
      icon: '⬛',
      title: 'Project Alpha — E-Commerce Platform',
      desc: 'A production-grade e-commerce platform built to handle high-volume retail. Features real-time inventory management, Stripe Checkout integration, multi-role admin panel, order tracking, and automated email workflows via SendGrid.',
      highlights: [
        'Processes 2,000+ orders per month with sub-200ms API response times',
        'Custom inventory sync engine prevents overselling across multiple warehouses',
        'Admin dashboard with revenue charts, low-stock alerts, and customer analytics',
        'Automated transactional emails: order confirmation, shipping updates, refunds',
        'Deployed on AWS with RDS, ElastiCache, and CloudFront CDN',
      ],
      stack: ['Next.js', 'TypeScript', 'PostgreSQL', 'Redis', 'Stripe', 'SendGrid', 'Docker', 'AWS'],
      live: 'https://yourproject.com',
      code: 'https://github.com/you/alpha',
    },
    {
      id: 'beta',
      label: 'Full-Stack',
      icon: '◉',
      title: 'Project Beta — Task Manager SaaS',
      desc: 'A collaborative project management tool where teams can create boards, assign tasks, and see each other\'s changes in real time. Built with a focus on performance and clean UX.',
      highlights: [
        'WebSocket-powered real-time updates — no page refresh required',
        'Role-based access: Owner, Admin, Member, Viewer permissions',
        'Activity feed, notifications, and @mention system',
        'CSV export, Kanban and list views, deadline tracking',
      ],
      stack: ['React', 'Node.js', 'Socket.io', 'MongoDB', 'JWT', 'Redis', 'Tailwind'],
      live: 'https://yourproject.com',
      code: 'https://github.com/you/beta',
    },
    {
      id: 'gamma',
      label: 'Backend / API',
      icon: '◈',
      title: 'Project Gamma — REST API Service',
      desc: 'A robust, high-performance REST API skeleton designed to be the foundation for any SaaS product. Ships with everything you need: auth, caching, jobs, docs.',
      highlights: [
        'JWT + refresh token auth with secure HTTP-only cookies',
        'Redis caching layer reduces DB load by ~60%',
        'BullMQ background jobs for email, PDF generation, webhooks',
        'Auto-generated Swagger / OpenAPI 3.0 documentation',
        'Rate limiting, request validation, structured logging with Pino',
      ],
      stack: ['Python', 'FastAPI', 'PostgreSQL', 'Redis', 'BullMQ', 'Docker', 'Swagger'],
      live: '',
      code: 'https://github.com/you/gamma',
    },
    {
      id: 'delta',
      label: 'Tooling · Open Source',
      icon: '◇',
      title: 'Project Delta — Developer CLI',
      desc: 'A command-line toolkit that wraps common, repetitive developer workflows into simple one-liners. Particularly useful on teams with consistent project structures.',
      highlights: [
        'Scaffold full-stack projects in <10 seconds with your preferred stack',
        'One-command deployment to any server via SSH + Docker',
        'Env file management: encrypt, decrypt, share safely with teammates',
        '100% test coverage, released to Homebrew and apt repositories',
      ],
      stack: ['Go', 'Cobra CLI', 'SSH', 'Docker', 'Bash', 'GitHub Actions'],
      live: '',
      code: 'https://github.com/you/delta',
    },
    {
      id: 'epsilon',
      label: 'Frontend',
      icon: '⬡',
      title: 'Project Epsilon — Design System',
      desc: 'A comprehensive React component library covering layout, forms, navigation, feedback, and data display. Built for accessibility and team-scale reuse.',
      highlights: [
        '40+ production-ready components with full TypeScript types',
        'WCAG 2.1 AA accessibility — tested with axe and screen readers',
        'Storybook docs with live playground and prop tables',
        'Auto-published to npm on every tagged release via CI',
      ],
      stack: ['React', 'TypeScript', 'Storybook', 'Radix UI', 'CSS Modules', 'npm'],
      live: 'https://storybook.yourname.dev',
      code: 'https://github.com/you/epsilon',
    },
    {
      id: 'zeta',
      label: 'Backend · Open Source',
      icon: '⬢',
      title: 'Project Zeta — Auth Middleware',
      desc: 'A zero-config drop-in authentication middleware for Express and Fastify. Handles the full JWT lifecycle so you don\'t have to.',
      highlights: [
        'Access + refresh token flow with automatic rotation',
        'Works with Express, Fastify, and Koa out of the box',
        '500+ GitHub stars, used in 50+ downstream projects',
        'Configurable token storage: memory, Redis, or custom adapter',
      ],
      stack: ['Node.js', 'Express', 'Fastify', 'JWT', 'TypeScript', 'npm'],
      live: '',
      code: 'https://github.com/you/zeta',
    },
    {
      id: 'eta',
      label: 'Full-Stack',
      icon: '◑',
      title: 'Project Eta — Headless Blog CMS',
      desc: 'A developer-first CMS that separates content management from presentation. Editors get a polished UI; developers get a clean REST/GraphQL API.',
      highlights: [
        'Rich markdown editor with image uploads to S3',
        'Draft, scheduled, and published post states',
        'SEO fields, Open Graph previews, canonical URL management',
        'Public API consumed by a Next.js frontend with ISR caching',
      ],
      stack: ['Next.js', 'Prisma', 'PostgreSQL', 'S3', 'GraphQL', 'Vercel'],
      live: 'https://cms.yourname.dev',
      code: 'https://github.com/you/eta',
    },
    {
      id: 'theta',
      label: 'Tooling',
      icon: '◎',
      title: 'Project Theta — CI/CD Pipeline Templates',
      desc: 'A collection of battle-tested GitHub Actions workflows for deploying containerised apps across multiple environments with safety mechanisms baked in.',
      highlights: [
        'Multi-environment: dev → staging → production promotion gates',
        'Automatic rollback on failed health checks',
        'Slack notifications with deploy summary and diff links',
        'Terraform infrastructure provisioning step built in',
      ],
      stack: ['GitHub Actions', 'Docker', 'AWS ECS', 'Terraform', 'Bash', 'Slack API'],
      live: '',
      code: 'https://github.com/you/theta',
    },
  ];
</script>