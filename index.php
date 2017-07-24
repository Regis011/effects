<?php get_header(); ?>

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
				<h1><?php the_title(); ?></h1>
				<p class="subline">Inspiration for Article Intro Effects</p>
				<p>by <strong><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Henry James</a></strong> &#8212; Posted in <strong><?php the_category( ' ' ); ?></strong></p>
			</div>

			<article class="content">
				<div class="container">
					<div class="<?php if(sidebar_get_meta( 'sidebar_active_sidebar' )): ?>col-md-8<?php else: ?>col-md-12<?php endif; ?>">

						<?php the_content(); ?>

					</div>

					<?php
					if(sidebar_get_meta( 'sidebar_active_sidebar' )):
						get_sidebar();
					endif;
					?>

				</div>
			</article>
<?php get_footer(); ?>
