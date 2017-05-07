<?php 
    
function my_cpt() {

/**
 * Post Type: My custom post type.
 */

$labels = array(
    "name" => __( 'cpts', 'sage' ),
    "singular_name" => __( 'cpt', 'sage' ),
    "menu_name" => __( 'CPT', 'sage' ),
);

$args = array(
    "label" => __( 'CPT', 'sage' ),
    "labels" => $labels,
    "description" => "This is my custom post type",
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