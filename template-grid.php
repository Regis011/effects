<?php
/* Template Name: Template Grid */

$link1 = get_post_meta( get_the_ID(), 'second_menu_link-1', true );
$link1_url = get_post_meta( get_the_ID(), 'second_menu_link-1-url', true );
$link1_media = get_post_meta( get_the_ID(), 'second_menu_link-1-media', true );
$link2 = get_post_meta( get_the_ID(), 'second_menu_link-2', true );
$link2_url = get_post_meta( get_the_ID(), 'second_menu_link-2-url', true );
$link2_media = get_post_meta( get_the_ID(), 'second_menu_link-2-media', true );
$link3 = get_post_meta( get_the_ID(), 'second_menu_link-3', true );
$link3_url = get_post_meta( get_the_ID(), 'second_menu_link-3-url', true );
$link3_media = get_post_meta( get_the_ID(), 'second_menu_link-3-media', true );
$link4 = get_post_meta( get_the_ID(), 'second_menu_link-4', true );
$link4_url = get_post_meta( get_the_ID(), 'second_menu_link-4-url', true );
$link4_media = get_post_meta( get_the_ID(), 'second_menu_link-4-media', true );
$link5 = get_post_meta( get_the_ID(), 'second_menu_link-5', true );
$link5_url = get_post_meta( get_the_ID(), 'second_menu_link-5-url', true );
$link5_media = get_post_meta( get_the_ID(), 'second_menu_link-5-media', true );
$link6 = get_post_meta( get_the_ID(), 'second_menu_link-6', true );
$link6_url = get_post_meta( get_the_ID(), 'second_menu_link-6-url', true );
$link6_media = get_post_meta( get_the_ID(), 'second_menu_link-6-media', true );

get_header();

?>
<body <?php body_class('demo-6'); ?> >
  <div id="container" class="container intro-effect-grid">
    <!-- Top Navigation -->
    <header class="header">
      <ul class="grid">
        <?php if ( ! empty( $link1 ) ) : ?>
            <li style="background-image: url(<?php echo $link1_media; ?>); color: white; "><h2><a class="list_a" href="<?php echo $link1_url; ?>" target="_self"><?php echo $link1; ?></a></h2></li>
        <?php endif; ?>
        <?php if ( ! empty( $link2 ) ) : ?>
            <li style="background-image: url(<?php echo $link2_media; ?>); color: white; "><h2><a class="list_a" href="<?php echo $link2_url; ?>" target="_self"><?php echo $link1; ?></a></h2></li>
        <?php endif; ?>
        <?php if ( ! empty( $link3 ) ) : ?>
            <li style="background-image: url(<?php echo $link3_media; ?>); color: white; "><h2><a class="list_a" href="<?php echo $link3_url; ?>" target="_self"><?php echo $link1; ?></a></h2></li>
        <?php endif; ?>
        <?php if ( ! empty( $link4 ) ) : ?>
            <li style="background-image: url(<?php echo $link4_media; ?>); color: white; "><h2><a class="list_a" href="<?php echo $link4_url; ?>" target="_self"><?php echo $link1; ?></a></h2></li>
        <?php endif; ?>
        <?php if ( ! empty( $link5 ) ) : ?>
            <li style="background-image: url(<?php echo $link5_media; ?>); color: white; "><h2><a class="list_a" href="<?php echo $link5_url; ?>" target="_self"><?php echo $link1; ?></a></h2></li>
        <?php endif; ?>
        <?php if ( ! empty( $link6 ) ) : ?>
            <li style="background-image: url(<?php echo $link6_media; ?>); color: white; "><h2><a class="list_a" href="<?php echo $link6_url; ?>" target="_self"><?php echo $link1; ?></a></h2></li>
        <?php endif; ?>
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
