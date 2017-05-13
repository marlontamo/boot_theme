<?php
/**
 * The template for displaying all single posts.
 *
 * @package WELD-wp-theme
 * @author marlontamo
 */

get_header(); ?>

    <div class="container-fluid" id="body-container">
      <?php  if(get_option ('plugin_options') ["client_set"] == "1")
        {
        echo "breadcrumb turnedoff";
        } 
      else{
        breadcrumb();
        } ?>

    </div>

	<?php while (have_posts()) : the_post(); ?>
        
        <div class="container">
            
            <div class="row">
                
                <?php 
                    switch ( get_post_meta( $post->ID, 'sidebar_meta', true )  ) {
                        case 'left_sidebar': 
                            $col = 'col-sm-9';
                            ?>
                            <div class="col-sm-3">
                                <?php get_sidebar(); ?>
                            </div>
                            <?php
                            break;

                        case 'right_sidebar': 
                            $col = 'col-sm-9 col-sm-pull-3';
                            ?>
                            <div class="col-sm-3 col-sm-push-9">
                                <?php get_sidebar(); ?>
                            </div>
                            <?php
                            break;
                        
                        default:
                            $col = 'col-sm-12';
                            break;
                    }

                ?>

                <main id="main" class="site-main <?php echo $col; ?> " role="main">

                    <?php get_template_part( 'content', 'single' ); ?>

                    <div class="clearfix">&nbsp;</div>

                    <div id="comment-wrap">
                        
                        <?php comments_template(); ?> 

                    </div>

                </main> <!-- #main -->

            </div>

        </div>

    <?php endwhile; ?>


<div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>