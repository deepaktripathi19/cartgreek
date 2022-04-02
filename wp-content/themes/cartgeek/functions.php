<?php
    //echo get_theme_mod( 'm1_logo' );
// This theme uses wp_nav_menu().
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'tartgeek' ),
		'footerf'  => __( 'Footer Menu First', 'tartgeek' ),
		'footers'  => __( 'Footer Menu Second', 'tartgeek' ),
		) );
	
	function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

 include('cpt/cpt.php');

/*=============================adding script dynamically================================*/

add_action( 'wp_enqueue_scripts', 'loadscript');

function loadscript()
	{	
	wp_enqueue_script( 'owl', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', '', '', true );
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', '', '', true );
	wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css', array(), '');
	wp_enqueue_style( 'owl-style', get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), '');
	}

/*---------------------------------------END--------------------------------------------*/

	
/*================================Below code for adding setting to customizer===============================*/	
add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {
	$wp_customize->add_section( 'new_options' , array(
    'title'      => 'Site Logos',
    'priority'   => 30,
) );
 $wp_customize->add_setting( 'm1_logo' ); // Add setting for header logo uploader
 $wp_customize->add_setting( 'action_button_text' ); // Add setting for call to action button text in header
 $wp_customize->add_setting( 'action_button_link' ); // Add setting for call to action button link in header
 
 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
'label' => __( 'Upload Header Logo', 'm1' ),
'section' => 'new_options',
'settings' => 'm1_logo',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'action_button_text', array(
'label' => __( 'Call to action button text', 'm1' ),
'section' => 'new_options',
'settings' => 'action_button_text',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'action_button_link', array(
'label' => __( 'Call to action button link', 'm1' ),
'section' => 'new_options',
'settings' => 'action_button_link',
) ) );

$wp_customize->add_section( 'social_url' , array(
    'title'      => 'Footer Setting',
    'priority'   => 40,
) );

 $wp_customize->add_setting( 'footer_logo' ); // Add setting for footer logo uploader
 $wp_customize->add_setting( 'footer_text' ); // Add setting for footer text
 $wp_customize->add_setting( 'contact_info' ); // Add setting for contact info
 $wp_customize->add_setting( 'footer_copyright' ); // Add setting for copyright text
 $wp_customize->add_setting( 'facebook' ); 
 $wp_customize->add_setting( 'twitter' ); 
 $wp_customize->add_setting( 'linkedin' ); 
 $wp_customize->add_setting( 'insta' ); // 
 
 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
'label' => __( 'Upload Footer Logo'),
'section' => 'social_url',
'settings' => 'footer_logo',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_text', array(
'label' => __( 'Enter footer text'),
'section' => 'social_url',
'settings' => 'footer_text',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_info', array(
'type' => 'textarea',
'label' => __( 'Enter contact info'),
'section' => 'social_url',
'settings' => 'contact_info',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_copyright', array(
'label' => __( 'Enter copyright text'),
'section' => 'social_url',
'settings' => 'footer_copyright',
) ) );
 
 $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
'label' => __( 'Facebook Url'),
'section' => 'social_url',
'settings' => 'facebook',
) ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
'label' => __( 'Twitter Url'),
'section' => 'social_url',
'settings' => 'twitter',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array(
'label' => __( 'LinkedIn Url'),
'section' => 'social_url',
'settings' => 'linkedin',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'insta', array(
'label' => __( 'Insta Url'),
'section' => 'social_url',
'settings' => 'insta',
) ) );

}	
remove_filter( 'the_content', 'wpautop' );
	?>