<?php
if (!session_id())
    session_start();

require_once( 'wpmodules/nav/walkers.php' );
require_once( 'wpmodules/cpt/posttypes.php' );

if (!is_admin()) {

	//remove old jquery
	wp_deregister_script('jquery');
	// New jQuery
	wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/scripts/libs/jquery-3.1.1.min.js', array(), '3.1.1', false );


    // IS JS
	wp_register_script( 'isjs', get_stylesheet_directory_uri() . '/scripts/libs/is.min.js', array(), '0.9.0', false );


	//REVEAL JS
	wp_register_script('reveal', get_stylesheet_directory_uri() . '/scripts/libs/isVisible.js', array('jquery'), '3.2.2', false);

	//MAIN JS FILE
	wp_register_script('br-main', get_stylesheet_directory_uri() . '/scripts/main.js', array( 'jquery' ), '', false);


	/*
	I recommend using a plugin to call jQuery
	using the google cdn. That way it stays cached
	and your site will load faster.
	*/
    wp_enqueue_script( 'isjs' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'reveal' );
	wp_enqueue_script( 'br-main' );
    wp_localize_script( 'br-main', 'ajax_sendmail_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'loadingmessage' => __('Sending user info, please wait...')
    ));

}

// wp menus
add_theme_support( 'menus' );

// registering wp3+ menus
register_nav_menus(
    array(
        'main-nav' => __( 'The Main Menu', 'brtheme' ),   // main nav in header
        'footer-nav' => __( 'The Footer Menu', 'brtheme' )
    )
);
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


add_action('vc_before_init', 'vc_before_init_actions');
function vc_before_init_actions(){
    //require_once(get_template_directory().'/vc_elements/vc_functions.php');

    require_once(get_template_directory().'/vc_elements/bk_home_page_header.php');
    require_once(get_template_directory().'/vc_elements/bk_page_header.php');
    require_once(get_template_directory().'/vc_elements/bk_simple_text.php');
    require_once(get_template_directory().'/vc_elements/bk_image_and_text.php');
    require_once(get_template_directory().'/vc_elements/bk_small_highlight.php');
    require_once(get_template_directory().'/vc_elements/bk_list_block.php');
    require_once(get_template_directory().'/vc_elements/bk_servicos_block.php');
    require_once(get_template_directory().'/vc_elements/bk_testimonials_block.php');
    require_once(get_template_directory().'/vc_elements/bk_hire_block.php');
    require_once(get_template_directory().'/vc_elements/bk_workslist_block.php');
}
add_filter('the_content', 'removeEmptyParagraphs',99999);
function removeEmptyParagraphs($content) {
    /*$pattern = "/<p[^>]*><\\/p[^>]*>/";
    $content = preg_replace($pattern, '', $content);*/
    $content = str_replace("<p></p>","",$content);
    return $content;
}
function add_custom_page_attributes_meta_box(){
    global $post;
    if ( 'page' != $post->post_type && post_type_supports($post->post_type, 'page-attributes') ) {
        add_meta_box( 'custompageparentdiv', __('Template'), 'custom_page_attributes_meta_box', NULL, 'side', 'core');
    }
}

function custom_page_attributes_meta_box($post) {
    $template = get_post_meta( $post->ID, '_wp_page_template', 1 ); ?>
    <select name="page_template" id="page_template">
        <?php $default_title = apply_filters( 'default_page_template_title',  __( 'Default Template' ), 'meta-box' ); ?>
        <option value="default"><?php echo esc_html( $default_title ); ?></option>
        <?php page_template_dropdown($template); ?>
    </select><?php
}

add_action( 'save_post', 'save_custom_page_attributes_meta_box' );
function save_custom_page_attributes_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;
    if ( ! empty( $_POST['page_template'] ) && get_post_type( $post_id ) != 'page' ) {
        update_post_meta( $post_id, '_wp_page_template', $_POST['page_template'] );
    }
}
// wp thumbnails (sizes handled in functions.php)
add_action( 'add_meta_boxes', 'add_custom_page_attributes_meta_box' );
?>
