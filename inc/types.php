<?php

function cpt_car() {
 
       
    $labels = [
        "name" => __( "Home Slider", "carsandarts" ),
        "singular_name" => __( "Slide", "carsandarts" ),
    ];
    
    $args = [
        "label" => __( "Home Slider", "carsandarts" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "slider", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail"],
    ];
    
    register_post_type( "slider", $args );

    $labels = [
        "name" => __( "Produtos", "carsandarts" ),
        "singular_name" => __( "produto", "carsandarts" ),
    ];
    
    $args = [
        "label" => __( "Produtos", "carsandarts" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "products", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail","revisions"],
    ];
    
    register_post_type( "products", $args );


  

}
add_action( 'init', 'cpt_car' );



add_action( 'init', 'procars_taxonomy', 0 );
 
function procars_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Tipo de Produto', 'carsandarts' ),
    'singular_name' => _x( 'Tipo', 'carsandarts' ),
    'search_items' =>  __( 'Procurar tipo','carsandarts' ),
    'all_items' => __( 'Todas','carsandarts' ),
    'edit_item' => __( 'Editar','carsandarts' ), 
    'update_item' => __( 'Actualizar','carsandarts' ),
    'add_new_item' => __( 'Nova','carsandarts' ),
    'new_item_name' => __( 'Nova' ,'carsandarts'),
    'menu_name' => __( 'Tipo','carsandarts' ),
  );    
  register_taxonomy('producttype',array('products'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => true,
    'rewrite' => array( 'slug' => 'producttype'),
  ));

}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Configurações',
		'menu_title'	=> 'Configurações',
		'menu_slug' 	=> 'configs',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}