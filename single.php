<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package No Filter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'components/post/content', get_post_format() );

			the_post_navigation( array(
				'prev_text'				=> '<span class="post-nav">' . esc_html_x( 'Previous Post:', 'previous post', 'no-filter' ) . '</span> <span class="post-title">%title</span>',
				'next_text'				=> '<span class="post-nav">' . esc_html_x( 'Next Post:', 'next post', 'no-filter' ) . '</span> <span class="post-title">%title</span>',
	            'screen_reader_text'	=> esc_html__( 'Post Navigation', 'no-filter' ),
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main>
	</div>
<?php
get_sidebar();
get_footer();
