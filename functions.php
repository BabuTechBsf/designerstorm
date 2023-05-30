<?php 
function dstorm_files(){
    wp_enqueue_script('dstorm_query_js', get_theme_file_uri('/js/jquery-3.4.1.min.js'),array('jquery'), '1.0', true );
    wp_enqueue_script('dstorm_main_js', get_theme_file_uri('/js/bootstrap.js'),array('jquery'), '1.0', true );
    wp_enqueue_script('dstorm_script_js', get_theme_file_uri('/js/scripts.js'),array('jquery'), '1.0', true );
    wp_enqueue_style('custom_font', '//fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap');
    wp_enqueue_style('dstorm_bstrap_styles', get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('dstorm_main_styles', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('dstorm_resp_styles', get_theme_file_uri('/css/responsive.css'));
}
add_action('wp_enqueue_scripts','dstorm_files');

function dstorm_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('breedlandscape',400, 260, true);
}
add_action('after_setup_theme', 'dstorm_features');

function dstorm_post_types(){
    register_post_type('breed',array(
        'supports'=> array('title', 'editor', 'thumbnail'),
        'public'=> true,
        'show_in_rest' => true,
        'labels'=> array(
            'name'=>'Breeds',
            'add_new_item'=>'Add New Breed',
            'edit_item'=>'Edit Breed',
            'all_items'=>'All Breeds',
            'singular_name'=>'Breed'
        ),
        'menu_icon'=>'dashicons-buddicons-activity'
    ));
        register_post_type('store',array(
            'public'=> true,
            'show_in_rest' => true,
            'labels'=> array(
                'name'=>'Stores',
                'add_new_item'=>'Add New Store',
                'edit_item'=>'Edit Store',
                'all_items'=>'All Stores',
                'singular_name'=>'Store'
            ),
            'menu_icon'=>'dashicons-store'
        ));}

add_action('init', 'dstorm_post_types');

?>