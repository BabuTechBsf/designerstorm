<?php 
function dstorm_files(){
    wp_enqueue_script('dstorm_query_js', get_theme_file_uri('/js/jquery-3.4.1.min.js'),array('jquery'), '1.0', true );
    wp_enqueue_script('dstorm_main_js', get_theme_file_uri('/js/bootstrap.js'),array('jquery'), '1.0', true );
    wp_enqueue_script('dstorm_script_js', get_theme_file_uri('/js/scripts.js'),array('jquery'), '1.0', true );
    wp_enqueue_style('custom_font', '//fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap');
    wp_enqueue_style('dstorm_bstrap_styles', get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('dstorm_main_styles', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('dstorm_resp_styles', get_theme_file_uri('/css/responsive.css'));
    wp_localize_script('dstorm_script_js','dstormData', array(
        'root_url' => get_site_url(),
    ));
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
        'capability_type'=> 'breed',
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

function dstorm_custom_rest(){
    register_rest_field('post','authName', array(
        'get_callback' => function(){
            return get_the_author();
        }
    ));
}
add_action('rest_api_init', 'dstorm_custom_rest');

add_action('rest_api_init','dstormRegSearch');
function dstormRegSearch(){
    register_rest_route('dstorm/v1', 'search', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'dstormSearchRes'
    ));
}
function dstormSearchRes($data){
    $searchQry = new WP_Query(array(
        'post_type' => array('breed', 'post', 'page'),
        's' => sanitize_text_field($data['searchfor']),
        'posts_per_page' => -1
    ));
$searchQryRes = array();
while($searchQry->have_posts()){
    $searchQry->the_post();
    array_push($searchQryRes,
    array(
        'title'=> get_the_title(),
        'permalink'=> get_the_permalink(),
        'image' => get_the_post_thumbnail_url(0,'breedlandscape')
    ));
}
    return $searchQryRes;
}
add_action('admin_init','redirectSubscribers');
function redirectSubscribers(){
    $currentUser = wp_get_current_user();
    if(count($currentUser->roles) == 1 AND $currentUser->roles[0] =='subscriber'){
        wp_redirect(site_url('/'));
        exit;
    }
}
add_action('wp_loaded','subscriberAdminbarhide');
function subscriberAdminbarhide(){
    $currentUser = wp_get_current_user();
    if(count($currentUser->roles) == 1 AND $currentUser->roles[0] =='subscriber'){
        show_admin_bar(false);
    }
}

add_filter('login_headerurl','ourheaderUrl');
function ourheaderUrl() {
    return esc_url(site_url('/'));
}



?>