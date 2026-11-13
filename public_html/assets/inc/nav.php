<nav class="site-nav" aria-label="Main">
	<a href="index.php" class="<?php echo $activeNav === 'home' ? 'active' : ''; ?>"<?php echo $activeNav === 'home' ? ' aria-current="page"' : ''; ?>>Home</a>
	<a href="basics.php" class="<?php echo $activeNav === 'basics' ? 'active' : ''; ?>"<?php echo $activeNav === 'basics' ? ' aria-current="page"' : ''; ?>>Basics</a>
	<a href="permissions.php" class="<?php echo $activeNav === 'permissions' ? 'active' : ''; ?>"<?php echo $activeNav === 'permissions' ? ' aria-current="page"' : ''; ?>>Permissions</a>
	<a href="apps-tools.php" class="<?php echo $activeNav === 'apps' ? 'active' : ''; ?>"<?php echo $activeNav === 'apps' ? ' aria-current="page"' : ''; ?>>Apps &amp; Tools</a>
	<a href="glossary.php" class="<?php echo $activeNav === 'glossary' ? 'active' : ''; ?>"<?php echo $activeNav === 'glossary' ? ' aria-current="page"' : ''; ?>>Glossary</a>
	<a href="references.php" class="<?php echo $activeNav === 'references' ? 'active' : ''; ?>"<?php echo $activeNav === 'references' ? ' aria-current="page"' : ''; ?>>References</a>
	<a href="about.php" class="<?php echo $activeNav === 'about' ? 'active' : ''; ?>"<?php echo $activeNav === 'about' ? ' aria-current="page"' : ''; ?>>About</a>
</nav>

<!-- The php here changes the class to 'active' if you are on the current page and adds aria-current="nameofpage" to indicate so -->
