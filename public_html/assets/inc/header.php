<?php
	$pageTitle = $pageTitle ?? 'Tigersay';
	$activeNav = $activeNav ?? '';
	$cssFile = $cssFile ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		/* Apply the saved theme before the stylesheets load, so there is no flash
		   of the wrong mode. Dark is the default when nothing is stored. */
		(function () {
			var theme = 'dark';
			try {
				if (localStorage.getItem('theme') === 'light') { theme = 'light'; }
			} catch (e) {}
			document.documentElement.setAttribute('data-theme', theme);
		})();
	</script>
	<title><?php echo htmlspecialchars($pageTitle); ?> — Tigersay</title>
	<link href="assets/css/styles.css" rel="stylesheet">
	<?php
		if (!empty($cssFile)) {
			echo '<link href="assets/css/' . htmlspecialchars($cssFile) . '" rel="stylesheet">';
		}
	?>
	<script src="assets/scripts/themeToggle.js" defer></script>
</head>
<body>

	<header class="site-header">
		<div class="wrap header-inner">
			<?php include __DIR__ . '/nav.php'; ?>
		</div>
	</header>

	<main class="wrap">
