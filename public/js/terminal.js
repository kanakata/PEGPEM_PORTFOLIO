/* terminal.js — cycling terminal commands */
(function () {
  'use strict';

  const el = document.getElementById('terminalText');
  if (!el) return;

  const commands = [
    'git commit -m "ship it"',
    'npm run build && npm run deploy',
    'docker compose up --detach',
    'psql -d mydb -c "SELECT * FROM users"',
    'ssh ubuntu@prod-server',
  ];

  let idx = 0, chr = 0, deleting = false;
  const TYPE_MS = 75, DEL_MS = 35, PAUSE_MS = 2200;

  function tick() {
    const cmd = commands[idx];
    if (!deleting) {
      el.textContent = cmd.slice(0, ++chr);
      if (chr === cmd.length) {
        deleting = true;
        return setTimeout(tick, PAUSE_MS);
      }
    } else {
      el.textContent = cmd.slice(0, --chr);
      if (chr === 0) {
        deleting = false;
        idx = (idx + 1) % commands.length;
      }
    }
    setTimeout(tick, deleting ? DEL_MS : TYPE_MS);
  }
  setTimeout(tick, 1000);
})();
