<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Selfie
 */

?>

	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php selfie_social_menu(); ?>

		<?php get_template_part( 'components/footer/site', 'info' ); ?>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
