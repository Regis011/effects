<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package effects
 */

 get_header(); ?>

 <body <?php body_class('demo-1'); ?> >
 	<div id="container" class="container intro-effect-push">
 		<!-- Top Navigation -->
 		<header class="header">
 			<div class="bg-img">
 				<?php the_post_thumbnail( 'full', array( 'class' => 'image_fade') ); ?>
 			</div>
 			<div class="title">
 				<?php get_template_part( 'template-parts/header', 'menu' ); ?>
 				<h1><?php the_title(); ?></h1>
 			</div>
 		</header>
 		<button class="trigger" data-info="Click to see the header effect"><span>Trigger</span></button>

 			<div class="title">
 				<?php get_template_part( 'template-parts/header', 'menu' ); ?>
 				<h1><?php the_title(); ?></h1>
 				<p>
					<?php _e('by', 'effects'); ?><strong><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></strong>
					<?php _e('&#8212; Posted in', 'effects'); ?> <strong><?php the_category( ' ' ); ?></strong>
					<?php _e('&#8212; Date', 'effects'); ?> <strong><?php echo get_the_date(); ?></strong>
				</p>
 			</div>

 			<article class="content">
 				<div class="container">
 					<div class="<?php if(sidebar_get_meta( 'sidebar_active_sidebar' )): ?>col-md-8<?php else: ?>col-md-12<?php endif; ?>">

 						<?php while ( have_posts() ) : the_post(); ?>
 							<?php the_content(); ?>
							<?php
							wp_link_pages(array(
								'before'           => '<p class="link_pages">' . __( 'Pages:', 'effects' ),
								'after'            => '</p>',
								'link_before'      => '',
								'link_after'       => '',
								'next_or_number'   => 'number',
								'separator'        => ' ',
								'nextpagelink'     => __( 'Next page', 'effects'),
								'previouspagelink' => __( 'Previous page', 'effects' ),
								'pagelink'         => '%',
								'echo'             => 1
							)
						);
						?>

						<div class="tags clearfix">
							<?php the_tags( $before = null, $sep = ', ', $after = '' ) ?>
						</div>

						<div class="nav-previous alignleft"><?php next_posts_link(); ?></div>
					  <div class="nav-next alignright"><?php previous_posts_link(); ?></div>

						<?php
						#if ( comments_open( || get_comments_number()) ):
							comments_template( $file = '/comments.php', $separate_comments = false );
						#endif;
						?>

 						<?php endwhile; ?>

 					</div>


 					<?php
 					if(sidebar_get_meta( 'sidebar_active_sidebar' )):
 						get_sidebar();
 					endif;
 					?>

 				</div>
 			</article>
 <?php get_footer(); ?>
