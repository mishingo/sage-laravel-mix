<?php 

namespace App;

/**
 * Home
 */
function home($data)
{
    // Get posts
    $latest_posts = null;

    $args = array(
        'posts_per_page'   => 6,
        'offset'           => 0,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'suppress_filters' => true
    );
    $the_query = new \WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            $latest_posts[] = [
                'id' => get_the_ID(),
                'date' => get_the_time('F j'),
                'title' => get_the_title(),
                'content' => get_the_content(),
                'permalink' => get_permalink()
            ];
        }
        wp_reset_postdata();
    }
    $data['latest_posts'] = $latest_posts;

    return $data;
}

add_filter('sage/template/home/data', 'App\\home');

/**
* Sample test data
*/
function sample()
{
    $data = [
        'title' => 'List',
        'names' => [
            'Frank',
            'Bob',
            'Mary'
        ]
    ];

    return $data;
}

add_filter( 'sage/template/page/data', 'App\\sample' );

/**
* Data available globally
*/
add_filter('sage/template/global/data', function($data, $template) {

    $current_template  = basename( $template ,'.blade.php' );
    $data['current_template'] = $current_template;

    return $data;

}, 10, 2);

?>