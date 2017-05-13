<?php $options = get_option ( 'plugin_options' );
      $dm = $options['client_dm_footer_logo']; 
       $apcha = $options['client_apcha_footer_logo']; 
       $doc = $options['client_docteur_footer_logo']; 
       $rbq_number = $options['client_rbq'];

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TAMO-wp-theme
 * @author marlontamo
 */
/**
footer types
footer_4-col= 4 columns
footer_3-col=3 colums
footer_2-col= 2columns
footer_1-col= full width
*/
?>

    
    </div> <!-- #content-wrap -->
    
    <?php get_template_part( 'footer/content', 'footer_1-col' ); ?>

    <div id="colophon" class="">
         
        <div class="container text-center">

            <div class="row">
                <div class="col-md-6 foot-box">
                    <STRONG class="phone-footer">ON FAIT CONNER VOTRE TELEPHONE</strong>
                   <span class="phone-mobile"><strong class="foot-strong-phone">1.855.514.2022</strong>
                   </span>
                </div>
                <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2"><img  class="img-respponsive dm " src="<?php echo $dm; ?>" alt=""></div>
                    <div class="col-md-4"><img class="img-respponsive doc " src="<?php echo $doc; ?>" alt=""></div>
                    <div class="col-md-3"><img class="img-respponsive apacha" src="<?php echo $apcha ?>" alt=""></div>
                    <div class="col-md-3"><div><b class="rbq">RBQ <br><span class="foot-number"><?php echo $rbq_number; ?></span></b></div></div>
                </div>
                    
                </div>
               <!--  <div class="col-sm-8">

                    <span>All Rights Reserved &copy;
                        <?php 
                        // echo date( "Y" ); 
                        // echo " | ";
                        // echo bloginfo( 'name' );
                        // echo " - ";
                        // echo bloginfo( 'description' ); 
                        // echo " | ";
                        ?>
                        <a href="<?php #bloginfo('rss2_url'); ?>" title="<?php #_e('Syndicate this site using RSS'); ?>">RSS</a>

                    </span>

                </div>

                <div class="col-sm-4 text-right">  
     
                    Website by: <a href="marlon.impresariocs.com" target="_blank"><b class="btn-xs btn-danger">KillAudio</b></a>
                    
                </div>
 -->
            </div>

        </div>

    </div>

</div>  <!-- /#page-wrap -->

<?php wp_footer(); ?>

</body>
<script type="text/javascript">
    jQuery(document).ready(function(){
        var option= "<?php echo get_option(plugin_options)['client_set_plus'];?>";
        if(option ==true){
            
            jQuery('.breadcrumb').hide();
        }

     
  });   
   
</script>
</html>