<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Search Template
 *
 *
 * @file           search.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/search.php
 * @link           http://codex.wordpress.org/Theme_Development#Search_Results_.28search.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>


<div id="slider-quienes-somos">
	<div id="banner_contacto">
		<img src=" <?php bloginfo('template_url'); ?>/core/images/contacto_banner.png">
	</div>
</div>
<div id="content">
	<div id="container" class="hfeed">
		<h1 class="entry-title post-title">Resultados de Busqueda</h1>
		<div id="content-search">
			<?php if ( have_posts() ) : ?>

				<?php get_template_part( 'loop-header', get_post_type() ); ?>

				<?php while( have_posts() ) : the_post(); ?>

					<?php responsive_entry_before(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php responsive_entry_top(); ?>

						<?php get_template_part( 'post-meta', get_post_type() ); ?>

						<div class="post-entry">
							<?php the_excerpt(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
						</div>
						<!-- end of .post-entry -->

						<?php get_template_part( 'post-data', get_post_type() ); ?>

						<?php responsive_entry_bottom(); ?>
					</div><!-- end of #post-<?php the_ID(); ?> -->
					<?php responsive_entry_after(); ?>

				<?php
				endwhile;

				get_template_part( 'loop-nav', get_post_type() );

			else :

				get_template_part( 'loop-no-posts', get_post_type() );

			endif;
			?>

		</div><!-- end of #content-search -->
</div>
<?php get_footer(); ?>
