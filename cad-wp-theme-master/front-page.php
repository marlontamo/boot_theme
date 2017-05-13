<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WELD-wp-theme
 * @author marlontamo
 */


get_header(); ?>



	<div class="container-fluid" id="body-container">

		<?php get_template_part( 'content', 'banner' ); ?>

	</div>

	<div class="clearfix">&nbsp;</div>
	
	<div class="container">
      <?php if ( is_front_page() && is_home() ) {?>
		    <?php get_template_part( 'content', 'index' ); ?>
       <?php } else{ ?>
             <?php get_template_part( 'content', 'page' ); ?>
       <?php } ?>
	</div>

	<div class="clearfix">&nbsp;</div>

	<div class="container">

		<?php echo do_shortcode( '' );?>

	</div>



<?php get_footer(); ?>