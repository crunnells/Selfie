<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package No Filter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'no-filter' ); ?></h1>
				</header>
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'no-filter' ); ?></p>

					<?php get_search_form(); ?>
				</div>

				<?php
						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( no_filter_categorized_blog() ) :
				?>
				<div class="widget widget_categories">
					<h2 class="widgettitle"><?php esc_html_e( 'Most Used Categories', 'no-filter' ); ?></h2>
					<ul>
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
					?>
					</ul>
				</div>
				<?php
					endif;

					the_widget( 'WP_Widget_Tag_Cloud' );
				?>
			</section>
		</main>
	</div>
<?php
get_sidebar();
get_footer();
