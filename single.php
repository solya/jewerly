<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jewerly
 */

get_header();
?>

	<main id="primary" class="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' ); ?>
            <hr>

		<?php	the_post_navigation(
				array(
					'prev_text' => '<span class="nav-icon"><i class="arrow arrow-sm left"></i></span><span class="nav-subtitle">' . esc_html__( 'Preview Post:', 'jewerly' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-icon"><i class="arrow arrow-sm right"></i></span><span class="nav-subtitle">' . esc_html__( 'Next Post:', 'jewerly' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
get_footer();
   