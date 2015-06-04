<?php



// Exit if accessed directly

if ( !defined( 'ABSPATH' ) ) {

	exit;

}



/**

 * Footer Template

 *

 *

 * @file           footer.php

 * @package        Responsive

 * @author         Emil Uzelac

 * @copyright      2003 - 2014 CyberChimps

 * @license        license.txt

 * @version        Release: 1.2

 * @filesource     wp-content/themes/responsive/footer.php

 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29

 * @since          available since Release 1.0

 */



/*

 * Globalize Theme options

 */

global $responsive_options;

$responsive_options = responsive_get_options();

?>

<?php responsive_wrapper_bottom(); // after wrapper content hook ?>

</div><!-- end of #wrapper -->

<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<div id="iconos_home">
	<div class="container">
		<div id="new_hol"></div>
		<div id="cat"></div>
		<div id="napa"></div>
		<div id="sem"></div>
	</div>
</div>

</div><!-- end of #content-home -->

<?php responsive_container_end(); // after container hook ?>


<div id="footer_top">
	<div class="container">
		<div><?php get_sidebar( 'footer' ); ?><a href="#">MAPA DEL SITIO</a></div>
	</div>
</div>

<div id="footer" class="clearfix">


	<?php responsive_footer_top(); ?>



	<div id="footer-wrapper">


		<!--
		<div class="grid col-940">



			<div class="grid col-540">

				<?php if ( has_nav_menu( 'footer-menu', 'responsive' ) ) {

					wp_nav_menu( array(

						'container'      => '',

						'fallback_cb'    => false,

						'menu_class'     => 'footer-menu',

						'theme_location' => 'footer-menu'

					) );

				} ?>

			</div><!-- end of col-540 -->


			<!-- 
			<div class="grid col-380 fit">

				<?php echo responsive_get_social_icons() ?>

			</div><!-- end of col-380 fit



		</div> end of col-940 -->


		<div class="grid col-940 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>


		<div class="grid col-940 copyright">

			<?php esc_attr_e( '&copy;', 'responsive' ); ?> Copyright <?php echo date( 'Y' ); ?> - Todos los derechos reservados <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

				<?php bloginfo( 'name' ); ?>

			</a><br>
			<span>Diseñado por Zebra Studio S.A.S.</span>

		</div><!-- end of .copyright -->


	</div><!-- end #footer-wrapper -->



	<?php responsive_footer_bottom(); ?>

</div><!-- end #footer -->

<?php responsive_footer_after(); ?>



<?php wp_footer(); ?>

</body>

</html>