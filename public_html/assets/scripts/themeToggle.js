/* light/dark theme switch with persistence.*/

(function () {
  var root = document.documentElement;
  var btn = document.getElementById('theme-toggle');
  if (!btn) return;

  function current() {
    return root.getAttribute('data-theme') === 'light' ? 'light' : 'dark';
  }

  function apply(theme) {
    var dark = theme === 'dark';
    root.setAttribute('data-theme', theme);
    btn.setAttribute('aria-pressed', dark ? 'true' : 'false');
    btn.setAttribute('aria-label', dark ? 'Switch to light mode' : 'Switch to dark mode');
    try {
      localStorage.setItem('theme', theme);
    } catch (e) {}
  }

  /* Reflect the mode restored by the head script, without re-saving it. */
  var start = current();
  btn.setAttribute('aria-pressed', start === 'dark' ? 'true' : 'false');
  btn.setAttribute('aria-label', start === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');

  btn.addEventListener('click', function () {
    apply(current() === 'dark' ? 'light' : 'dark');
  });
})();
