<?php get_header(); ?>

<body <?php body_class('demo-1'); ?> >
	<div id="container" class="container intro-effect-push">
		<!-- Top Navigation -->
		<header class="header">
			<div class="bg-img">
				<img src="<?php echo get_theme_mod('effects_image_upload'); ?>"  />
			</div>
			<div class="title">
				<?php get_template_part( 'template-parts/header', 'menu' ); ?>
				<h1><?php echo get_theme_mod('title_setting'); ?></h1>
				<div class="blog_desc">
					<?php echo get_theme_mod('text_setting'); ?>
				</div>
			</div>
		</header>
		<button class="trigger" data-info="Click to see the header effect"><span>Trigger</span></button>

		<div class="title">
			<?php get_template_part( 'template-parts/header', 'menu' ); ?>
		</div>

			<article class="content">
				<div class="container">
					<div class="<?php if(sidebar_get_meta( 'sidebar_active_sidebar' )): ?>col-md-8<?php else: ?>col-md-12<?php endif; ?>">

						<?php while ( have_posts() ) : the_post(); ?>

							<header>
								<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p>by <strong><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Henry James</a></strong> &#8212; Posted in <strong><?php the_category( ' ' ); ?></strong></p>
							</head>
							<?php echo substr(strip_tags($post->post_content), 0, 46); ?>
							...<a href="<?php echo get_permalink(); ?>">
								<?php _e('Read more', 'effects'); ?>
							</a>

						<?php endwhile; ?>

						<div class="nav-previous alignleft"><?php next_posts_link( '&larr; Older posts' ); ?></div>
						<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>

					</div>

					<?php
					if(sidebar_get_meta( 'sidebar_active_sidebar' )):
						get_sidebar();
					endif;
					?>

				</div>
			</article>
<?php get_footer(); ?>
