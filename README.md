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
│   └── default.conf              Server block; routes .php to the PHP service
├── docker-compose.yml            Optional local nginx + PHP stack
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

## Running the site locally

A docker compose is provided with a very minimal nginx server, configured in `nginx/default.conf` with php enabled. 

```bash
sudo docker compose up -d
```

Then open <http://localhost>.
