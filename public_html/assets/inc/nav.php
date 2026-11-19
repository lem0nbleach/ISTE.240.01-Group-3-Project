<nav class="site-nav" aria-label="Main">
	<div class="home-logo">
		<img class="logo-white" src="assets/images/tigersay-logo/white_logo_embellished.PNG" alt="">
		<img class="logo-dark" src="assets/images/tigersay-logo/dark_logo_embellished.PNG" alt="">
		<a href="index.php" class="<?php echo $activeNav === 'home' ? 'active' : ''; ?>"<?php echo $activeNav === 'home' ? ' aria-current="page"' : ''; ?>>&lt;Tigersay!&gt;</a>
	</div>
	<a href="basics.php" class="<?php echo $activeNav === 'basics' ? 'active' : ''; ?>"<?php echo $activeNav === 'basics' ? ' aria-current="page"' : ''; ?>>Basics</a>
	<a href="permissions.php" class="<?php echo $activeNav === 'permissions' ? 'active' : ''; ?>"<?php echo $activeNav === 'permissions' ? ' aria-current="page"' : ''; ?>>Permissions</a>
	<a href="apps-tools.php" class="<?php echo $activeNav === 'apps' ? 'active' : ''; ?>"<?php echo $activeNav === 'apps' ? ' aria-current="page"' : ''; ?>>Apps &amp; Tools</a>
	<a href="glossary.php" class="<?php echo $activeNav === 'glossary' ? 'active' : ''; ?>"<?php echo $activeNav === 'glossary' ? ' aria-current="page"' : ''; ?>>Glossary</a>
	<a href="references.php" class="<?php echo $activeNav === 'references' ? 'active' : ''; ?>"<?php echo $activeNav === 'references' ? ' aria-current="page"' : ''; ?>>References</a>
	<a href="about.php" class="<?php echo $activeNav === 'about' ? 'active' : ''; ?>"<?php echo $activeNav === 'about' ? ' aria-current="page"' : ''; ?>>About</a>

	<button class="theme-toggle" id="theme-toggle" type="button" aria-pressed="true" aria-label="Switch to light mode">
		<svg class="icon icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
			<circle cx="12" cy="12" r="4"/>
			<path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>
		</svg>
		<svg class="icon icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
			<path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/>
		</svg>
	</button>
</nav>

<!-- The php here changes the class to 'active' if you are on the current page and adds aria-current="nameofpage" to indicate so -->
