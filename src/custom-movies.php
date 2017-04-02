<?php 
    
function test_cpt() {

/**
 * Post Type: movies.
 */

$labels = array(
    "name" => __( 'movies', 'sage' ),
    "singular_name" => __( 'movie', 'sage' ),
    "menu_name" => __( 'Movies', 'sage' ),
);

$args = array(
    "label" => __( 'movies', 'sage' ),
    "labels" => $labels,
    "description" => "test",
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
    "rewrite" => array( "slug" => "test_post_slug", "with_front" => true ),
    "query_var" => true,
    "menu_position" => 5,
    "supports" => array( "title", "editor", "excerpt", "thumbnail" ),
);

register_post_type( "test_post_slug", $args );
}

add_action( 'init', 'test_cpt' );

?>