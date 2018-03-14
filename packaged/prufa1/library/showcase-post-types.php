<?php

// let's create the function for the custom type
function showcase() {
	// creating (registering) the custom type
	register_post_type( 'showcase', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Showcase', 'by Thorkelsdottir' ), /* This is the Title of the Group */
			'singular_name' => __( 'Showcase', 'by Thorkelsdottir' ), /* This is the individual type */
			'all_items' => __( 'All Showcase Items', 'by Thorkelsdottir' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'by Thorkelsdottir' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Item', 'by Thorkelsdottir' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'by Thorkelsdottir' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Item', 'by Thorkelsdottir' ), /* Edit Display Title */
			'new_item' => __( 'New Item', 'by Thorkelsdottir' ), /* New Display Title */
			'view_item' => __( 'View Item', 'by Thorkelsdottir' ), /* View Display Title */
			'search_items' => __( 'Search Showcase', 'by Thorkelsdottir' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'by Thorkelsdottir' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'by Thorkelsdottir' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is my showcase', 'by Thorkelsdottir' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			//'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'showcase', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type( 'category', 'showcase' );
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type( 'post_tag', 'showcase' );

}

	// adding the function to the Wordpress init
	add_action( 'init', 'showcase');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

	// now let's add custom categories (these act like categories)
	register_taxonomy( 'showcase_cat',
		array('showcase'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Categories', 'by Thorkelsdottir' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Category', 'by Thorkelsdottir' ), /* single taxonomy name */
				'search_items' =>  __( 'Search  Categories', 'by Thorkelsdottir' ), /* search title for taxomony */
				'all_items' => __( 'All Categories', 'by Thorkelsdottir' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Category', 'by Thorkelsdottir' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Category:', 'by Thorkelsdottir' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Category', 'by Thorkelsdottir' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Category', 'by Thorkelsdottir' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Category', 'by Thorkelsdottir' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Category Name', 'by Thorkelsdottir' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'showcase_cat' ),
		)
	);

	// now let's add custom tags (these act like categories)
	register_taxonomy( 'showcase_tag',
		array('showcase'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => false,    /* if this is false, it acts like tags */
			'labels' => array(
				'name' => __( 'Tags', 'by Thorkelsdottir' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Tag', 'by Thorkelsdottir' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Tags', 'by Thorkelsdottir' ), /* search title for taxomony */
				'all_items' => __( 'All Tags', 'by Thorkelsdottir' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Tag', 'by Thorkelsdottir' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Tag:', 'by Thorkelsdottir' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Tag', 'by Thorkelsdottir' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Tag', 'by Thorkelsdottir' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Tag', 'by Thorkelsdottir' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Tag Name', 'by Thorkelsdottir' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);

	/*
		looking for custom meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
	*/

	function get_previous_post_id( $post_id ) {
	    // Get a global post reference since get_adjacent_post() references it
	    global $post;
	    // Store the existing post object for later so we don't lose it
	    $oldGlobal = $post;
	    // Get the post object for the specified post and place it in the global variable
	    $post = get_post( $post_id );
	    // Get the post object for the previous post
	    $previous_post = get_previous_post();
	    // Reset our global object
	    $post = $oldGlobal;
	    if ( '' == $previous_post )
	        return 0;
	    return $previous_post->ID;
	}

	function get_next_post_id( $post_id ) {
	    // Get a global post reference since get_adjacent_post() references it
	    global $post;
	    // Store the existing post object for later so we don't lose it
	    $oldGlobal = $post;
	    // Get the post object for the specified post and place it in the global variable
	    $post = get_post( $post_id );
	    // Get the post object for the next post
	    $next_post = get_next_post();
	    // Reset our global object
	    $post = $oldGlobal;
	    if ( '' == $next_post )
	        return 0;
	    return $next_post->ID;
	}



?>
