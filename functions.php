<?php

add_theme_support('post-thumbnails');


register_nav_menus(array(
    'menu_principal' => 'Menu principal',
	'menu_footer' => 'Menu du pied de page',
));


// on vérifie si acf pro est installé
if ( function_exists('acf_add_options_page') ) {
// on ajoute une page d'option
acf_add_options_page(array(
'page_title' => 'Options générales de mon thème',
'menu_title' => 'Options du thème',
'menu_slug' => 'cw4-theme-options',
'capability' => 'edit_posts',
'redirect' => false
));
// on ajoute une sous-page à la page précédente via le paramètre parent_slug
acf_add_options_sub_page(array(
'page_title' => 'Options du pied de page',
'menu_title' => 'Pied de page',
'parent_slug' => 'cw4-theme-options',
));
}




// Register Custom Post Type
function wp_conferencier() {

	$labels = array(
		'name'                  => _x( 'Conferenciers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Conferencier', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Conferenciers', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les conferenciers', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau conferencier', 'text_domain' ),
		'add_new'               => __( 'Ajouter conferencier', 'text_domain' ),
		'new_item'              => __( 'nouveau conferencier', 'text_domain' ),
		'edit_item'             => __( 'Editer conferencier', 'text_domain' ),
		'update_item'           => __( 'Update conferencier', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Conferencier', 'text_domain' ),
		'description'           => __( 'les conferenciers', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'wp_conferencier', $args );

}
add_action( 'init', 'wp_conferencier', 0 );

// Register Custom Post Type
function wp_conferences() {

	$labels = array(
		'name'                  => _x( 'Conferences', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Conference', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Conférences', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Toutes les conférences', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter une nouvelle conférence', 'text_domain' ),
		'add_new'               => __( 'Ajouter conférence', 'text_domain' ),
		'new_item'              => __( 'nouvelle conférence', 'text_domain' ),
		'edit_item'             => __( 'Editer une conférence', 'text_domain' ),
		'update_item'           => __( 'Update conference', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Conference', 'text_domain' ),
		'description'           => __( 'les conferences', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'wp_conferences', $args );

}
add_action( 'init', 'wp_conferences', 0 );

// Register Custom Post Type
function wp_evenements() {

	$labels = array(
		'name'                  => _x( 'Evenements', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Evenement', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Évenements', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Les évenements', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un évenement', 'text_domain' ),
		'add_new'               => __( 'Ajouter évenement', 'text_domain' ),
		'new_item'              => __( 'Nouvel évenement', 'text_domain' ),
		'edit_item'             => __( 'Edit évenement', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Evenement', 'text_domain' ),
		'description'           => __( 'les événements', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'wp_evenements', $args );

}
add_action( 'init', 'wp_evenements', 0 );

// Register Custom Post Type
function wp_partenaires() {

	$labels = array(
		'name'                  => _x( 'partenaires', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'partenaire', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Partenaires', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Les partenaires', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un partenaire', 'text_domain' ),
		'add_new'               => __( 'Ajouter partenaire', 'text_domain' ),
		'new_item'              => __( 'Nouveau partenaire', 'text_domain' ),
		'edit_item'             => __( 'Edit partenaire', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'partenaire', 'text_domain' ),
		'description'           => __( 'les partenaires', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'wp_partenaires', $args );

}
add_action( 'init', 'wp_partenaires', 0 );

// Register Custom Post Type
function wp_forfaits() {

	$labels = array(
		'name'                  => _x( 'forfaits', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'forfait', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Forfaits', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Les forfaits', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un forfait', 'text_domain' ),
		'add_new'               => __( 'Ajouter forfait', 'text_domain' ),
		'new_item'              => __( 'Nouveau forfait', 'text_domain' ),
		'edit_item'             => __( 'Edit forfait', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'forfait', 'text_domain' ),
		'description'           => __( 'les forfaits', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'wp_forfaits', $args );

}
add_action( 'init', 'wp_forfaits', 0 );