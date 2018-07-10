<?php
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'softmakeup' ),
		'social'  => __( 'Social Links Menu', 'softmakeup' ),
	) );
	function sofimakeup_scripts() {
		//include css
		wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css' );
		wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );
		wp_enqueue_style( 'superslides', get_template_directory_uri() . '/css/superslides.css' );
		wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
		wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css' );

		//include js

		wp_enqueue_script( 'jquery-1.11.1.min', get_template_directory_uri() . '/js/jquery-1.11.1.min.js' );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js' );
		wp_enqueue_script( 'superslides', get_template_directory_uri() . '/js/jquery.superslides.js' );
		wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js' );
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js' );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' );


	}

	add_action( 'wp_enqueue_scripts', '__return_empty_array' );
	add_action( 'wp_enqueue_scripts', 'sofimakeup_scripts' );


	add_action( 'init', 'banner_index' );
	function banner_index() {

		register_post_type( 'slider', array(
			'public'        => true,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'menu_position' => 120,
			'menu_icon'     => admin_url() . 'images/media-button-other.gif',
			'labels'        => array(
				'name'         => 'Слайдер',
				'all_items'    => 'Все слайды',
				'add_new'      => 'Дбавить новый слайд',
				'add_new_item' => 'Новый слайд'
			)
		) );
	}


	add_filter( 'the_content', 'filter_function_remove_p' );
	function filter_function_remove_p( $content ) {
		//
		if ( is_home() ) :
			$content = preg_replace( '/<p>|<\/p>/ ', '', $content );
			$content = preg_replace( '/class=".*"/Uism ', '', $content );
			$content = preg_replace( '/width=".*"/Uism ', '', $content );
			$content = preg_replace( '/height=".*"/Uism ', '', $content );
			$content = preg_replace( '/sizes=".*"/Uism ', '', $content );

			return $content;
		endif;
		if ( is_page() ) :
			$content = preg_replace( '/<dl.*>|<dt.*>/Uism', '', $content );
			$content = preg_replace( '/<a.*">/Uism', '<li>', $content );

			$content = preg_replace( '/<\/a>/Uism', '</li>', $content );
			$content = preg_replace( '/<\/dt><\/dl>/Uism', '', $content );


			return $content;
		endif;

		return $content;
	}
//	add_filter( 'use_default_gallery_style', '__return_false' );
//	add_filter('post_gallery', 'my_post_gallery', 10, 2);
	function my_post_gallery($output, $attr) {
		global $post;

		if (isset($attr['orderby'])) {
			$attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
			if (!$attr['orderby'])
				unset($attr['orderby']);
		}

		extract(shortcode_atts(array(
			'order' => 'ASC',
			'orderby' => 'menu_order ID',
			'id' => $post->ID,
			'itemtag' => '',
			'icontag' => '',
			'captiontag' => '',
			'columns' => 3,
			'size' => 'thumbnail',
			'include' => '',
			'exclude' => ''
		), $attr));

		$id = intval( $id);
		if ('RAND' == $order) $orderby = 'none';

		if (!empty($include)) {
			$include = preg_replace('/[^0-9,]+/', '', $include);
			$_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

			$attachments = array();
			foreach ($_attachments as $key => $val) {
				$attachments[$val->ID] = $_attachments[$key];
			}
		}

		if (empty($attachments)) return '';

		// Here's your actual output, you may customize it to your need
//		$output = "<div class=\"slideshow-wrapper\">\n";
//		$output .= "<div class=\"preloader\"></div>\n";
//		$output .= "<ul data-orbit>\n";
		$output='';
		// Now you loop through each attachment
		foreach ($attachments as $id => $attachment) {
			// Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
			$img = wp_get_attachment_image_src($id, 'full');

			$output .= "<li style=\"width: 1110px; float: left; display: block;\"> \n";
			$output .= "<img src=\"{$img[0]}\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" />\n";
			$output .= "</li>\n";
		}

//		$output .= "</ul>\n";
//		$output .= "</div>\n";

		return $output;
	}

?>