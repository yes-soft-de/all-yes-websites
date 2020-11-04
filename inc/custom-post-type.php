<?php
	/*
		=============================
			THEME CUSTOM POST TYPE
		=============================
	*/

	function yes_user_project_custom_post_type() {
		// All Post Labels
		$label = array(
			'name'                => 'Projects',
			'singular_name'       => 'Project',
			'add_new'             => 'Add New',
			'all_items'           => 'All Projects',
			'add_new_item'        => 'Add New',
			'new_item'            => 'New Project',
			'view_item'           => 'View Project',
			'search_items'         => 'Search Project',
			'not_found'           => 'No Project Found',
			'not_found_in_trash'  => 'Not Project Found In Trash',
			'parent_item_colon'   => 'Parent Project'
		);
		$args = array(
			'labels'              => $label,
			'public'              => true,
			'has_archive'         => true,
			'publicly_queryable'  => true,
			'query_var'           => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'menu_icon'           => 'dashicons-analytics',
			'hierarchical'        => false,
//		'taxonomies'          => array( 'category', 'post_tag' ),
			'menu_position'       => 5,
			'exclude_from_search' => false,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'comments'
			)
		);
		register_post_type( 'yes_user_project', $args );
	}
	add_action( 'init', 'yes_user_project_custom_post_type' );


	/*
	 * Function To Add New Taxonomy Hierarchical And NOT Hierarchical
	 */
	function yes_user_project_custom_taxonomies() {

		//add new taxonomy hierarchical
		$labels = array(
			'name' => 'Project Category',
			'singular_name' => 'Project Category',
			'search_items' => 'Search Project Categories',
			'all_items' => 'Project Categories',
			'parent_item' => 'Parent Project Category',
			'parent_item_colon' => 'Parent Project Category:',
			'edit_item' => 'Edit Project Category',
			'update_item' => 'Update Project Category',
			'add_new_item' => 'Add New Project Category',
			'new_item_name' => 'New Project Category Name',
			'menu_name' => 'Project Categories'
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'yes_user_project_category' )
		);

		register_taxonomy('yes_user_project_category', array('yes_user_project'), $args);

		//add new taxonomy NOT hierarchical

		register_taxonomy('project_tag', 'yes_user_project', array(
			'label' => 'Project Tag',
			'rewrite' => array( 'slug' => 'project_tag' ),
			'hierarchical' => false
		) );
	}
	add_action( 'init' , 'yes_user_project_custom_taxonomies' );


	/* Contact Custom Port Type */
	function yes_user_contact_custom_post_type() {
		$labels = array(
			'name'              => pll_('Messages'),
			'singular_name'     => pll_('Message'),
			'menu_name'         => pll_('Messages'),
			'name_admin_bar'    => pll_('Message'),
			'not_found'         => pll_('No Messages Found'),
		);
		$args = array(
			'labels'            => $labels,
			'show_ui'           => true,
			'show_in_menu'      => true,
			'capability_type'   => 'post',  // We Want to be as post not page
			'hierarchical'      => false,   // Because post can't be hierarchical so must put it false
			'menu_position'     => 26,
			'menu_icon'         => 'dashicons-email-alt',
			'supports'          => array( 'title', 'editor', 'author' )
		);
		// Register Our Post Type
		register_post_type( 'yes-user-contact', $args );
	}
	// hook for display our contact custom post in admin menu
	add_action( 'init', 'yes_user_contact_custom_post_type' );

	/*
	* function to create new columns and rename all columns as we want
	*/
	function yes_user_set_contact_columns( $columns ) {
		$newColumns = array();
		$newColumns['title']    = pll_('Full Name');
		$newColumns['message']  = pll_('Message');
		$newColumns['email']    = pll_('Email');
		$newColumns['date']     = pll_('Date');
		return $newColumns;
	}
	add_filter( 'manage_yes-user-contact_posts_columns', 'yes_user_set_contact_columns' );

	/*
	 * Function to print the value for every columns
	 */
	function yes_user_contact_custom_column( $column, $post_id ) {
		switch ( $column ) {
			case 'message' :
				// in the loop the $post_id is already set and get_the_excerpt will know witch type of message will print
				echo get_the_excerpt();
				break;
			case 'email':
				$email = get_post_meta( $post_id, '_contact_email_value_key', true );
				echo '<a href="mailto:' . $email . '">' . $email . '</a>';
				break;
		}
	}
	add_action( 'manage_yes-user-contact_posts_custom_column', 'yes_user_contact_custom_column', 10, 2 );

	/**** Create Contact Meta Box ****/
	// Even If The Meta bax not related ot the custom post type but it related to the contact post type so we generate it in this file
	function yes_user_contact_add_meta_box() {
		add_meta_box( 'contact_email', pll_('User Email'), 'yes_user_contact_email_callback', 'yes-user-contact', 'side', 'default' );
	}
	// action to activate my function and generate the meta box
	add_action( 'add_meta_boxes', 'yes_user_contact_add_meta_box' );

	// $post: will automatically pass by add_meta_box and it will care all information related to 'yes_user-contact' post type
	function yes_user_contact_email_callback( $post ) {
		wp_nonce_field( 'yes_user_save_contact_email_data', 'yes_user_contact_email_meta_box_nonce' );
		$value = get_post_meta( $post->ID, '_contact_email_value_key', true );
		// Print The input as wordpress theme build-in
		echo '<label for="yes_user_contact_email_field">' . pll_('User Email Address') . ': </label>';
		echo '<input type="email" id="yes_user_contact_email_field" name="yes_user_contact_email_field" value="' . esc_attr( $value ) . '" size="25" />';
	}

// function to print the email inside our meta box and save the post
	function yes_user_save_contact_email_data( $post_id ) {
		// check if the nonce is not set in the $_POST Method
		if ( ! isset( $_POST['yes_user_contact_email_meta_box_nonce'] ) ) {
			return;
		}
		// check if the nonce is valid and nonce is generated by wordpress and not generated by and hacker or another user
		if ( ! wp_verify_nonce( $_POST['yes_user_contact_email_meta_box_nonce'], 'yes_user_save_contact_email_data' ) ) {
			return;
		}
		// check is a manual save or automatically save | prevent the wordpress from saving by him self the meta box
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
			return;
		}
		// Check for user permission
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
		// check if our input name yes_user_contact_email_field is in $_POST method
		if ( ! isset( $_POST['yes_user_contact_email_field'] ) ) {
			return;
		}
		// Retrieve the data
		$my_data = sanitize_text_field( $_POST['yes_user_contact_email_field'] );
		update_post_meta( $post_id, '_contact_email_value_key', $my_data );
	}
	// action to save the post in our contact custom post
	add_action( 'save_post', 'yes_user_save_contact_email_data' );




	// Posts Relation with products
	function yes_user_product_add_meta_boxes() {
		add_meta_box( 'product_meta_box', pll_( 'Products Relationship' ), 'yes_user_products_callback', 'post', 'side', 'default' );
	}
	add_action( 'add_meta_boxes', 'yes_user_product_add_meta_boxes' );


	function yes_user_products_callback( $post ) {
		$selected_products = get_post_meta( $post->ID, '_products_value_key', true );
		$all_products = get_posts( array(
			'post_type' => 'yes_user_project',
			'numberposts' => -1,
			'orderby' => 'post_title',
			'order' => 'ASC'
		) );

		echo '<input type="hidden" name="products_nonce" value="'. wp_create_nonce( basename( __FILE__ ) ) . '" />
				<table class="form-table">
					<tr valign="top">
						<td scope="row">
							<label for="products">' . pll_('Products') . '</label>
						</td>
						<td>
							<select multiple name="products" size="4" style="width: 100%">';
								foreach ( $all_products as $product ) :
									echo '<option value="'. $product->ID .'"'. (in_array( $product->ID, $selected_products ) ? ' selected="selected"' : '') . '>'. esc_html($product->post_title) .'</option>';
								endforeach;
							echo '</select>
						</td>
					</tr>
				</table>';
	}

	add_action( 'save_post', 'yes_user_save_product_field' );
	function yes_user_save_product_field( $post_id ) {

		// only run this for series
		if ( 'post' != get_post_type( $post_id ) )
			return $post_id;

		// verify nonce
		if ( empty( $_POST['products_nonce'] ) || !wp_verify_nonce( $_POST['products_nonce'], basename( __FILE__ ) ) )
			return $post_id;

		// check autosave
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		// check permissions
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;

		// Retrieve the data
		$my_data = sanitize_text_field( $_POST['products'] );
		update_post_meta( $post_id, '_products_value_key', $my_data );
	}
