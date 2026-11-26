/* Mobile navigation: the hamburger toggles the collapsed link menu. */

(function () {
  var toggle = document.getElementById('nav-toggle');
  var menu = document.getElementById('nav-menu');
  if (!toggle || !menu) return;

  var wideScreen = window.matchMedia('(min-width: 901px)');

  function isOpen() {
    return toggle.getAttribute('aria-expanded') === 'true';
  }

  function setOpen(open) {
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    menu.classList.toggle('is-open', open);
  }

  toggle.addEventListener('click', function () {
    setOpen(!isOpen());
  });

  /* A tapped link should collapse the menu, even when it points at this page. */
  menu.addEventListener('click', function (event) {
    if (event.target.closest('a')) {
      setOpen(false);
    }
  });

  /* Escape closes the menu and returns focus to the button that opened it. */
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && isOpen()) {
      setOpen(false);
      toggle.focus();
    }
  });

  /* Clicking anywhere outside the menu or its toggle closes it. */
  document.addEventListener('click', function (event) {
    if (!isOpen()) return;
    if (menu.contains(event.target) || toggle.contains(event.target)) return;
    setOpen(false);
  });

  /* Growing past the breakpoint reveals the full nav again; drop the open state. */
  function closeOnWideScreen() {
    if (wideScreen.matches) {
      setOpen(false);
    }
  }

  closeOnWideScreen();
  if (wideScreen.addEventListener) {
    wideScreen.addEventListener('change', closeOnWideScreen);
  } else if (wideScreen.addListener) {
    wideScreen.addListener(closeOnWideScreen);
  }
})();
