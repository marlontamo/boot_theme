<?php
/**
 * Template Name: Blog Page
 *
 * The template for displaying Blog list.
 *
 * @package WELD-wp-theme
 * @author marlontamo
 */

get_header();  the_post(); ?>


 <?php echo post_now();?>


         
        <div class="container-fluid" id="body-container">

            
            
            <div class="page-header">

                <?php the_title( '<h1>', '</h1>' ); ?>

            </div>

            <?php get_template_part( 'content', 'excerpt' ); ?>

        <div class="container">
        	<div class="row">
        	
        		<div class="ads">ads</div>
        	<div class="col-md-6 col-xs-12"><img src="http://localhost/cheatshit/wp-content/uploads/2017/03/cheska-garrietrans.png" alt="" width="200"	height="200"></div>
        	<div class="col-md-6"></div>
        </div>
        </div>
        </div><!--fluid -->



    <div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>






<!-- instructions: 








-->
