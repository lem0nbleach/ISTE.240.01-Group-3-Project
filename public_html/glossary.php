<?php
	$pageTitle = 'Glossary';
	$activeNav = 'glossary';
	$cssFile = 'glossary.css';
	$path = './';
	include $path . 'assets/inc/header.php';
?>

	<h1>Glossary</h1>
	<div class="glossary-layout">

		<!-- TO ADD MORE GLOSSARY PAGS, COPY AND PASTE THE "glossary-section" AND THEN FILL IN INFORMATION THAT IS APPROPRIATE -->
		<!-- TO ADD MORE WORDS IN THE GLOSSARY, COPY AND PASTE <li> ELEMENTS INSIDE OF "glossary-list" AND FILL IN APPROPRIATE INFORMATION -->
		<section class="glossary-section">
			<a href="index.php">
				<h2>Home Page</h2>
			</a>
			
			<ul class="glossary-list">
				<li>
					<!-- make sure to provide the ID for the word you are trying to reach using a path. /index.php#id-for-word-here -->
					<!-- the word must be wrapped in an <a> tag with an href of the id. ex <a href="#target-word">word</a> -->
					<a href="ID GOES HERE" rel="noopener">Word</a>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia natus quidem saepe optio veniam aut! Suscipit nesciunt quae minima. Esse minima ducimus cupiditate nam possimus ex cum natus consectetur voluptatibus.</p>
				</li>

				<li>
					<a href="ID GOES HERE" rel="noopener">Word</a>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia natus quidem saepe optio veniam aut! Suscipit nesciunt quae minima. Esse minima ducimus cupiditate nam possimus ex cum natus consectetur voluptatibus.</p>
				</li>

				<li>
					<a href="ID GOES HERE" rel="noopener">Word</a>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia natus quidem saepe optio veniam aut! Suscipit nesciunt quae minima. Esse minima ducimus cupiditate nam possimus ex cum natus consectetur voluptatibus.</p>
				</li>

				<li>
					<a href="ID GOES HERE" rel="noopener">Word</a>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia natus quidem saepe optio veniam aut! Suscipit nesciunt quae minima. Esse minima ducimus cupiditate nam possimus ex cum natus consectetur voluptatibus.</p>
				</li>
			</ul>
		</section>

	</div>

<?php include $path . 'assets/inc/footer.php'; ?>
