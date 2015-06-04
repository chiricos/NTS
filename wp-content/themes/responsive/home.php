<?php



// Exit if accessed directly

if ( !defined( 'ABSPATH' ) ) {

	exit;

}



/**

 * Blog Template

 *

 * @file           home.php

 * @package        Responsive

 * @author         Emil Uzelac

 * @copyright      2003 - 2014 CyberChimps

 * @license        license.txt

 * @version        Release: 1.1.0

 * @filesource     wp-content/themes/responsive/home.php

 * @link           http://codex.wordpress.org/Templates

 * @since          available since Release 1.0

 */



get_header();



global $more;

$more = 0;

?>
<div id="slider-home">
	<?php wowslider(6); ?>
	<?php if ( has_nav_menu( 'sub-header-menu', 'responsive' ) ) {
		wp_nav_menu( array(
			'container'      => 'div',
			'menu_class'     => 'container sub-header-menu',
			'theme_location' => 'sub-header-menu'
		) );
	} ?>
</div>
<div class="overlay-container2">
	<div class="window-container2 zoomin">
		<span class="close">x</span>
		<img src="http://www.nts.com.co/wp-content/themes/responsive/core/images/noticia1.jpg">
	</div>
</div>
<div class="overlay-container3">
	<div class="window-container3 zoomin">
		<span class="close">x</span>
		<img src="http://www.nts.com.co/wp-content/themes/responsive/core/images/noticia2.jpg">
	</div>
</div>
		
<div id="content_home">
	<div id="btns_sgda_linea">
		<div id="linea_atencion">
			<span>LÍINEA DE ATENCIÓN AL CLIENTE</span>
			<br>
			<span id="tel">01 8000 970 505</span>
		</div>
		<div id="cobertura">
			<span>COBERTURA</span><span>NTS</span><br>
			<select name="cobertura" ONCHANGE="location = this.options[this.selectedIndex].value;">  
				<option value="contactenos/ubicacion/" selected="selected">Buscar Ciudad</option>  
			    <option value="contactenos/ubicacion/">Bogotá</option>
			    <option value="contactenos/ubicacion/">Barranquilla</option>
			    <option value="contactenos/ubicacion/">Monteria</option>
			    <option value="contactenos/ubicacion/">Medellín</option>
			    <option value="contactenos/ubicacion/">Mosquera</option>
			    <option value="contactenos/ubicacion/">Ibagué</option>
			    <option value="contactenos/ubicacion/">Villavicencio</option>
			    <option value="contactenos/ubicacion/">Cali</option>
			    <option value="contactenos/ubicacion/">Cartagena</option>
			    <option value="contactenos/ubicacion/">Valledupar</option>
			    <option value="contactenos/ubicacion/">Cúcuta</option>
			    <option value="contactenos/ubicacion/">Bucaramanga</option>
			    <option value="contactenos/ubicacion/">Yopal</option>
			    <option value="contactenos/ubicacion/">Duitama</option>
			    <option value="contactenos/ubicacion/">Pasto</option>
			    <option value="contactenos/ubicacion/">Neiva</option>
		   </select>
		</div>			
	</div>

<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#content"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
	<?php responsive_wrapper_top(); // before wrapper content hook ?>
	<?php responsive_in_wrapper(); // wrapper hook ?>

	<div id="colophon-widget" class="grid col-940">
		<?php responsive_widgets(); // above widgets hook ?>
		<?php if ( is_active_sidebar( 'colophon-widget' ) ) : ?>
			<?php dynamic_sidebar( 'colophon-widget' ); ?>
		<?php endif; //end of colophon-widget ?>
		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #colophon-widget -->
	<?php get_footer(); ?>
