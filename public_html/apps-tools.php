<?php
	$pageTitle = 'Apps & Tools';
	$activeNav = 'apps';
	$cssFile = 'apps-tools.css';
	$path = './';
	include $path . 'assets/inc/header.php';
?>

	<h1>Apps &amp; Tools</h1>
	<p>There are many applications and tools that are essential when working with Unix-based operating systems. Whether you're remotely accessing another computer, transferring files between systems, or editing files directly through the terminal, understanding these tools is an important part of becoming comfortable with Unix. In this section, we’ll explore three commonly used tools: SSH, SFTP, and nano.</p>

	<section class="content-box">
		<h2>SSH (Secure Shell)</h2>
		<p>SSH is a protocol that allows users to remotely and securely access systems. It is very commonly used in unix environments when on-site administration of the target server or machine cannot be accomplished.</p>
		<a href="#">Learn More</a>
	</section>

	<section class="content-box">
		<h2>SFTP (Secure File Transfer Protocol)</h2>
		<p>SFTP is a protocol which allows users to upload, download, and manage files between two computers. This protocol is built on SSH, allowing the transfer of files to be secure.</p>
		<a href="#">Learn More</a>
	</section>

	<section class="content-box">
		<h2>Nano</h2>
		<p>Nano is a terminal based text editor commonly available on unix systems. It provides a native way to create, view, and edit text files without needing a complex graphical user interface.</p>
		<a href="#">Learn More</a>
	</section>

	

<?php include $path . 'assets/inc/footer.php'; ?>
