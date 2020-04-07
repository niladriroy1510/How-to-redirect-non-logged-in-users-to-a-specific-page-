<?php

//How to redirect non-logged in users to a specific page?

//Example 1

function redirect_non_logged_users_to_specific_page() {

	if ( !is_user_logged_in() && is_page('add page slug or ID here') && $_SERVER['PHP_SELF'] != '/wp-admin/admin-ajax.php' ) {

		wp_redirect( 'http://www.example.dev/page/' ); 
		exit;
	}
}

add_action( 'admin_init', 'redirect_non_logged_users_to_specific_page' );


//Example 2

function redirect_to_specific_page() {

	if ( is_page('slug') && ! is_user_logged_in() ) {
		wp_redirect( 'http://www.example.dev/your-page/', 301 ); 
		exit;
	}
}

add_action( 'template_redirect', 'redirect_to_specific_page' );


