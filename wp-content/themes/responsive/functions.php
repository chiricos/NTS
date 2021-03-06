<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */

$template_directory = get_template_directory();

require( $template_directory . '/core/includes/functions.php' );
require( $template_directory . '/core/includes/functions-update.php' );
require( $template_directory . '/core/includes/functions-sidebar.php' );
require( $template_directory . '/core/includes/functions-install.php' );
require( $template_directory . '/core/includes/functions-admin.php' );
require( $template_directory . '/core/includes/functions-extras.php' );
require( $template_directory . '/core/includes/functions-extentions.php' );
require( $template_directory . '/core/includes/theme-options/theme-options.php' );
require( $template_directory . '/core/includes/post-custom-meta.php' );
require( $template_directory . '/core/includes/tha-theme-hooks.php' );
require( $template_directory . '/core/includes/hooks.php' );
require( $template_directory . '/core/includes/version.php' );
require( $template_directory . '/core/includes/upsell/theme-upsell.php' );

// Return value of the supplied responsive free theme option.
function responsive_free_get_option( $option, $default = false ) {
	global $responsive_options;

	// If the option is set then return it's value, otherwise return false.
	if ( isset( $responsive_options[$option] ) ) {
		return $responsive_options[$option];
	}

	return $default;
}
function incrustar_js(){
    // nos aseguramos que no estamos en el area de administracion
    if( !is_admin() ){

        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuentre la funcion wp_footer
        wp_register_script('slide_equipos', get_bloginfo('template_directory'). 'core/js/slide_equipos.js', array('jquery'), '1', true );
        wp_enqueue_script('slide_equipos');
    }
}
add_action("wp_enqueue_scripts", "incrustar_js", 11);
register_nav_menu( 'menu_quienes_somos', __( 'Menu Quienes Somos', 'responsive' )  ); 
register_nav_menu( 'menu_servicios', __( 'Menu Servicios', 'responsive' )  ); 
register_nav_menu( 'menu_repuestos', __( 'Menu Repuestos', 'responsive' )  ); 





