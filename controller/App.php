<?php

/**
* Global data available in all views extending app.blade.php
*/

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
	// Get current template name
    public function currentTemplate()
    {
     	return basename(get_page_template() ,'.blade.php');
    }

    // Get site name
	public function siteName()
	{
		return get_bloginfo('name');
	}
}