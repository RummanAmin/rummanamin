<?php

	// Hide Wordpress Version
	remove_action('wp_head', 'wp_generator');
	add_theme_support( "title-tag" );
	add_editor_style();

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

  // Add Main Menu
	add_theme_support( 'menus' );

  function register_theme_menus() {
  	register_nav_menus(

  		array(
  			'main-menu' => _( 'Main Menu' ),
  			'mobile-menu' => _( 'Mobile Menu' ),
  			'social-menu' => _( 'Social Menu' )
  		)

  	);
  }

  add_action( 'init', 'register_theme_menus' );

  // Add CSS Files
	function wpt_theme_styles() {
		wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css?family=Catamaran:600,800|Roboto:400,400i,700' );
		wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css' );

	}

	add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

	// Add JS Files
	function wpt_theme_js() {

		wp_enqueue_script( 'modernizr_min_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', '', '', false );
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

	}

	add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

	// Comment Reply
	function rummanamin_enqueue_comment_reply() {
    // on single blog post pages with comments open and threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      // enqueue the javascript that performs in-link comment reply fanciness
      wp_enqueue_script( 'comment-reply' );
    }
	}
	// Hook into wp_enqueue_scripts
	add_action( 'wp_enqueue_scripts', 'rummanamin_enqueue_comment_reply' );


	// Remove Image Attributes
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}

	// Featured Image
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'project-thumb', 960, 400, true );
	add_image_size( 'post-thumb', 684, 552, true );

	// Add class to Post Images
	function my_content_filter($content) {
    return preg_replace('|<p>(<img[^<]*)</p>|i', '<p class="foo">${1}</p>', $content);
	}
	add_filter('the_content', 'my_content_filter');

	// Custom Excerpt Length
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// Register widget area
	function rummanamin_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Widget Area', 'rummanamin' ),
			'id'            => 'sidebar',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'rummanamin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}
	add_action( 'widgets_init', 'rummanamin_widgets_init' );

	// Project Taxonomy Fix
	function wpa_cpt_tags( $query ) {
	    if ( $query->is_tag() && $query->is_main_query() ) {
	        $query->set( 'post_type', array( 'post', 'project', 'object' ) );
	    }
	}
	add_action( 'pre_get_posts', 'wpa_cpt_tags' );

	function wpa_cpt_category( $query ) {
	    if ( $query->is_category() && $query->is_main_query() ) {
	        $query->set( 'post_type', array( 'post', 'project', 'object' ) );
	    }
	}
	add_action( 'pre_get_posts', 'wpa_cpt_category' );

	// Remove the slug from published post permalinks.
	function custom_remove_cpt_slug( $post_link, $post, $leavename ) {
	  if ( 'project' != $post->post_type || 'publish' != $post->post_status ) {
	      return $post_link;
	  }
	  $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
	  return $post_link;
	}

	add_filter( 'post_type_link', 'custom_remove_cpt_slug', 10, 3 );

	/**
	 * Some hackery to have WordPress match postname to any of our public post types
	 * All of our public post types can have /post-name/ as the slug, so they better be unique across all posts
	 * Typically core only accounts for posts and pages where the slug is /post-name/
	 */
	function custom_parse_request_tricksy( $query ) {

	    // Only noop the main query
	    if ( ! $query->is_main_query() )
	        return;

	    // Only noop our very specific rewrite rule match
	    if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
	        return;
	    }

	    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
	    if ( ! empty( $query->query['name'] ) ) {
	        $query->set( 'post_type', array( 'post', 'project', 'page' ) );
	    }
	}
	add_action( 'pre_get_posts', 'custom_parse_request_tricksy' );

?>
