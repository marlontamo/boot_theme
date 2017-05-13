<?php $options = get_option ( 'plugin_options' );
      $form = $options['client_form']; 
      $leftimg = $options['client_left_image']; 
      $arrow =  $options['client_arrow_image']; 
      $circle =  $options['client_circle_image']; 
       $renovation =  $options['client_renovation_text']; 
       $renovation_below =  $options['client_renovation_text_below']; 
       $biginput =$options['client_big_input_box_left'];
        $biginput_right_top =$options['client_big_input_box_right_top'];
         $biginput_right_under =$options['client_big_input_box_right_under'];
         $TRAVAIL= $options['client_travail_text'];
         $garanti = $options['client_garanti_text'];
          $row1 = $options['client_row1_body_color']; 
      $row2 = $options['client_row2_body_color'];
      $row3 = $options['client_row3_body_color'];  

/**    $biginput =$options['client_big_input_box_left']; 
 * Content for displaying Page
 *
 * @package WELD-wp-theme
 * @author marlontamo
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-header">
    
 
 	<?php?>
    

    <?php #the_title( '<h1>', '</h1>' ); ?>
    
    </div>

    <?php #if ( has_post_thumbnail() )  the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?> 
<div class="container">
	<div class="row">
	   <div class="container">
		<div class="head col-sm-12 text-center" style="background: <?php echo $row1; ?>;height: 100px;color:#fff;"><p class="black-row"><i class="fa fa-star" aria-hidden="true"></i><?php echo $renovation; ?><i class="fa fa-star" aria-hidden="true"></i></p></div>
		<div class="foot col-sm-12  text-center" style="background: <?php echo $row2; ?>;height: 70px;color:#fff"><P class="blue">
		<?php echo $renovation_below; ?></p></div>
		
		</div>
		<div class="container section2">
		    <div class="bg-grey row">
<div class="col-lg-6 col-md-6 col-xs-12 cover-input-big text-center"><span class="span1"><?php echo $biginput; ?></span></div>
<div class="col-lg-6 holder  offset-lg-6 offset-md-6 col-md-6 col-xs-12 col-sm-12 ">

<span class="span1-white"><?php echo $biginput_right_top; ?></br>
<?php echo $biginput_right_under; ?></span>
<div class="text-right sec2Logowrap"><a class=" col-md-8 col-xs-8 col-sm-8"><p class="transparent-circle-body"><img  class="  circle-img img-responsive" src="<?php echo $circle; ?>" /></p></a></div>
</div></div></div>
</div>
		</div>
		<div class="row">&nbsp</div>
		<div class="container">
			  <div class="col-md-6 col-sm-6 col-xs-12">
		<div class="col-md-6 col-xs-12">
		  <div class="desc hidden-xs">
		  <h2 class="TRAVAIL"style=" font-size: 4em; color: #00CC66; font-weight: 800;"><?php echo $TRAVAIL; ?></h2> 
		  <h2 class="TRAVAIL" style="font-size: 4em; color:black;font-weight: 800;"><?php echo $garanti; ?></h2>
		    </div>
		    
		      <img class="img-woman img-responsive" src="<?php echo $leftimg; ?>" alt="">
              <img class="sittingman" src="http://localhost/cheatshit/wp-content/uploads/2017/05/sittingman.png" alt="">
		      </div>
              
			</div>

			<div class="col-md-1 ">
			     <div class="arrow-v2 pull-left hidden-sm hidden-xs"><img  class="img-responsive arrow-v2"	src="<?php echo $arrow; ?>" alt=""></div>
			</div>
			 <div class="col-md-6 col-xs-12">
             
                <div class="row">
             	<div class="col-md-12 ">
             		<div class="form"><?php echo do_shortcode( $form );?></div>
             	</div>
             </div>
			 
		</div>
		
	</div>
	</div>
		 </div><!--container -->
		
</div>
    <div >

       
       

    </div>

</article>


