<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

			<footer id="site-footer" class="header-footer-group">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-footer',
					)
				);
				?>
			<!--	<a href="http://localhost/planty/mentions-legales/">Mentions Légales</a>-->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
