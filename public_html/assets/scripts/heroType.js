/* heroType.js — rotating typed line for the landing-page hero.
   Lines come from the data-lines attribute on .hero, separated by "|".

   Sequence per line: type, hold (cursor blinks), delete, pause, next line.
   Honours prefers-reduced-motion by showing the first line statically. */

(function () {
  var hero = document.querySelector('.hero');
  if (!hero) return;

  var out = hero.querySelector('.hero-text');
  var lines = (hero.getAttribute('data-lines') || '')
    .split('|')
    .map(function (s) { return s.trim(); })
    .filter(Boolean);

  if (!out || !lines.length) return;

  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    out.textContent = lines[0];
    return;
  }

  var TYPE_MS = 30;   /* typing speed, per character */
  var HOLD_MS = 1800; /* reading pause; cursor blinks ~3 times at 500ms */
  var DEL_MS = 15;    /* deleting speed, per character */
  var GAP_MS = 350;   /* pause before the next line starts */

  var index = 0;
  var chars = 0;
  var deleting = false;

  function step() {
    var line = lines[index];

    if (!deleting) {
      chars++;
      out.textContent = line.slice(0, chars);
      if (chars < line.length) { setTimeout(step, TYPE_MS); return; }
      deleting = true;
      setTimeout(step, HOLD_MS);
      return;
    }

    chars--;
    out.textContent = line.slice(0, Math.max(chars, 0));
    if (chars > 0) { setTimeout(step, DEL_MS); return; }

    deleting = false;
    index = (index + 1) % lines.length;
    setTimeout(step, GAP_MS);
  }

  setTimeout(step, 400);
})();
