<?php

/*
Google CDN jQuery with a local fallback
=======================================
See http://www.wpcoke.com/load-jquery-from-cdn-with-local-fallback-for-wordpress/
*/

if( !is_admin()){
	$url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js';
	$test_url = @fopen($url,'r');
	if($test_url !== false) {
		function load_external_jQuery() {
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
			wp_enqueue_script('jquery');
		}
		add_action('wp_enqueue_scripts', 'load_external_jQuery');
	} else {
		function load_local_jQuery() {
			wp_deregister_script('jquery');
			wp_register_script('jquery', get_bloginfo('template_url').'/asset/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
			wp_enqueue_script('jquery');
		}
		add_action('wp_enqueue_scripts', 'load_local_jQuery');
	}
}

function a_pr_enqueues() {

/*
OPTIONAL: Enqueue WordPress's onboard jQuery
============================================
Un-comment the next two lines of code if you want to use WordPress's onboard jQuery INSTEAD of the Google CDN jQuery above.
	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
	wp_enqueue_script( 'jquery' );
*/

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/asset/css/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');

/*
OPTIONAL: Bootstrap Theme enqueued
==================================
Delete (or comment-out) the next two lines of code below if you don't want the Bootstrap Theme.
*/

  	wp_register_style('a-pr-css', get_template_directory_uri() . '/asset/css/style.css', false, null);
	wp_enqueue_style('a-pr-css');

  	wp_register_script('modernizr', get_template_directory_uri() . '/asset/js/modernizr-2.8.3.min.js', false, null, false);
	wp_enqueue_script('modernizr');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/asset/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('a-pr-js', get_template_directory_uri() . '/asset/js/a-pr.js', false, null, true);
	wp_enqueue_script('a-pr-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'a_pr_enqueues', 100);
