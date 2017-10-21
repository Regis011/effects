<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package np011
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
    <section>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
        the_title();
				?>

			<?php endwhile; ?>

		<?php endif; ?>

    </section>
	</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
