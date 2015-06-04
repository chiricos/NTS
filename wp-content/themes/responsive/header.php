<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>
		<meta name="description" content="repuestos, lubricación, plantas eléctricas, tractores, cosechadoras, Caterpillar, cargadores sem, sem, napa"/>
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
		<?php wp_head(); ?>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/core/js/scripts.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/core/js/slide_equipos.js"></script>
		<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>	
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/core/js/jquery.carouFredSel-6.0.4-packed.js"></script>
		<script type="text/javascript"> 
			//Script slide equipso
		    $(function() {
				$('#carousel_equipos').carouFredSel({
					responsive: true,
					circular: false,
					auto: false,
					items: {
						visible: 1,
						width: 200,
						height: '340px'
					},
					scroll: {
						fx: 'directscroll'
					}
				});
			 
				$('#thumbs_equipos').carouFredSel({
					responsive: true,
					circular: false,
					infinite: false,
					auto: false,
					prev: '#prev_equipos',
					next: '#next_equipos',
					items: {
						visible: {
							min: 3,
							max: 3
						},
						width: 150,
						height: '66%'
					}
				});
			 
				$('#thumbs_equipos a').click(function() {
					$('#carousel_equipos').trigger('slideTo', '#' + this.href.split('#').pop() );
					$('#thumbs_equipos a').removeClass('selected');
					$(this).addClass('selected');
					return false;
				});
			 
			});

			$(function() {
				//	create carousel
				$('#carousel1').carouFredSel({
					responsive: true,
					items: {
						width: 100,
						height: '60%',
						visible: 4
					},
					auto: {
						items: 1
					},
					prev: '#prev1',
					next: '#next1'
				});

				//	re-position the carousel, vertically centered
				var $elems = $('#wrapper1, #prev1, #next1'),
					$image = $('#carousel1 img:first')

				$(window).bind( 'resize.example', function() {
					var height = $image.outerHeight( true );

					$elems
						.height( height )
						.css( 'marginTop', -( height/2 ) );

				}).trigger( 'resize.example' );
			});
			$(function() {
				//	create carousel
				$('#carousel2').carouFredSel({
					responsive: true,
					items: {
						width: 200,
						height: '60%',
						visible: 4
					},
					auto: {
						items: 1
					},
					prev: '#prev2',
					next: '#next2'
				});

				//	re-position the carousel, vertically centered
				var $elems = $('#wrapper2, #prev2, #next2'),
					$image = $('#carousel2 img:first')

				$(window).bind( 'resize.example', function() {
					var height = $image.outerHeight( true );

					$elems
						.height( height )
						.css( 'marginTop', -( height/2 ) );

				}).trigger( 'resize.example' );
			});

			$(document).ready(function(){
				$("#menu-item-92").click(function(){
					event.preventDefault();
					$('#menu-item-92').addClass("active"); //muestro mediante id
					$('#menu-item-93').removeClass("active");
					$('#menu-item-94').removeClass("active");
					$('#menu-item-95').removeClass("active");
					$('#menu-item-96').removeClass("active");
					$('.items_rep').addClass("no_mostrar"); //muestro mediante id
					$('#s_repuestos').removeClass("no_mostrar"); //muestro mediante id
					$('#s_repuestos').addClass("mostrar"); //muestro mediante id
				 });
				$("#menu-item-93").click(function(){
					event.preventDefault();
					$('#menu-item-93').addClass("active"); //muestro mediante id
					$('#menu-item-92').removeClass("active");
					$('#menu-item-94').removeClass("active");
					$('#menu-item-95').removeClass("active");
					$('#menu-item-96').removeClass("active");
					$('.items_rep').addClass("no_mostrar"); //muestro mediante id
					$('#s_prtoteccion').removeClass("no_mostrar"); //muestro mediante id
					$('#s_prtoteccion').addClass("mostrar"); //muestro mediante id
				});
				$("#menu-item-94").click(function(){
					event.preventDefault();
					$('#menu-item-94').addClass("active"); //muestro mediante id
					$('#menu-item-92').removeClass("active");
					$('#menu-item-93').removeClass("active");
					$('#menu-item-95').removeClass("active");
					$('#menu-item-96').removeClass("active");
					$('.items_rep').addClass("no_mostrar"); //muestro mediante id
					$('#s_filtracion').removeClass("no_mostrar"); //muestro mediante id
					$('#s_filtracion').addClass("mostrar"); //muestro mediante id
				});
				$("#menu-item-95").click(function(){
					event.preventDefault();
					$('#menu-item-95').addClass("active"); //muestro mediante id
					$('#menu-item-92').removeClass("active");
					$('#menu-item-93').removeClass("active");
					$('#menu-item-94').removeClass("active");
					$('#menu-item-96').removeClass("active");
					$('.items_rep').addClass("no_mostrar"); //muestro mediante id
					$('#s_arranques').removeClass("no_mostrar"); //muestro mediante id
					$('#s_arranques').addClass("mostrar"); //muestro mediante id
				});
				$("#menu-item-96").click(function(){
					event.preventDefault();
					$('#menu-item-96').addClass("active"); //muestro mediante id
					$('#menu-item-92').removeClass("active");
					$('#menu-item-93').removeClass("active");
					$('#menu-item-94').removeClass("active");
					$('#menu-item-95').removeClass("active");
					$('.items_rep').addClass("no_mostrar"); //muestro mediante id
					$('#s_aceites').removeClass("no_mostrar"); //muestro mediante id
					$('#s_aceites').addClass("mostrar"); //muestro mediante id
				});
			});
		</script>
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>


<header id="header">
	<div id="container">
		<?php responsive_header_top(); // before header content hook ?>

		<?php if ( has_nav_menu( 'top-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'fallback_cb'    => false,
				'menu_class'     => 'top-menu',
				'theme_location' => 'top-menu'
			) );
		} ?>
		<?php the_widget( 'WP_Widget_Search', $instance, $args ); ?> 
		<?php responsive_in_header(); // header hook ?>

		<?php if ( get_header_image() != '' ) : ?>

			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed ?>

		<?php if ( !get_header_image() ) : ?>

			<div id="logo">
				<span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed (again) ?>

		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'main-nav',
			'fallback_cb'     => 'responsive_fallback_menu',
			'theme_location'  => 'header-menu'
		) ); ?>

		<?php responsive_header_bottom(); // after header content hook ?>
	</div>
</header><!-- end of #header -->
