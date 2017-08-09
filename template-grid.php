<?php
/* Template Name: Template Grid */

get_header(); ?>

<body <?php body_class('demo-6'); ?> >
  <div id="container" class="container intro-effect-grid">
    <!-- Top Navigation -->
    <header class="header">
      <ul class="grid">
        <li><h2>Lonely Rider</h2></li>
        <li><h2>Daisy, do you remember?</h2></li>
        <li><h2>How long do we have to wait</h2></li>
        <li><h2>Little children</h2></li>
        <li><h2>I will meet my creators</h2></li>
        <li><h2>About happiness</h2></li>
      </ul>
      <div class="bg-img">
        <?php the_post_thumbnail( 'full', array( 'class' => 'image_fade') ); ?>
      </div>
    </header>
    <button class="trigger" data-info="Click to see the header effect"><span>Trigger</span></button>

			<article class="content">
        <div class="title">
          <?php get_template_part( 'template-parts/header', 'menu' ); ?>
          <h1><?php the_title(); ?></h1>
          <p class="subline">Inspiration for Article Intro Effects</p>
        </div>
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
