<?php

if ( ! function_exists( 'Qaximum_setup' ) ) :

    function Qaximum_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-thumbnails', array( 'post' ) );      
        add_theme_support( 'post-thumbnails', array( 'page' ) ); 
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        add_theme_support( 'menus' );
      

        register_nav_menus( array(

            'top-menu' => __('Top Menu','theme'),
        ));
    }
endif;

add_action( 'after_setup_theme', 'Qaximum_setup' );





//custom image
add_image_size('slider_image_large', 2560, 785, true);
add_image_size('slider_image_small', 892, 408, false);









//add widgets
function desktop_register_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Area 1',
        'id' => 'footer-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 3',
        'id' => 'footer-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 4',
        'id' => 'footer-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => 'Footer Area 5',
            'id' => 'footer-5',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );
     
}
add_action( 'widgets_init', 'desktop_register_widgets_init' );



// //font icon
// function wpb_load_fa() {
 
//     wp_enqueue_script( 'wpb-fa', 'https://use.fontawesome.com/123456abc.js', array(), '1.0.0', true );
     
//     }
     
//     add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );
 
if(function_exists('acf_add_options_page')){
    acf_add_options_page();
    acf_add_options_sub_page('Identity');
    acf_add_options_sub_page('Packaging');
    acf_add_options_sub_page('Brochure or Catalogue');
    acf_add_options_sub_page('Poster or Flyer');
    acf_add_options_sub_page('Calendar');
    acf_add_options_sub_page('Social Ads'); 
	acf_add_options_sub_page('About'); 
}

add_filter( 'the_content', 'my_lazyload_content_images' );
add_filter( 'widget_text', 'my_lazyload_content_images' );
add_filter( 'wp_get_attachment_image_attributes', 'my_lazyload_attachments', 10, 2 );

// Replace the image attributes in Post/Page Content
function my_lazyload_content_images( $content ) {
  $content = preg_replace( '/(<img.+)(src)/Ui', '$1data-$2', $content );
  $content = preg_replace( '/(<img.+)(srcset)/Ui', '$1data-$2', $content );
  return $content;
}

// Replace the image attributes in Post Listing, Related Posts, etc.
function my_lazyload_attachments( $atts, $attachment ) {
  $atts['data-src'] = $atts['src'];
  unset( $atts['src'] );
  
  if( isset( $atts['srcset'] ) ) {
    $atts['data-srcset'] = $atts['srcset'];
    unset( $atts['srcset'] );
  }

  return $atts;
}