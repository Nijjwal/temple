<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
	
	    if (function_exists('register_nav_menus')) {
    	register_nav_menus(array(
    		'main_nav' => 'Main Navigation Menu'));
        }
		
		
		#Widget Area for main logo
		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name'=>'mySidebar',
			'before_widget' => '<div class="widgetForLogo">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));	
		
		#Widget Area for facebook, twitter, and other social media 
		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name'=>'sidebarSocialMedia',
			'before_widget' => '<div class="widgetSocialMedia">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));	
		
		
		#Widget Area for third column pages
		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name'=>'thirdColumnforOtherPage',
			'before_widget' => '<div class="firstRightSidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));	
		
		
		#Widget Area for third column Blog Page 
		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name'=>'thirdColumnforBlogPage',
			'before_widget' => '<div class="thirdColumnforBlogPage">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		
?>