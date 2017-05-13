<?php
/**
 * Functions
 *
 * @package WELD-wp-theme
 * @author marlontamo
*/
 add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
function add_google_fonts() {

  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Slabo+27px', array(),1.0 );
  
}
add_theme_support( 'post-thumbnails' ); 

add_filter( 'jetpack_development_mode', '__return_true' );
if ( ! function_exists( '_WELD_theme_setup' ) ) : 

    function _WELD_theme_setup() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /**
         * Enables post thumbnail
         */
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'custom-header' );

        add_theme_support( 'woocommerce' );

        /*
         * Common Navigation Location
         */
        register_nav_menus( array(
            'header-navigation' => __( 'Header Navigation' ),
            'footer-navigation' => __( 'Footer Navigation' ),
            'sidebar-navigation' => __( 'Sidebar Navigation' )
        ));

        /*
         * Sidebar Widgets
         */
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    

    }
endif; 
add_action( 'after_setup_theme', '_WELD_theme_setup' );

add_filter( 'woocommerce_enqueue_styles', '__return_false' );


$defaults = array(
    'default-image'          => '',
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => false,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


/** 
 * Enqueue Scripts and Styles
 */
function enqueue_scripts_and_styles() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_register_style( 'WELD-wp-theme', get_template_directory_uri() . '/css/styles.min.css', null, 1.0, 'screen' );
    wp_enqueue_style( 'WELD-wp-theme' );
    
    wp_register_script( 'vendor', get_template_directory_uri() . '/js/plugins.min.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'vendor' );

    wp_register_script( 'WELD-wp-theme', get_template_directory_uri() . '/js/scripts.min.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'WELD-wp-theme' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

/**
 * Adds Admin menu Page for custom post banner and function to display on template, bootstrap compatible
 */
require get_template_directory() . '/functions/banner.php';

/**
 * Adds Admin menu Page for Client Contact Details and Social Network Links
 */
require get_template_directory() . '/functions/client-data.php';

/**
 * Bootstrap Extra Navigation Functions
 */
require get_template_directory() . '/functions/bootstrap-functions.php';


require get_template_directory() . '/functions/social-list.php';

/**
 * Bootstrap Nav Walker
 */
require get_template_directory() . '/functions/wp_bootstrap_navwalker.php';

/**
 * Required Plugins
 */
require get_template_directory() . '/functions/plugin.php';

/**
 * Meta for Sidebar
 */
require get_template_directory() . '/functions/sidebar.php';

/*===========================================================================================================================================================*/
function post_now(){
        $arr = get_projects();
 foreach ($arr as $key) {
    $desc = $key->post_content ;
        $title= $key->post_title;
        $link=$key->guid;
        $date= $key->post_date;
        $img =get_the_post_thumbnail_url( $key->ID, 'post-thumbnail' );
    echo post_project($desc, $title, $img, $link, $date);     
 
 }
 
 #@desc=post_content;
 #@link=guid;
 #@title=post_title;
    
    
     }
     
     add_shortcode('project', 'post_now');
function post_project($desc, $title, $img, $link, $date){
	return '<div class="col-lg-12 p-container" style="border: 1px solid #333; padding: 5px 5px;">
    
  <div class="col-md-12"><div class="col-md-2 img-container"><a href="'.$link.'"><img src="'.$img.'" class="img-responsive p-image" width="100" height="100"></div><div class="col-md-6"><h4>ProjectTitle:'.$title.'</a><span>Date:'.$date.'</span></h4></div><div class="col-md-8 desc">DESC:<p>
   '.$desc.'</p></div></div>';
}
function get_projects(){
$args = array(
  'posts_per_page'   => 5,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'projectlist',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'author_name'    => '',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);
$posts_array = get_posts( $args );

return $posts_array;
}
/*===================================================================================================================================*/

function form($atts){
 $form='<form method="get" action=""><input type="text" placeholder="first Name:"></br>familyName<input type="text" place holder="familyName"><input type="submit" value="submit"></form>';
return $form;
}
 add_shortcode('form_1', 'form');
/*=======================================================================================*/
register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',/*id for calling dynamic sidebar*/
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s col-md-3">',/*widget container*/
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

add_option( 'WELD-test2', 'marlonhgdh', '', 'yes' );
$data[] = get_option('WELD-test');
$new_array[]= array('name'=>'ryan',
                 'add'=>'lubao',
                 'email'=>'r@gmail.com'
                    );
if(!empty($data)){
//array_push($data);
update_option( 'WELD-test', $data );
}
$updated =  get_option('WELD-test');


function addform(){
  $html ='<form method="get"action="'.home_url().'">
         <input type="text"name="name">
          Address:<input type="text"name="Address">
           Email:<input type="text"name="email">
            <input type="submit"name="submit" value="submit">
            </form>';
            return $html;
}

