<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inspiration for Article Intro Effects | Demo 1</title>
		<meta name="description" content="Inspiration for Article Intro Effects" />
		<meta name="keywords" content="title, header, effect, scroll, inspiration, medium, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<?php wp_head(); ?>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class('demo-1'); ?> >
		<div id="container" class="container intro-effect-push">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Tutorials/SamsungGrid/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19119"><span>Back to the Codrops Article</span></a></span>
			</div>
			<header class="header">
				<div class="bg-img"><img src="img/7.jpg" alt="Background Image"/></div>
				<div class="title">
					<nav class="codrops-demos">
						<?php
						if (has_nav_menu('primary')){

							$options = array(
								'items_wrap'=> '%3$s',
								'walker' => new Nav_Effects_Walker(),
								'container'=>false,
								'menu_class' => '',
								'theme_location'=>'primary',
								'fallback_cb'=>false
							);

							wp_nav_menu( $options );


						}
						?>
					</nav>

					<h1>Breathe under water till the end</h1>
				</div>
			</header>
			<button class="trigger" data-info="Click to see the header effect"><span>Trigger</span></button>
			<div class="title">
				<nav class="codrops-demos">
						<a class="current-demo" href="index.html">Push</a>
						<a href="index2.html">Fade Out</a>
						<a href="index3.html">Sliced</a>
						<a href="index4.html">Side</a>
						<a href="index5.html">Fixed Side</a>
						<a href="index6.html">Grid</a>
						<a href="index7.html">Jam 3</a>
					</nav>
				<h1>Breathe under water till the end</h1>
				<p class="subline">Inspiration for Article Intro Effects</p>
				<p>by <strong>Henry James</strong> &#8212; Posted in <strong>Inspiration</strong> on <strong>May 21, 2014</strong></p>
			</div>
