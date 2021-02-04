<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jewerly
 */

?>

	<footer class="footer">
		<div class="container">
			<div class="footer-inner">
				<div class="footer__logo">
                    <?php the_custom_logo(); ?>
                </div>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'bottom-menu',
                        'container'       => 'nav',
                        'container_class' => 'bottom-nav',
                        'menu_class'      => 'bottom-nav__list',
                    )
                );
                ?>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
