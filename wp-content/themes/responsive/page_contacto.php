<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  Paginas Contacto
 *
 * @file           page_contacto.php
 * @package        Responsive
 * @author         Johann Garzon
 * @copyright      2014 - ZebraStudio
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page_contacto.php
 */

get_header(); 

?>

<div id="slider-quienes-somos">
	<div id="banner_contacto">
		<img src=" <?php bloginfo('template_url'); ?>/core/images/contacto_banner.png">
	</div>
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
	</div>
</div><!-- end of #content-full -->
<div id="pie_contacto">
	<div id="imagen_pie">
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
