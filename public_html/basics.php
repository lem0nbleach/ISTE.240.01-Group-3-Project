<?php
	$pageTitle = 'Basics';
	$activeNav = 'basics';
	$cssFile = 'basics.css';
	$path = './';
	include $path . 'assets/inc/header.php';
?>

	<h1>Basics</h1>
	<section class="content-box">
		<h2>What is Unix?</h2>
		<p>The name Unix in modern definition, refers to a family of operating systems that was
			derived from the original system named `unix`, of which was developed by AT&T and Bell
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
	<section class="content-box">
		<h2>File Structure</h2>
		<p>In Unix systems, the file structure is hierarchical, starting from the root directory denoted by
			`/`. All files and directories stem from this root. Common directories include, `/etc` for
			configuration files, `/home` for user home directories, and `/var` for variable data.
		</p>
		<p>
			Files and directories can be referenced using either absolute or relative paths. An absolute path
			specifies the full path from the root directory, such as `/home/user/documents/file.txt`. A relative
			path specifies the location relative to the current working directory. If you were working in '/home/user',
			you could just use `documents/file.txt` to refer to a txt file in the 'documents' directory. If you wanted
			to access a file in the parent directory, you could use `../file.txt`, where `..` points to the parent directory.
		</p>
		<h3>Important Directory Commands</h3>
		<ul>
			<li>`ls` - List directory contents. Lists all files and directories in the current directory.</li>
			<li>`cd` - Change directory. Use `cd &lt;directory&gt;` to move to a different directory.</li>
			<li>`pwd` - Print working directory. Displays the full path of the current directory.</li>
			<li>`mkdir` - Create a new directory. Use `mkdir &lt;directory&gt;` to create a new directory with the specified name.</li>
			<li>`rmdir` - Remove an empty directory. Use `rmdir &lt;directory&gt;` to delete the specified empty directory.</li>
		</ul>
	</section>
	<section class="content-box">
		<h2>Try out some of the commands mentioned above in this terminal:</h2>
		<p>You are located in somewhere in the home directory Your goals are to: </p> 
		<ol>
			<li>Find out where you are.</li>
			<li>List directories.</li>
			<li>Change directory to the music folder.</li>
			<li>Create a new 'albums' directory inside the music folder.</li>
			<li>List its contents to see your new directory.</li>
		</ol>
		<div class="terminal">
			<div id="screen"></div>
			<form id="form">
				<span id="prompt"></span>
				<input id="box" autocomplete="off" placeholder="Enter commands here">
			</form>
			<script src="assets/scripts/basicsTerminal.js"></script>
		</div>
	</section>
	<!-- Page content goes here. Each page sets $pageTitle and $activeNav above. -->

<?php include $path . 'assets/inc/footer.php'; ?>
