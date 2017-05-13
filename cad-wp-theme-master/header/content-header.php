<?php 
/**
 * Content for displaying Header 
 * 
 * @package WELD-wp-theme 
 * @author marlontamo 
 */ 
//my var//
 $options = get_option ( 'plugin_options' ) ;   
     $options = get_option ( 'plugin_options' ) ; 
     $logourl = $options['client_logo'];
      $geader_circle_img = $options['client_header_circle_image']; 
      $toptext = $options['client_header_center_text_top']; 
      $belowtext = $options['client_header_center_text_below']; 
      $servicetext = $options['client_service_text'];
      $phone =$options['client_phone'];
      $quebec = $options['client_quebec'];
      $apchahead = $options['client_apcha_head_logo']; 
     
?>
<!-- removed ->navbar-static-top from nav tag &  data-spy="affix"-->
<header  class="text-center">
    <nav class="navbar navbar-default " role="navigation"  data-offset-top="200">
  <!-- /**
/settings Header types
header_4-col= 4 columns
header_3-col=3 colums
header_2-col= 2columns
header_1-col= full width
*/   -->      
        <!-- if you want nav placed below of header  uncomment php code below and select your choice of header columns -->
                 <!-- <?php #get_template_part( 'header/content', 'header_1-col' ); ?>  -->                
     
        <div class="container-fluid" id="head-container">

           <div class="container">
            <div class="navbar-header" >
              
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--Burger icon-->

                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php bloginfo('name'); ?>">
                    <?php if ( get_header_image() != '' ) { ?>
                    <img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
                    <?php } else { ?>
                    <?php bloginfo( 'name' ); ?>
                    <?php } ?>
                </a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse" >
               <!-- search bar -->
                <form class="navbar-form navbar-left" action="<?php echo home_url( '/' ); ?>" id="searchform" method="get" role="search">
 
                    <div class="form-group">
                 
                        <input class="form-control" type="text" id="s" name="s" value="" />
                    </div>
                    
                    <input class="btn btn-default" type="submit" value="Search" id="searchsubmit" />
                 
                </form><!--search bar-->
                
                <?php 

                $defaults = array( 
                	'theme_location'=> 'header-navigation', 
                	'menu' => 'header-navigation', 
                	'container' => false, 
                	'container_class' => '', 
                	'container_id' => '', 
                	'menu_class' => 'nav navbar-nav navbar-right', 
                	'menu_id' => '', 
                	'echo' => true, 
                	'before' => '', 
                	'after' => '', 
                	'link_before' => '', 
                	'link_after' => '', 
                	'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
                	'depth' => 2, 
                	'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 
                	'walker' => new wp_bootstrap_navwalker()
                	); 
                	wp_nav_menu( $defaults ); 
                ?>

            </div> <!-- navbar-collapse -->
<!-- if you want nav on top of header put uncomment php code below and select your choice of header columns -->
                 <!-- <?php #get_template_part( 'header/content', 'header_1-col' ); ?>  -->  
          </div>   <!-- container -->
         
             
                  
              </div>    
          </div><!--container -->
            
          </dv> 

        </div>
           
    </nav>

</header>

 