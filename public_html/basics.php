<?php
	$pageTitle = 'Basics';
	$activeNav = 'basics';
	$cssFile = 'basics.css';
	$path = './';
	include $path . 'assets/inc/header.php';
?>

	<h1>Basics</h1>
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
		<h2>Try out some commands in this terminal!</h2>
		<p>You are located in somewhere in the home directory Your goals are to: </p> 
		<ol>
			<li>Find out where you are.</li>
			<li>Navigate to the parent directory.</li>
			<li>List directories.</li>
			<li>Change directory to the music folder.</li>
			<li>Create a new 'albums' directory inside the music folder.</li>
			<li>List its contents to see your new directory.</li>
		</ol>
		<div class="terminal">
			<div id="screen"></div>
			<form id="form">
				<span id="prompt"></span>
				<input id="entry" autocomplete="off" placeholder="Enter commands here">
			</form>
			<script src="assets/scripts/basicsTerminal.js"></script>
		</div>
	</section>
	<!-- Page content goes here. Each page sets $pageTitle and $activeNav above. -->

<?php include $path . 'assets/inc/footer.php'; ?>
