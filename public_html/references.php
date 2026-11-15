<?php
	$pageTitle = 'References';
	$activeNav = 'references';
	$cssFile = 'references.css';
	$path = './';
	include $path . 'assets/inc/header.php';
?>

	<h1>References</h1>
	
	<div class="references-layout">
		<!-- TO ADD MORE REFERENCES, COPY AND PASTE A SECTION "reference-section" AND THEN FILL IN INFORMATION THAT IS APPROPRIATE -->
		<!-- TO ADD MORE REFERENCE LINKS, COPY AND PASTE THE "reference-link" DIV AND FILL IN APPROPRIATE INFORMATION -->
		 
		<!-- BOTH OF THESE SECTIONS ARE JUST FILLER FOR NOW -->
		<section class="reference-section">
			<a href="index.php">
				<h2>Home Page</h2>
			</a>
			
			<div class="reference-link">
				<h3>What we cited | ex. "Information for SSH"</h3>
				<a href="#">Insert link to style | ex. Citation For SSH</a>
			</div>

			<div class="reference-link">
				<h3>Example citation 2. "Information for SSH"</h3>
				<a href="#">Insert link to style | ex. Citation For SSH</a>
			</div>
		</section>

		<section class="reference-section">
			<a href="basics.php">
				<h2>Basics</h2>
			</a>
			
			<div class="reference-link">
				<h3>What we cited | ex. "Information for SSH"</h3>
				<a href="#">Insert link to style | ex. Citation For SSH</a>
			</div>

			<div class="reference-link">
				<h3>Example citation 2. "Information for SSH"</h3>
				<a href="#">Insert link to style | ex. Citation For SSH</a>
			</div>
		</section>

	</div>

<?php include $path . 'assets/inc/footer.php'; ?>
