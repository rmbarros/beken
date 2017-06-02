<?php
// Register Custom Post Type - Clients
function clientes_post_type() {

    $labels = array(
        'name'                  => _x( 'Clientes', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Clientes', 'text_domain' ),
        'name_admin_bar'        => __( 'Cliente', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'Todos os clientes', 'text_domain' ),
        'add_new_item'          => __( 'Adicionar novo cliente', 'text_domain' ),
        'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
        'new_item'              => __( 'Novo Cliente', 'text_domain' ),
        'edit_item'             => __( 'Editar Cliente', 'text_domain' ),
        'update_item'           => __( 'Actualizar Cliente', 'text_domain' ),
        'view_item'             => __( 'Ver Cliente', 'text_domain' ),
        'view_items'            => __( 'Ver Clientes', 'text_domain' ),
        'search_items'          => __( 'Procurar Cliente', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Inserir em cliente', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Carregados para este cliente', 'text_domain' ),
        'items_list'            => __( 'Lista de clientes', 'text_domain' ),
        'items_list_navigation' => __( 'Navegação da lista de clientes', 'text_domain' ),
        'filter_items_list'     => __( 'Filtrar lista de clientes', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Cliente', 'text_domain' ),
        'description'           => __( 'Descrição do cliente', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'page-attributes', 'editor'),
        'taxonomies'            => array( 'category', 'post_tag', 'accomodation_types' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => get_template_directory_uri().'/assets/images/accomodations-bo-icon.svg',
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'query_vars'            => true
    );
    register_post_type( 'clientes', $args );

}
add_action( 'init', 'clientes_post_type', 0 );

// Register Custom Post Type - Trabalhos
function trabalhos_post_type() {

    $labels = array(
        'name'                  => _x( 'Trabalhos', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Trabalho', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Trabalhos', 'text_domain' ),
        'name_admin_bar'        => __( 'Trabalho', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'Todos os Trabalhos', 'text_domain' ),
        'add_new_item'          => __( 'Adicionar novo cliente', 'text_domain' ),
        'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
        'new_item'              => __( 'Novo Trabalho', 'text_domain' ),
        'edit_item'             => __( 'Editar Trabalho', 'text_domain' ),
        'update_item'           => __( 'Actualizar Trabalho', 'text_domain' ),
        'view_item'             => __( 'Ver Trabalho', 'text_domain' ),
        'view_items'            => __( 'Ver Trabalhos', 'text_domain' ),
        'search_items'          => __( 'Procurar Trabalho', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Inserir em Trabalho', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Carregados para este Trabalho', 'text_domain' ),
        'items_list'            => __( 'Lista de Trabalhos', 'text_domain' ),
        'items_list_navigation' => __( 'Navegação da lista de Trabalhos', 'text_domain' ),
        'filter_items_list'     => __( 'Filtrar lista de Trabalhos', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Trabalho', 'text_domain' ),
        'description'           => __( 'Descrição do Trabalho', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'page-attributes', 'editor'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => get_template_directory_uri().'/assets/images/accomodations-bo-icon.svg',
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'query_vars'            => true
    );
    register_post_type( 'trabalhos', $args );

}
add_action( 'init', 'trabalhos_post_type', 0 );
?>
