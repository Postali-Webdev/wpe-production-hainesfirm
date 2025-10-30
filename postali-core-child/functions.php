<?php

add_action('wp_enqueue_scripts', 'postali_child_scripts', 1000);
function postali_child_scripts() {

    wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/style.css' ); // Enqueue Child theme style sheet (theme info)
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), time() ); // Enqueue child theme styles.css
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css'); // Enqueue child theme styles.css
    
    // wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet', array() );
    // wp_enqueue_style('google-fonts');

    wp_enqueue_style( 'lity-css', get_stylesheet_directory_uri() . '/assets/css/lity.min.css');

    wp_register_script('lity-scripts', get_stylesheet_directory_uri() . '/assets/js/lity.min.js',array('jquery'), null, true); 
    wp_enqueue_script('lity-scripts');

    // Compiled .js using Grunt.js
    wp_register_script('child-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js',array('jquery'), null, true); 
    wp_enqueue_script('child-scripts');
    
    wp_register_script('home-scripts', get_stylesheet_directory_uri() . '/assets/js/home.min.js',array('jquery'), null, true); 
    wp_enqueue_script('home-scripts');

    wp_register_script('slick', get_stylesheet_directory_uri() . '/assets/js/slick.min.js',array('jquery'), null, true); 
    wp_enqueue_script('slick');
    
    wp_register_script('slick-custom-js', get_stylesheet_directory_uri() . '/assets/js/slick-custom.min.js', array('jquery'));
    wp_enqueue_script('slick-custom-js');	

    //Remove Gutenberg Block Library CSS from loading on the frontend
    function smartwp_remove_wp_block_library_css(){
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
    } 
    add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
    
}

function retrieve_latest_gform_submissions() {
	$site_url = get_site_url();
	$search_criteria = [
		'status' => 'active'
	];
	$form_ids = 1; //search all forms
	$sorting = [
		'key' => 'date_created',
		'direction' => 'DESC'
	];
	$paging = [
		'offset' => 0,
		'page_size' => 5
	];
	
	$submissions = GFAPI::get_entries($form_ids, null, $sorting, $paging);
	$start_date = date('Y-m-d H:i:s', strtotime('-5 day'));
	$end_date = date('Y-m-d H:i:s');
	$entry_in_last_5_days = false;
	
	foreach ($submissions as $submission) {
		if( $submission['date_created'] > $start_date  && $submission['date_created'] <= $end_date ) {
			$entry_in_last_5_days = true;
		} 
	}

	if( !$entry_in_last_5_days ) {
		wp_mail('webdev@postali.com', 'Submission Status', "No submissions in last 5 days on $site_url");
	}

}
add_action('check_form_entries', 'retrieve_latest_gform_submissions');