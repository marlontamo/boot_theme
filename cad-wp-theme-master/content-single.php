<?php
/**
 * Content for displaying Single
 *
 * @package WELD-wp-theme
 * @author marlontamo
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <div class="page-header" id="body-container">

        <?php the_title( '<h1>', '</h1>' ); ?>
    
    </div>
    
    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
    
    <?php if ( has_post_thumbnail() )  the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) ); ?> 
    
    <div class="entry">
        
        <?php the_content(); ?>
    
    </div>
        
    
</article>
