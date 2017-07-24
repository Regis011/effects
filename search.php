<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

  <header class="page-header">
    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
  </header><!-- .page-header -->

  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();

  the_content();

  endwhile;

  // Previous/next page navigation.
  the_posts_pagination( array(
    'prev_text'          => __( 'Previous page', 'twentysixteen' ),
    'next_text'          => __( 'Next page', 'twentysixteen' ),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
  ) );

endif;

get_sidebar(); ?>
<?php get_footer(); ?>
