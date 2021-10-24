<?php
/*
Plugin Name: sohan-toolkit
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This plugin only used for RRF online Industry theme.
Author: Sohan Chowdhury
Version: 1.0
Author URI: https://sohancse.com/
*/

//call include function
function industry_toolkit_include_files() {
    wp_enqueue_style( 'owl-carousel', plugins_url( '/assets/css/owl.carousel.css', __FILE__ ) );
    wp_enqueue_style( 'sohan-toolkit', plugins_url( '/assets/css/industry-toolkit.css', __FILE__ ) );
    
    wp_enqueue_script( 'owl-carousel', plugins_url( '/assets/js/owl.carousel.min.js', __FILE__ ), array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'industry_toolkit_include_files' );


//------------------------------
//Custom-post-for-Slider
//------------------------------
function industry_theme_custom_post() {
    register_post_type('industry-slide', 
        array(
            'labels' => array(
                'name' => __( 'Slides' ),
                'singular_name' => __( 'Slide' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
            )
        );
}
add_action('init', 'industry_theme_custom_post');



function industry_theme_custom_post_taxonomy() {
    register_taxonomy(
        'slide_cat', 
        'industry-slide', 
        array(
            'hierarchical'          => true,
            'label'                 => 'Slide Category',
            'query_var'             => true,
            'show_admin_column'     => true,
            'rewrite'               => array(
                'slug'              => 'slide-category',
                'with_front'        => true
            ),
        )
    );
}
add_action('init', 'industry_theme_custom_post_taxonomy');


function industry_theme_slide_cat_list() {

    $slide_categories = get_terms( 'slide_cat' );

    $slide_category_options = array('' => esc_html__('All category', 'upbuild-toolkit'));

    if( $slide_categories ) {
        foreach ( $slide_categories as $slide_category ) {
            $slide_category_options[ $slide_category->term_id ] = $slide_category->name;
        }
    }

    return $slide_category_options;

}




include_once('industry-toolkit-shortcodes.php');
include_once('industry-toolkit-kc-addons.php');
