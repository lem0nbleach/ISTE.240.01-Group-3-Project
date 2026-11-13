<?php
	$pageTitle = $pageTitle ?? 'Tigersay';
	$activeNav = $activeNav ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo htmlspecialchars($pageTitle); ?> — Tigersay</title>
	<link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>

	<header class="site-header">
		<div class="wrap header-inner">
			<a class="brand" href="index.php">Tigersay</a>
			<?php include __DIR__ . '/nav.php'; ?>
		</div>
	</header>

	<main class="wrap">
