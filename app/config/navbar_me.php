<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',
 
    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'home'  => [
            'text'  => 'Home',
            'url'   => '',
            'title' => 'home'
        ],
		
		// This is a menu item
        'questions' => [
            'text'  => 'Questions',
            'url'   => 'questions',
            'title' => 'questions'
        ],
		
		// This is a menu item
        'tags' => [
            'text'  => 'Tags',
            'url'   => 'tags',
            'title' => 'tags'
        ],
		
		// This is a menu item
        'users'  => [
            'text'  => 'Users',
            'url'   => 'users/list',
            'title' => 'users'
        ],

		// This is a menu item
        'about'  => [
            'text'  => 'About',
            'url'   => 'about',
            'title' => 'about'
        ],
		
    ],
 
    // Callback tracing the current selected menu item base on scriptname
    'callback' => function ($url) {
        if ($url == $this->di->get('request')->getRoute()) {
                return true;
        }
    },

    // Callback to create the urls
    'create_url' => function ($url) {
        return $this->di->get('url')->create($url);
    },
]; 