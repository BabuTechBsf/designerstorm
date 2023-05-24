<?php 
function dstorm_files(){
    wp_enqueue_script('dstorm_main_js', get_theme_file_uri('/js/bootstrap.js'),array('jquery'), '1.0', true );
    wp_enqueue_style('custom_font', '//fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap');
    wp_enqueue_style('dstorm_main_styles', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('dstorm_resp_styles', get_theme_file_uri('/css/responsive.css'));
    wp_enqueue_style('dstorm_bstrap_styles', get_theme_file_uri('/css/bootstrap.css'));
}
add_action('wp_enqueue_scripts','dstorm_files');

function dstorm_features(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'dstorm_features');
?>