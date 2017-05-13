<?php 
 $options = get_option ( 'plugin_options' );
      $row1 = $options['client_row1_body_color']; 
      $row2 = $options['client_row2_body_color'];
      $row3 = $options['client_row3_body_color']; 
      $body_background_img =$options['client_body_background_image'];
      $form_btn = $options['client_color_form_button'];  
/**
 * The header for theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-wrap">
 *
 * @package TAMO-wp-theme
 * @author marlontamo
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php
        if ( function_exists( 'is_tag' ) && is_tag() ) {
            single_tag_title( "Tag Archive for &quot;" ); echo '&quot; | '; }
        elseif ( is_archive() ) {
            wp_title(); echo ' Archive | '; }
        elseif ( is_search() ) {
            echo 'Search for &quot;'. $s .'&quot; | '; }
        elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
            wp_title(); echo ' | '; }
        elseif ( is_404() ) {
            echo 'Not Found | '; }
        if ( is_home() ) {
            bloginfo( 'name' ); echo ' | '; bloginfo( 'description' ); }
        else {
            bloginfo( 'name' ); }
        if ($paged>1) {
            echo ' | page '. $paged; }
        ?>
    </title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script>window.html5 || document.write('<script src="<?php echo get_template_directory(); ?>/js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->

    <style>
      body{/*change background*/
     position: relative;
      background-image: url('<?php echo $body_background_img; ?>');
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      background-repeat: no-repeat;
}.circle-img{
      
       position: relative;
       top: 8px;
    /*top: -13px;
    left: 136px;
    padding: 20px;*/
}
#s{
    height: 35px!important;
}
.img-center{
    width: 334px;
    position: absolute;
    left: 1em;
}
.fa-star{
    color: #000;
}
.hide{
    display: none;
}
.form{
    margin:18px;
}
.tel-back-v2  {
        background:<?php echo $form_btn; ?>;
    border-bottom-left-radius: 26px;
    color: #fff;
        width: 15em !important;
    position: absolute;
   
}.logo-head{
        margin: 0 auto;
}

.logo-back{
        background: <?php echo $form_btn; ?>;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    border: 2px solid #333;
}
.holder{
   background-color: #ee5d3f;
    width: 42%!important;
    height: 102px;
    position: relative !important;
    padding: 14px;
    left: -1em;
    top: 13px;
}
.section2 .bg-grey  > div:first-child{
    background-color: transparent;
    border: 5px solid #EE5D3F;
    padding: 25.2px 0px !important;
    border-radius: 20px 0px 0px 20px;
    margin-top: 14px;
}
/*.span1-white{
          background: #ee5d3f;
    margin-top: 14px;
    position: absolute;
    left: -1em;
    padding: 10px;
}*/
.transparent-circle-bodi {
    background-color: rgba(204, 0, 102, 0);
    border: 5px solid <?php echo $row3; ?>;
    height:150px;
    width:150px;
    -webkit-border-radius:75px;
    -moz-border-radius:75px;
        position: relative;
    left: 2em;
}
.transparent-circle-header {
    background-color: rgba(204, 0, 102, 0);
    border: 5px solid <?php echo $row3; ?>;
    height:150px;
    width:150px;
    -webkit-border-radius:75px;
    -moz-border-radius:75px;
        position: relative;
    left: 2em;

    }.head-tel-v2{
    color:#fff!important;
}
.img-woman{
    position: absolute;
    top: 8em;
    height: 585px !important;
}
.sittingman{
    position: relative;
    top: 8em;
    z-index: -1;
    left: 6em;
}
.cover-input-big{
    background: <?php echo $form_btn; ?> !important;
    border-radius: 24px !important;
    border: 5px solid  <?php echo $form_btn; ?> !important ;
    z-index: 11 !important;
    position: relative !important;
    left: 17px !important;
}
.desc{
        position: absolute;
        left: 13em;
        z-index: 12;
         }
.que{
    width:8em;
}
.apacha{
    width: 6em;
}
.dm{
    width:4em;
}
.doc{
    width:8em;
}
.rbq{
    font-family: oswald;
    color: #fff;
}
.foot-number{
    font-family: oswald;
    color: #000;
        font-size: 12pt;
}
 #head-container{
    height: 5px !important;
   border: 3px solid #ccc;
     }
     .foot-box{
            border-right: 1px solid #fff;
     }
     .foot-strong-phone{
        font-size: 16pt;
    font-family: oswald;
        color:#fff;
     }
     .phone-footer{
        font-size: 16pt;
    font-family: oswald;
     }
      #rappel-button{
            background-color:<?php echo $form_btn; ?> !important;
            color: #fff !important;
            border: 0px;
            border-top-right-radius: 0px;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            width: 100%;
            padding: 1em;
            margin-top: 1em;
            color: #000;
            font-size: 12pt;
            font-weight: 800;
}
       #colophon{
          background: <?php echo $row3; ?>;
          padding: 1em;
        }
         .black-row{
                padding: 27px;
                font-size: 19pt;
                font-weight: 800;
                    font-family: oswald bold;
            }
            
        .blue{
            padding: 27px;
                font-size: 19pt;
                font-weight: 800;
                    font-family: oswald light;
        }
        .TRAVAIL{
             font-family: oswald regular;
        }
        .red-head{
           color: #EE5D3F; 
            font-size: 17pt;
            font-weight: 700;
             padding: 8px;
            font-family: oswald bold;
            }
        .black-head{
            color: #000;
                font-size:20pt;
                font-weight: 700;
                padding: 8px;
                font-family: oswald light;
                letter-spacing: 2px;
        }
        .tel{
                color: #428bca;
    text-decoration: none;
    font-size: 19pt;
    font-family: oswald bold;
    font-weight: 800;
   
    color:#333;
        }
        .service{
          font-size: 17pt;
    font-family: oswald light;
    font-weight: 800;  
        }
        html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
.entry{
    min-height: 21em;
}.page-header{
    border-bottom: none!important;
}
.arrow-v2{
    position: relative;
    left: -3em;
    top: 11em;
    width: 100px;

}
    </style>
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?> >

    <!--[if lt IE 7]>

<div class="container">
<div class="row form-parent">
    <div class=" form-child">[text text-481 class:col-md-12 class:col-xs-12 placeholder akismet:author "nom"]</div>
    <div class=" form-child">[text text-481 class:col-md-12 class:col-xs-12 placeholder akismet:author "Prenom"]</div>
 
</div>
<div class=" row">
<div class="col-md-12 col-xs-12">[tel tel-477 placeholder "Telepon"]</div>
<div class="col-md-12 col-xs-12">[text text-134 id:courriel placeholder "courriel"]</div>
<div class="col-md-12 col-xs-12">[submit id:button-rappel "RAPPEL IMMIDIAT"]</div>
</div></div>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
      
   
    <div id="page-wrap"> <!-- #page-wrap-->
    
        <a href="javascript:void(0);" class="back-to-top" data-toggle="tooltip" data-placement="left"  title="Back to Top">
            <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
        </a>
<!-- /**
/settings Header types
header_4-col= 4 columns
header_3-col=3 colums
header_2-col= 2columns
header_1-col= full width
*/   -->      
        <?php get_template_part( 'header/content', 'header' ); ?>

        <div id="content-wrap">


