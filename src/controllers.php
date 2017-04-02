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

// Using page name
// add_filter( 'sage/template/sample-page/data', 'App\\samplepage' );

// Using page template
add_filter( 'sage/template/page-template-default/data', 'App\\samplepage' );

?>