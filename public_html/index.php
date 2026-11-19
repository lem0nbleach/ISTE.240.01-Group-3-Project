<?php
	$pageTitle = 'Home';
	$activeNav = 'home';
	$cssFile = 'index.css';
	$path = './';
	include $path . 'assets/inc/header.php';
?>

	<section class="hero" data-lines="a unix tutorial, written by students.|learn the shell by actually using it.|the command line, explained properly.">
		<h1 class="sr-only">Tigersay</h1>
		<p class="hero-line" aria-hidden="true"><span class="hero-text"></span><span class="hero-cursor"></span></p>
		<p class="hero-note">A shared reference for understanding how the web works, what it permits, and which tools make it usable.</p>
	</section>

	<section class="content-box">
		<h2>What is Unix?</h2>
		<p>The name Unix in modern definition, refers to a family of operating systems that was
			derived from the original system named `unix`, of which was developed by AT&amp;T and Bell
			Labs. Famous examples of current day Unix are Linux, MacOS, and BSD.
		</p>
		<p>
			The distinctive characteristics of Unix systems is their adherence to the Unix
			philosophy. The said philosophy asks for modularization and unified communication
			across software. Meaning every program should be restricted to very limited functions
			and they should have a standard way to communicate with each other. The purpose of
			this philosophy is to make the system maintainable as each program can be easily
			replaceable.
		</p>
		<p>
			For a more easily observable distinction, the higher usage of the Command Line would
			be another difference. On Unix systems, many tools are built to have CLI functionality
			or CLI only for the purpose of robustness, shorter development time, and lightweight. 
		</p>
	</section>
	<section class="content-box">
		<h2>Why do People Use Unix?</h2>
		<p>
			Partly because of its original purpose of being an easy platform for programmers,
			people doing software related work still is the main audience for Unix. Current day
			server side systems are dominantly Linux and thus forcing new programmers joining
			the work force to adopt Unix systems in a way as well.
		</p>
		<p>
			Recently there has been a wider, more targeted non-programmer, wave of Unix adoption
			as the Graphical Interface improvements on Linux and the ever growing privacy concern
			of Windows.  
		</p>
	</section>
	<!-- Page content goes here. Each page sets $pageTitle and $activeNav above. -->

	<script src="assets/scripts/heroType.js"></script>

	<?php include $path . 'assets/inc/footer.php'; ?>
