<?php
/* Template Name: Template Side */

get_header(); ?>

<body <?php body_class('demo-4'); ?> >
  <div id="container" class="container intro-effect-side">
    <!-- Top Navigation -->
    <header class="header">
      <div class="bg-img">
        <?php the_post_thumbnail( 'full', array( 'class' => 'image_fade') ); ?>
      </div>
      <div class="title">
        <?php get_template_part( 'template-parts/header', 'menu' ); ?>
        <h1><?php the_title(); ?></h1>
        <p class="subline">Inspiration for Article Intro Effects</p>
      </div>
    </header>
    <button class="trigger" data-info="Click to see the header effect"><span>Trigger</span></button>

			<article class="content">
				<div class="container">
					<div class="<?php if(sidebar_get_meta( 'sidebar_active_sidebar' )): ?>col-md-8<?php else: ?>col-md-12<?php endif; ?>">

            <?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
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
