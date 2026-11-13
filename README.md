# Tigersay — ISTE.240 Group Project

This repository holds the group project site for **ISTE.240**. The course doubles as a Unix tutorial, so the work here is as much about the mechanics as the content: files served by a web server, shared includes, relative paths, and doing it from a shell rather than a GUI.

## How the site is put together

Every page is **content only**. It sets two variables, pulls in the shared header, writes its content, and pulls in the shared footer:

```php
<?php
    $pageTitle = 'About The Team';
    $activeNav = 'about';
    $path      = './';
    include $path . 'assets/inc/header.php';
?>

    <h1>About The Team</h1>
    <!-- page content -->

<?php include $path . 'assets/inc/footer.php'; ?>
```

- `$pageTitle` becomes the `<title>` (escaped in `header.php`).
- `$activeNav` is the page's key. `nav.php` compares it against each link and adds `class="active"` and `aria-current="page"` to the matching one.

`header.php` contains the doctype, the `<head>`, the opening `<body>`, the site header, and it includes `nav.php` with `include __DIR__ . '/nav.php'`. `footer.php` closes `<main>`, prints the footer, and closes the document.

Because of that, the doctype, navigation and footer exist in exactly one file each. Change `nav.php` and every page changes.

## File structure

```
.
├── public_html/                  Web root — everything the server serves
│   ├── index.php                 Home
│   ├── basics.php                Basics
│   ├── permissions.php           Permissions
│   ├── apps-tools.php            Apps & Tools
│   ├── glossary.php              Glossary
│   ├── references.php            References
│   ├── about.php                 About the team
│   └── assets/
│       ├── inc/
│       │   ├── header.php        Doctype, <head>, site header; includes nav.php
│       │   ├── nav.php           Navigation links and active-page logic
│       │   └── footer.php        Closes <main>, prints footer, closes document
│       ├── css/
│       │   └── styles.css        The single site stylesheet (linked by header.php)
│       └── images/
│           └── tigersay logo/    Dark and white logo PNGs
├── nginx/
│   └── default.conf              Server block for the local preview
├── docker-compose.yml            Local preview stack — requires Docker
└── README.md
```

## Adding a page

1. Copy an existing page: `cp public_html/basics.php public_html/faq.php`
2. Change `$pageTitle` and `$activeNav` at the top.
3. Add a matching link to `public_html/assets/inc/nav.php`, using the same key you put in `$activeNav`.
4. Put styles in `public_html/assets/css/styles.css`, not in the page.

## Editing shared elements

The header, navigation, footer and stylesheet live in `public_html/assets/`. An edit there appears on every page at once — which is the point, and also the risk. Change them deliberately.

## Conventions

- Filenames are lowercase and hyphenated (`apps-tools.php`).
- Navigation order: Home, Basics, Permissions, Apps & Tools, Glossary, References, About.
- Navigation keys: `home`, `basics`, `permissions`, `apps`, `glossary`, `references`, `about`.
- Page files contain no doctype, `<nav>`, `<footer>` or layout markup.
- If something appears on more than one page, it belongs in `assets/inc/`.

## Working with git

Everyone commits to `main`. There are no branches, so there is nothing to merge — but that also means `main` is shared, and a careless commit lands on everyone.

If git is new to you, read **chapters 1 and 2** of [Pro Git](https://git-scm.com/book/en/v2). Between them they cover everything this project uses. Chapter 3 (branching) and chapter 4 (servers) are not needed here.

The daily loop:

```bash
git pull                 # get everyone else's work first
git status               # what have I changed?
git add <files>
git commit -m "area: what changed"
git push
```

### Commit messages

- **One change per commit.** If you can't describe it in one sentence, it's two commits.
- **Subject:** `area: imperative summary`. Lowercase area, no trailing period, aim for 50 characters.
  - Good: `nav: highlight the active page link`
  - Weak: `nav fix` — fixed what, and where?
- **Body when needed.** If the reason isn't obvious from the subject, explain *why*. The subject says what changed; the body says why it had to.

Each `-m` is one paragraph. The first is the subject, the second is the body, and git puts the blank line between them itself:

```bash
git commit -m "nav: highlight the active page link" \
           -m "The nav gave no sign of which page you were on. Add class=active and aria-current to the matching link."
```

If you prefer to write it out, run `git commit` with no `-m`. That opens your editor: type the subject, leave one blank line, then write the body. Save and close to commit.

### Two rules

- **Never force-push.** It rewrites history other people may already have. If a push is rejected, `git pull`, resolve, then push again.
- **Never commit clutter.** `*.zip`, `.DS_Store`, local scratch files. `.gitignore` already excludes them; don't force one in with `git add -f`.

## Running the site locally (optional)

For previewing changes on your own machine. RIT hosts and serves the project, so this isn't needed to publish or submit, and it requires Docker — which not everyone has.

```bash
sudo docker compose up -d
```

Then open <http://localhost>. `sudo docker compose down` stops it.
