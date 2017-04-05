<?php 

namespace App;

/**
* Samplepage test data
*/
function samplepage()
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

// Using page template
add_filter( 'sage/template/page-template-default/data', 'App\\samplepage' );

?>