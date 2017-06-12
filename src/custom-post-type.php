<?php 
    
function my_cpt() {

/**
 * Post Type: CPT
 */

$labels = array(
    "name" => __( 'cpt', 'sage-laravel-mix' ),
    "singular_name" => __( 'cpt', 'sage-laravel-mix' ),
    "menu_name" => __( 'CPT', 'sage-laravel-mix' ),
);

$args = array(
    "label" => __( 'CPT', 'sage-laravel-mix' ),
    "labels" => $labels,
    "description" => "Custom Post Type",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "rest_base" => "",
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "my_custom_post", "with_front" => true ),
    "query_var" => true,
    "menu_position" => 5,
    "supports" => array( "title", "editor", "excerpt", "thumbnail" ),
);

register_post_type( "my_custom_post", $args );
}

add_action( 'init', 'my_cpt' );

?>