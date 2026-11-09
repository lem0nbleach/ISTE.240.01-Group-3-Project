<nav class="site-nav" aria-label="Main">
	<ul>
		<li><a href="index.php"<?php echo $activeNav === 'home' ? ' aria-current="page"' : ''; ?>>Home</a></li>
		<li><a href="basics.php"<?php echo $activeNav === 'basics' ? ' aria-current="page"' : ''; ?>>Basics</a></li>
		<li><a href="permissions.php"<?php echo $activeNav === 'permissions' ? ' aria-current="page"' : ''; ?>>Permissions</a></li>
		<li><a href="apps-tools.php"<?php echo $activeNav === 'apps' ? ' aria-current="page"' : ''; ?>>Apps &amp; Tools</a></li>
		<li><a href="glossary.php"<?php echo $activeNav === 'glossary' ? ' aria-current="page"' : ''; ?>>Glossary</a></li>
		<li><a href="references.php"<?php echo $activeNav === 'references' ? ' aria-current="page"' : ''; ?>>References</a></li>
		<li><a href="about.php"<?php echo $activeNav === 'about' ? ' aria-current="page"' : ''; ?>>About</a></li>
	</ul>
</nav>
