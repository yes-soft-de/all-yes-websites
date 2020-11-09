<?php
	/*
	    THEME SUPPORT OPTIONS AND FUNCTIONS
	  --------------------------------------------
	*/

	// Fetch Custom Header Option And Add It To The Theme Support
	add_theme_support( 'custom-header' );
	// Fetch Custom Background Option And Add It To The Theme Support
  add_theme_support( 'custom-background' );
	// add thumbnail option to our post
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


	// ِ ِ Activate Navigation Menu
	function yes_user_register_menu() {
		register_nav_menus( array(
			'left-menu' => 'Left Navigation Menu',
			'language-menu' => 'Language Navigation Menu',
			'right-menu' => 'Right Navigation Menu',
			'mobile-menu' => 'Mobile Navigation Mneu'
		) );
	}
	add_action( 'after_setup_theme', 'yes_user_register_menu' );


	// Display The Left Menu Navigation Bar
	function yes_user_display_left_menu() {
		wp_nav_menu( array(
			'theme_location' => 'left-menu',
			'menu_class' => 'navbar-nav',
			'container' => false,
			'depth' => 2,
			'walker' => new wp_bootstrap_navwalker()
		) );
	}

	// Display The Right Menu Navigation Bar
	function yes_user_display_right_menu() {
		wp_nav_menu( array(
			'theme_location' => 'right-menu',
			'menu_class' => 'navbar-nav justify-content-center',
			'container' => false,
			'depth' => 2,
			'walker' => new wp_bootstrap_navwalker()
		) );
	}

	// Display The Language Navigation Bar
	function yes_user_display_language_menu() {
		wp_nav_menu( array(
			'theme_location' => 'language-menu',
			'menu_class' => 'navbar-nav justify-content-end',
			'container' => false,
			'depth' => 2,
			'walker' => new wp_bootstrap_navwalker()
		) );
	}

	// Display The Mobile Navigation Bar
	function yes_user_display_mobile_menu() {
		wp_nav_menu( array(
			'theme_location' => 'mobile-menu',
			'menu_class' => 'navbar-nav',
			'container' => false,
			'depth' => 2,
			'walker' => new wp_bootstrap_navwalker()
		) );
	}


	// function to register new sidebar
	function yes_user_footer_side_bar() {
		register_sidebar( array(
			'name'            => 'Newsletter Sidebar',
			'id'              => 'newsletter-sidebar',
			'description'     => 'Sidebar For Newsletter Contact Form',
			'class'           => 'newsletter-sidebar',
			'before_widget' => '<div class="widget-content">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		) );
	}
	add_action( 'widgets_init', 'yes_user_footer_side_bar' );


	// function to get thumbnail image
	function yes_user_get_thumbnail() {
		$output = '';
		if ( has_post_thumbnail() ) {
			$output = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
		} else {
			$output = get_template_directory_uri() . '/images/all/how-to-write-a-blog-post.svg';
		}
		return $output;
	}


	// function to get post categories
	function yes_user_get_categories() {
		$output = '';
		$categories = get_the_category();
		$i = 1;
		if ( ! empty( $categories ) ):
			foreach($categories as $category):
				$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '"><span class="category-box">' . esc_html( $category->name ) . '</span></a>';
			endforeach;
		endif;
		return $output;
	}

	// Pagination N
	function yes_user_pagination_number($post_type = '') {
		if ( $post_type != '' ) {
			$args = array( 'post_type' => $post_type );
			$wp_query = new WP_Query( $args );
		} else {
			global $wp_query; // Make WP_Query Global
		}
		$all_page_number = $wp_query->max_num_pages; // Get All Posts
		$current_page_number = max(1, get_query_var('paged')); // Get Current Page
		// Check If There Is One Page Or More
		if ( $all_page_number > 1 ) {
			return paginate_links( array(
				'base'               => get_pagenum_link() . '%_%',
				'format'             => '?paged=%#%',
				'current'            => $current_page_number,
				'total'              => $all_page_number,
				'prev_text'          => '« '.pll_('Prev'),
				'next_text'          => pll_('Next').' »'
			) );
		}
		if ( $post_type != '' ) {
			wp_reset_postdata();
		}
	}



	// get most views posts
	function wpb_set_post_views($postID) {
		$count_key = 'wpb_post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
		}
	}
	//To keep the count accurate, lets get rid of prefetching
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


	// Get Template Name
	function yes_user_get_template_name( $page_id = null ) {
		if ( ! $template = get_page_template_slug( $page_id ) )
			return;
		if ( ! $file = locate_template( $template ) )
			return;

		$data = get_file_data(
			$file,
			array(
				'Name' => 'Template Name',
			)
		);

		return $data['Name'];
	}

