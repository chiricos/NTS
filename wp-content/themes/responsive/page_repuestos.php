<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  Paginas Repuestos
 *
 * @file           page_repuestos.php
 * @package        Responsive
 * @author         Johann Garzon
 * @copyright      2014 - ZebraStudio
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page_repuestos.php
 */

get_header(); 

?>
<div id="slider-quienes-somos">
	<div id="menu_top"></div>
	<div id="banner_repuestos">
		<img src=" <?php bloginfo('template_url'); ?>/core/images/repuestos_top.png">
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

					<div class="post-entry entry_repuestos">
						<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
						<div class="menu-menu-repuestos-container">
							<ul id="menu-menu-repuestos" class="menu">
								<li id="menu-item-92" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-92 active"><a>Repuestos</a></li>
								<li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-93"><a>Protección Personal</a></li>
								<li id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94"><a>Filtración</a></li>
								<li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95"><a>Sistemas Eléctricos</a></li>
								<li id="menu-item-96" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-96"><a>Aceites</a></li>
							</ul>
						</div>
						<div id="slider_repuestos">
							<div id="s_repuestos" class="items_rep mostrar">
								<div id="wrapper1">
									<div id="carousel1">
										<img src="<?php bloginfo('template_url'); ?>/core/images/repuestos/cat.png" alt="cat" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/repuestos/eaton.png" alt="eaton" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/repuestos/imal.png" alt="imal" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/repuestos/napa.png" alt="napa" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/repuestos/newholland.png" alt="newholland" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/repuestos/sem.png" alt="skf" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/repuestos/vw.png" alt="vw" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/repuestos/world.png" alt="world" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/repuestos/Repuestos-Multimarca.png" alt="Repuestos-Multimarca" width="210" height="130"/>
									</div>
								</div>
								<a id="prev1" href="#"></a>
								<a id="next1" href="#"></a>	
							</div>
							<div id="s_prtoteccion" class="items_rep no_mostrar">
								<div id="wrapper3">
									<img src="<?php bloginfo('template_url'); ?>/core/images/proteccion/kimberly.png" alt="kimberly" width="auto" />
									<img src="<?php bloginfo('template_url'); ?>/core/images/proteccion/panos.png" alt="panos" width="auto" />
									<img src="<?php bloginfo('template_url'); ?>/core/images/proteccion/Jackson.png" alt="Jackson" width="auto" />
								</div>
							</div>
							<div id="s_filtracion" class="items_rep no_mostrar">
								<div id="wrapper4">
									<img src="<?php bloginfo('template_url'); ?>/core/images/filtracion/cat.png" alt="Cat" width="auto"/>
									<img src="<?php bloginfo('template_url'); ?>/core/images/filtracion/napa.png" alt="donalson" width="auto"/>
									<img src="<?php bloginfo('template_url'); ?>/core/images/filtracion/donaldson.png" alt="napa" width="auto"/>
									<img src="<?php bloginfo('template_url'); ?>/core/images/filtracion/fleet.png" alt="vw" width="auto"/>
								</div>
							</div>
							<div id="s_arranques" class="items_rep no_mostrar">
								<div id="wrapper5">
									<!--<img src="<?php bloginfo('template_url'); ?>/core/images/arranques/delco.png" alt="delco" width="auto"/>-->
									<img src="<?php bloginfo('template_url'); ?>/core/images/arranques/napa.png" alt="napa" width="auto"/>
								</div>
							</div>
							<div id="s_aceites" class="items_rep">
								<div id="wrapper2">
									<div id="carousel2">
										<img src="<?php bloginfo('template_url'); ?>/core/images/aceites/cat.png" alt="Ambra" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/aceites/napa.png" alt="mobil" width="210" height="130"/>
										<img src="<?php bloginfo('template_url'); ?>/core/images/aceites/mobil.png" alt="napa" width="210" height="130"/>
										<!--<img src="<?php bloginfo('template_url'); ?>/core/images/aceites/petronas.png" alt="petronas" width="210" height="130"/>-->
										<img src="<?php bloginfo('template_url'); ?>/core/images/aceites/shell.png" alt="shell" width="210" height="130"/>
									</div>
								</div>
								<a id="prev2" href="#"></a>
								<a id="next2" href="#"></a>
							</div>
						</div>
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
<div id="pie_repuestos">
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
