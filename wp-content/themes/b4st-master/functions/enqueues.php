<?php

function b4st_enqueues() {

	/* Styles */

	wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', false, '4.0.0-alpha.6', null);
	wp_enqueue_style('bootstrap-css');

	wp_register_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', null);
	wp_enqueue_style('font-awesome-css');

  	wp_register_style('b4st-css', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
	wp_enqueue_style('b4st-css');

	wp_register_style('custom', get_template_directory_uri() . '/theme/css/main.css', false, null);
	wp_enqueue_style('custom');
	/* Scripts */

	wp_enqueue_script( 'jquery' );
	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

  	wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
	wp_enqueue_script('modernizr');

	wp_register_script('tether',  'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', false, '1.4.0', true);
	wp_enqueue_script('tether');

  	wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', false, '4.0.0-alpha.6', true);
	wp_enqueue_script('bootstrap-js');
	
	wp_register_script('velocity', 'https://cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js', false, null, true);
	wp_enqueue_script('velocity');

	wp_register_script('gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js', false, null, true);
	wp_enqueue_script('gsap');
	
	wp_register_script('b4st-js', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
	wp_enqueue_script('b4st-js');
	
	wp_register_script('particles', get_template_directory_uri() . '/theme/js/particles.js', false, null, true);
	wp_enqueue_script('particles');
	
	wp_register_script('app', get_template_directory_uri() . '/theme/js/app.js', false, null, true);
	wp_enqueue_script('app');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
