<?php

/**
* Data available in the Home view
*/

namespace App;

use Sober\Controller\Controller;

class Home extends Controller
{
	// Latest posts
	public function latestPosts()
	{
	    // Get posts
	    $data = null;

	    $args = array(
	        'posts_per_page'   => 6,
	        'offset'           => 0,
	        'orderby'          => 'date',
	        'order'            => 'DESC',
	        'post_type'        => 'post',
	        'post_status'      => 'publish',
	        'suppress_filters' => true
	    );

	    $the_query = new \WP_Query($args);

	    // The Loop
	    if ( $the_query->have_posts() ) {
	        while ( $the_query->have_posts() ) {
	            $the_query->the_post();

	            $data[] = [
	                'id' => get_the_ID(),
	                'date' => get_the_time('F j'),
	                'title' => get_the_title(),
	                'content' => get_the_content(),
	                'permalink' => get_permalink()
	            ];
	        }
	        wp_reset_postdata();
	    }

	    // Pass data to view
	    return $data;
	}
}