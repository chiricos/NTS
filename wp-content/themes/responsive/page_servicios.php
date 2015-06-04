<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  Paginas Servicios
 *
 * @file           page_servicios.php
 * @package        Responsive
 * @author         Johann Garzon
 * @copyright      2014 - ZebraStudio
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page_servicios.php
 */

get_header(); 

?>

<div id="slider-quienes-somos">
	<div id="menu_top"></div>
	<?php 
		wp_nav_menu( array( 'theme_location' => 'menu_servicios' ) );
	?>
	<?php wowslider(9); ?>
</div>
<div id="content">
	<div id="container" class="hfeed">

		<?php if ( have_posts() ) : ?>

			<?php while( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-header', get_post_type() ); ?>

				<?php responsive_entry_before(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php responsive_entry_top(); ?>

					<?php get_template_part( 'post-meta', get_post_type() ); ?>

					<div class="post-entry entry_servicios">
						<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
					</div>
					<!-- end of .post-entry -->

					<?php get_template_part( 'post-data', get_post_type() ); ?>

					<?php responsive_entry_bottom(); ?>
				</div><!-- end of #post-<?php the_ID(); ?> -->
				<?php responsive_entry_after(); ?>

				<?php responsive_comments_before(); ?>
				<?php comments_template( '', true ); ?>
				<?php responsive_comments_after(); ?>

			<?php
			endwhile;

			get_template_part( 'loop-nav', get_post_type() );

		else :

			get_template_part( 'loop-no-posts', get_post_type() );

		endif;
		?>
		<a class="btn-back" href="javascript:history.back(1)">Volver</a>
	</div>
</div><!-- end of #content-full -->
<div id="pie_servicios">
	<div id="imagen_pie">
	</div>
	<div id="container" class="hfeed">
		<a href="<?php bloginfo('url'); ?>/contactenos/red-nacional/"><div id="btn_mapa"></div></a>
	</div>
	<div class="pie_internas">
		<p>
			En NTS, encuentra centros de servicio especializado en la ejecución de mantenimientos preventivos y de diagnóstico, para todas las marcas del 
			segmento de carga y pasajero, además de reparaciones bomper a bomper a marcas especificas de este segmento.		
		</p>
	</div>
	<div id="container" class="hfeed">
		<a href="http://www.nts.com.co/wp-content/themes/responsive/core/uploads/PROTECCION_DE_DATOS.pdf" target="blank"><div id="proteccion"></div></a>
	</div>
</div>
<?php get_footer(); ?>
