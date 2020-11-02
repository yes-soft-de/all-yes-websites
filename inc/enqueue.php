<?php
	/*
		FUNCTIONS TO ENQUEUE SCRIPTS FILES
		===============================================
	*/


	/*
	 * function to add theme scripts
	 * Add By @Talal
	 * */
	function yes_user_load_scripts() {
		// Enqueue Styles
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css' );
		wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css' );

		// Js Scripts
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery' , get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), false, true );
		wp_enqueue_script( 'jquery' );
		// add popper to wordpress
		wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), false, true );
		// add bootstrap to wordpress
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );
		// add our custom file to wordpress
		wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), false, true );
		// add condition for internet explorer 9 and less
		wp_enqueue_script( 'html5shiv-js', get_template_directory_uri() . '/js/html5shiv.min.js' );
		wp_script_add_data( 'html5shiv-js', 'conditional', 'lt it 9' );
		// add condition for internet explorer 9 and less
		wp_enqueue_script( 'respond-js', get_template_directory() . '/js/respond.min.js' );
		wp_script_add_data( 'respond-js', 'conditional', 'lt it 9' );
	}
	add_action( 'wp_enqueue_scripts', 'yes_user_load_scripts' );
