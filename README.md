# Portfolio — Software Developer

Dark & minimal portfolio. No frameworks, no build step, no npm.

---

## 📁 Folder structure

```
portfolio/
├── index.html              ← All HTML (every section)
│
├── css/
│   ├── reset.css           ← Minimal CSS reset
│   ├── variables.css       ← All design tokens (colours, fonts, spacing)
│   ├── style.css           ← Component styles
│   ├── animations.css      ← Scroll reveals, pulse, blink, hero entry
│   └── responsive.css      ← Breakpoints (960px, 680px, 400px)
│
├── js/
│   ├── cursor.js           ← Custom amber cursor + ring
│   ├── nav.js              ← Sticky nav, burger/drawer, active link
│   ├── terminal.js         ← Hero terminal typewriter cycling text
│   ├── reveal.js           ← IntersectionObserver scroll reveals
│   ├── skills.js           ← Skill bar fill animation on scroll
│   └── form.js             ← Validation + backend hook (see below)
│
└── assets/
    └── icons/              ← Drop SVG/PNG icons here
```

---

## 🚀 Run locally

```bash
# Option A — Python
python3 -m http.server 3000

# Option B — Node
npx serve .
```

Then open `http://localhost:3000`.

---

## 🔌 Connecting your backend

Open `js/form.js` and find `submitToBackend(data)`.
Replace the stub comment with your real call:

```js
async function submitToBackend(data) {
  return fetch('/api/contact', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(data),
  }).then(res => {
    if (!res.ok) throw new Error('Server error ' + res.status);
  });
}
```

`data` shape:
```json
{ "name": "...", "email": "...", "subject": "...", "message": "..." }
```

Client-side validation (name, email format, message length) runs before your
function is ever called — no need to re-validate those on the frontend.

---

## 🎨 Customising

| What                   | File / selector                           |
|------------------------|-------------------------------------------|
| Accent colour (amber)  | `css/variables.css` → `--accent`          |
| Fonts                  | `css/variables.css` + Google Fonts `<link>` |
| Your name / bio        | `index.html` hero & about sections       |
| Projects               | `index.html` `#projects`                 |
| Skill levels           | `data-level="XX"` attributes in `index.html` |
| Terminal commands      | `js/terminal.js` → `commands` array      |
| Social / contact links | `index.html` `#contact`                  |

---

## ♿ Accessibility

- Semantic `<header>`, `<main>`, `<footer>`, `<article>`, `<nav>` elements
- `aria-label` on icon-only links
- `aria-expanded` / `aria-hidden` on mobile drawer
- `aria-live` on form status message
- Custom cursor auto-hides on touch devices (`@media (hover: none)`)
