<?php
/**
 * Function for Client Data and Social Network Link
 *
 * @package WELD-wp-theme
 * @author marlontamo
 */

add_action (  'admin_menu', 'create_theme_options_page'  ) ;

function create_theme_options_page (  )  {  
	add_menu_page (  'Client Data', 'Client Data', 'edit_theme_options',  'theme_options',  'build_options_page', '', 2  ) ;
}

function build_options_page (  )  {?>  
	<div class="wrap">    
		<h2>Client Data Options/settings</h2>    
		<form method="post" action="options.php" enctype="multipart/form-data">  
			<?php settings_fields ( 'plugin_options' ) ; ?>  
			<?php do_settings_sections ( __FILE__ ) ; ?>  
			
			<p class="submit">    
				<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e ( 'Save Changes' ) ; ?>" />  
			</p>
		</form>
	</div>
<?php
}

add_action ( 'admin_init', 'register_and_build_fields' ) ;

function register_and_build_fields (  )  { 

	register_setting ( 'plugin_options', 'plugin_options', 'validate_setting' ) ;

	add_settings_section ( 'main_section', 'Client Data', 'section_cb', __FILE__ ) ;

	add_settings_field ( 'client_address', 'Address:', 'client_address_setting', __FILE__, 'main_section' ) ;

	

	add_settings_field ( 'client_email', 'Email:', 'client_email_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_about', 'About:', 'client_about_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_facebook', 'Facebook:', 'client_facebook_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_twitter', 'Twitter:', 'client_twitter_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_google_plus', 'Google Plus:', 'client_google_plus_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_linkedin', 'Linked In:', 'client_linkedin_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_set', 'breadcrumbs:', 'client_switch_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_logo', 'logo URL:', 'client_logo_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_form', 'formshortcode:', 'client_form_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_left_image', 'left_image_URL:', 'client_left_image_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_arrow_image', 'arrow_image_URL:', 'client_arrow_image_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_circle_image', 'circle_image_URL:', 'client_circle_image_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_header_circle_image', 'header_circle_image_URL:', 'client_circle_header_image_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_header_center_text_top', 'client_header_center_text_top', 'client_header_center_text_top_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_header_center_text_below', 'client_header_center_text_below', 'client_header_center_text_below_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_client_service_text', 'client_client_service_text', 'client_service_text_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_phone', 'Phone:', 'client_phone_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_renovation_text', 'client_renovation_text', 'client_renovation_text_setting', __FILE__, 'main_section' ) ;
	add_settings_field ( 'client_renovation_text_below', 'client_renovation_text_below', 'client_renovation_text_below_setting', __FILE__, 'main_section' ) ;
    add_settings_field ( 'client_big_input_box_left', 'client_big_input_box_left', 'client_big_input_box_left_setting', __FILE__, 'main_section' ) ;
    add_settings_field ( 'client_big_input_box_right_top', 'client_big_input_box_right_top', 'client_big_input_box_right_top_setting', __FILE__, 'main_section' ) ;
    add_settings_field ( 'client_big_input_box_right_under', 'client_big_input_box_right_under', 'client_big_input_box_right_under_setting', __FILE__, 'main_section' ) ;
    add_settings_field ( 'client_travail_text', 'client_travail_text:', 'client_travail_text_setting', __FILE__, 'main_section' ) ;
    add_settings_field ( 'client_garanti_text', 'client_garanti_text:', 'client_garanti_text_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_row1_body_color', 'client_row1_body_color_hexa:', 'client_row1_body_color_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_row2_body_color', 'client_row2_body_color_hexa:', 'client_row2_body_color_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_row3_body_color', 'client_row3_body_color_hexa:', 'client_row3_body_color_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_color_form_button', 'client_color_form_button_hexa:', 'client_color_form_button_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_body_background_image', 'client_body_background_image:', 'client_body_background_image_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_dm_footer_logo', 'client_dm_footer_logo:', 'client_dm_footer_logo_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_apcha_footer_logo', 'client_apcha_footer_logo:', 'client_apcha_footer_logo_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_docteur_footer_logo', 'client_docteur_footer_logo:', 'client_docteur_footer_logo_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_rbq', 'client_rbq_number:', 'client_rbq_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_quebec', 'client_quebec_Logo:', 'client_quebec_setting', __FILE__, 'main_section' ) ;
     add_settings_field ( 'client_apcha_head_logo', 'client_apcha_head_logo:', 'client_apcha_head_logo_setting', __FILE__, 'main_section' ) ;
}
function validate_setting ( $plugin_options )  {  
	return $plugin_options;
}

function section_cb (  )  {}

function client_address_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<input name='plugin_options[client_address]' class='regular-text' type='text' value='{$options['client_address']}' />";
}


function client_email_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<input name='plugin_options[client_email]' class='regular-text' type='text' value='{$options['client_email']}' />";
}

function client_about_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;
	echo "<textarea rows='5' class='large-text' id='plugin_options[client_about]' name='plugin_options[client_about]'>{$options['client_about']}</textarea>
	<p class='description'>In a few words, explain what your company is about.</p>
	";
}
function client_facebook_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>https://www.facebook.com/</code><input name='plugin_options[client_facebook]' class='regular-text' type='text' value='{$options['client_facebook']}' />";
}

function client_twitter_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>https://twitter.com/</code><input name='plugin_options[client_twitter]' class='regular-text' type='text' value='{$options['client_twitter']}' />";
}

function client_google_plus_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>https://www.google.com/+</code><input name='plugin_options[client_google_plus]' class='regular-text' type='text' value='{$options['client_google_plus']}' />";
}

function client_linkedin_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>http://www.linkedin.com/</code><input name='plugin_options[client_linkedin]' class='regular-text' type='text' value='{$options['client_linkedin']}' />";
}
function client_switch_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>turn-off breadcrumbs:</code><input name='plugin_options[client_set]' class='' type='checkbox' value='1' " . checked( 1, $options['client_set'], false ) . "/>";
   
}
 function client_logo_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>logo-URL</code><input name='plugin_options[client_logo]' class='regular-text' type='text' value='{$options['client_logo']}' />";
   
}
//form shortcode
function client_form_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>form_shortcode</code><input name='plugin_options[client_form]' class='regular-text' type='text' value='{$options['client_form']}' /><p class='description'>after creating form in contactform7 paste the shortcode here</p>";
   
}
// man on left
function client_left_image_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>left_image-URL</code><input name='plugin_options[client_left_image]' class='regular-text' type='text' value='{$options['client_left_image']}' /><p class='description'>upload the png image then get the url and paste it here... this will change the man image in the theme</p>";
   
}
//arrow to form
function client_arrow_image_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>arrow_image-URL</code><input name='plugin_options[client_arrow_image]' class='regular-text' type='text' value='{$options['client_arrow_image']}' />
	<p class='description'>upload the arrow image and copy the URL here</p>";
   
}
//circle body image
function client_circle_image_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>circle_image-URL</code><input name='plugin_options[client_circle_image]' class='regular-text' type='text' value='{$options['client_circle_image']}' />
	<p class='description'>this will change the cicle image on top of the form</p>";
   
}
//circle header image
function client_circle_header_image_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>header_circle_image-URL</code><input name='plugin_options[client_header_circle_image]' class='regular-text' type='text' value='{$options['client_header_circle_image']}' />
	<p class='description'>this wil change image on the header part the circle shape image </p>";
   
}
//center header text
function client_header_center_text_top_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_header_center_text_top</code><input name='plugin_options[client_header_center_text_top]' class='regular-text' type='text' value='{$options['client_header_center_text_top']}' />
	<p class='description'>change text in the center of the header on top part</p>";
   
}
//center header text below
function client_header_center_text_below_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_header_center_text_below</code><input name='plugin_options[client_header_center_text_below]' class='regular-text' type='text' value='{$options['client_header_center_text_below']}' /><p class='description'>change text in the center of the header on under part</p>";
   
}
//service rapide
function client_service_text_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_service_text</code><input name='plugin_options[client_service_text]' class='regular-text' type='text' value='{$options['client_service_text']}' />
	<p class='description'>change text on service rapide in header</p>";
   
}
//phone
function client_phone_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<input name='plugin_options[client_phone]' class='regular-text' type='text' value='{$options['client_phone']}' /><p class='description'>text under servise rapide usually a phonenumber</p>";
}
//renovation
function client_renovation_text_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_renovation_text</code><input name='plugin_options[client_renovation_text]' class='regular-text' type='text' value='{$options['client_renovation_text']}' />
	<p class='description'>change text in the black rowunder the header</p>";
   
}
//renovation
function client_renovation_text_below_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_renovation_text_below</code><input name='plugin_options[client_renovation_text_below]' class='regular-text' type='text' value='{$options['client_renovation_text_below']}' /><p class='description'>change text in the black row under the renovation row</p>";
   
}
//big input box
function client_big_input_box_left_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_big_input_box_left</code><input name='plugin_options[client_big_input_box_left]' class='regular-text' type='text' value='{$options['client_big_input_box_left']}' />
	<p class='description'>change text inside the huge input box leftside</p>";
   
}
//big input box left top
function client_big_input_box_right_top_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_big_input_box_right_top</code><input name='plugin_options[client_big_input_box_right_top]' class='regular-text' type='text' value='{$options['client_big_input_box_right_top']}' /> <p class='description'>change text inside the huge input box rightside top</p>";
   
}
//big input box left under
function client_big_input_box_right_under_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_big_input_box_right_under</code><input name='plugin_options[client_big_input_box_right_under]' class='regular-text' type='text' value='{$options['client_big_input_box_right_under']}' /><p class='description'>change text inside the huge input box rightside under</p>";
   
}
//travail
function client_travail_text_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_travail_text</code><input name='plugin_options[client_travail_text]' class='regular-text' type='text' value='{$options['client_travail_text']}' />
	<p class='description'>change text travail</p>";
   
}
//garanti
function client_garanti_text_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_garanti_text</code><input name='plugin_options[client_garanti_text]' class='regular-text' type='text' value='{$options['client_garanti_text']}' /><p class='description'>change text garanti</p>";
   
}
//color for row1 body
function client_row1_body_color_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_row1_body_color</code><input name='plugin_options[client_row1_body_color]' class='regular-text' type='text' value='{$options['client_row1_body_color']}' />
	<p class='description'>change color of the black row under the header </p>";
   
}
//color for row2 body
function client_row2_body_color_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_row2_body_color</code><input name='plugin_options[client_row2_body_color]' class='regular-text' type='text' value='{$options['client_row2_body_color']}' /><p class='description'>change color of the blue row under the header </p>";
   
}
//color for row3 body
function client_row3_body_color_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_row3_body_color</code><input name='plugin_options[client_row3_body_color]' class='regular-text' type='text' value='{$options['client_row3_body_color']}' />
	   <p class='description'>change color of the Big inputbox </p>";
   
}
//color form button
function client_color_form_button_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_color_form_button</code><input name='plugin_options[client_color_form_button]' class='regular-text' type='text' value='{$options['client_color_form_button']}' />
	<p class='description'>change color of the form button </p>";
   
}
//body background image client_body_background_image
function client_body_background_image_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_body_background_image</code><input name='plugin_options[client_body_background_image]' class='regular-text' type='text' value='{$options['client_body_background_image']}' />
	<p class='description'>change the bacground image of the body </p>";
}
//dm footer logo
function client_dm_footer_logo_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_dm_footer_logo</code><input name='plugin_options[client_dm_footer_logo]' class='regular-text' type='text' value='{$options['client_dm_footer_logo']}' />
	<p class='description'>LOGO for DM</p>";
}
//apcha footer logo
function client_apcha_footer_logo_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_apcha_footer_logo</code><input name='plugin_options[client_apcha_footer_logo]' class='regular-text' type='text' value='{$options['client_apcha_footer_logo']}' />
	<p class='description'>LOGO for apacha/p>";
}
//docteur footer logo
function client_docteur_footer_logo_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_docteur_footer_logo</code><input name='plugin_options[client_docteur_footer_logo]' class='regular-text' type='text' value='{$options['client_docteur_footer_logo']}' />
	<p class='description'>LOGO for DOCtor marketing</p>";
//rbq number
function client_rbq_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_rbq</code><input name='plugin_options[client_rbq]' class='regular-text' type='text' value='{$options['client_rbq']}' /><p class='description'>RBQ number</p>";
}
//rbq number
function client_quebec_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_quebec</code><input name='plugin_options[client_quebec]' class='regular-text' type='text' value='{$options['client_quebec']}' /><p class='description'>LOGO for quebec in header</p>";
}
//apcha head logo
function client_apcha_head_logo_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>client_apcha_head_logo</code><input name='plugin_options[client_apcha_head_logo]' class='regular-text' type='text' value='{$options['client_apcha_head_logo']}' />";
}

}


