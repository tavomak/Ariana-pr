<?php

// Register Custom Post Type
function frases() {

	$labels = array(
		'name'                  => 'frases',
		'singular_name'         => 'frase',
		'menu_name'             => 'Frases',
		'name_admin_bar'        => 'Frases',
		//'archives'              => 'Item Archives',
		//'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'Lista de frases',
		'add_new_item'          => 'Agregar nueva frase',
		'add_new'               => 'Agregar nueva',
		'new_item'              => 'nueva frase',
		'edit_item'             => 'Editar frase',
		'update_item'           => 'Actuakizar frase',
		'view_item'             => 'Ver frase',
	);
	$args = array(
		'label'                 => 'frase',
		'description'           => 'frases_carousel',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		//'hierarchical'          => false,
		'public'                => true,
		//'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		//'can_export'            => true,
		'has_archive'           => true,
		//'exclude_from_search'   => false,
		//'publicly_queryable'    => true,
		//'capability_type'       => 'page',
        'menu_icon' => get_stylesheet_directory_uri() . '/asset/img/owl-logo-16.png',
	);
	register_post_type( 'frases', $args );

}
add_action( 'init', 'frases', 0 );
