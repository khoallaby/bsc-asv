<?php
if( !defined('ABSPATH') ) exit;

class sage {
	private static $homepage_id;
	private static $instance = array();

	protected function __construct() {
		self::$homepage_id = get_option( 'page_on_front' );
	}

	public static function get_instance() {
		$c = get_called_class();
		if ( !isset( self::$instance[$c] ) ) {
			self::$instance[$c] = new $c();
			self::$instance[$c]->init();
		}
		return self::$instance[$c];
	}

	public function init() {
		add_action( 'after_setup_theme', array( $this, 'theme_setup' ) );
		add_action( 'init', array( $this, 'add_excerpts' ) );

	}



	function theme_setup() {
        add_image_size( 'small', 480, 0 );
        add_image_size( 'featured-image-blog', 855, 0 );
        add_image_size( 'staff-thumbnail', 135, 135, true );

		// replace default image sizes
		if( get_option( 'medium_size_w' ) == 300 && get_option( 'medium_size_h' ) == 300 ) {
			update_option( 'medium_size_w', 768, true );
			update_option( 'medium_size_h', 0, true );
		}
		if( get_option( 'large_size_w' ) == 1024 && get_option( 'large_size_h' ) == 1024 ) {
			update_option( 'large_size_w', 1170, true );
			update_option( 'large_size_h', 0, true );
		}

	}


	public function get_responsive_image( $post_id, $size = 'medium', $attr ) {
		$defaults = array (
			'col-xs' => 12,
			'col-sm' => 6,
			'col-md' => 4,
			'fluid' => false,
			'gutter' => '15px',
			'class' => 'img-responsive',
			'srcset' => '',
			'sizes' => ''
		);
		$attr = wp_parse_args( $attr, $defaults );

		# todo: set up srcset/sizes
		return get_the_post_thumbnail( $post_id, $size, $attr );

	}



	public static function get( $var ) {
		return self::$$var;
	}



	public static function get_query( $post_type = 'post', $args = array() ) {
		$defaults = array (
			'post_type'      => array( $post_type ),
			'post_status'    => array( 'publish' ),
			'posts_per_page' => - 1,
			'order'          => 'DESC',
			'orderby'        => 'post_date'
		);

		$args = wp_parse_args( $args, $defaults );
		$query = new WP_Query( $args );

		return $query;
	}


	public static function get_posts( $post_type = 'post', $args = array() ) {
		$query = self::get_query( $post_type, $args );
		return $query->get_posts();
	}


	/**
	 * Gets the ACF social media links
	 *
	 * @param bool $links   Return as html anchor links, else returns raw ACF output
	 */
	public function get_social_media_links( $links = true ) {
		$social_icons = get_field( 'social_media_links', 'option' );
		if( $links ) {
			$html = '';
			foreach ( (array) $social_icons as $social_icon ) {
				$target = isset( $social_icon['new_window'] ) ? ' target="' . $social_icon['new_window'] . '"' : '';
				$html .=  '<a href="' . $social_icon['link'] . '"' . $target . '><i class="fa ' . $social_icon['icon'] . ' fa-fw"></i></a>';
			}
			return $html;
		} else {
			return $social_icons;
		}
	}


	public function print_social_media_links() {
		echo $this->get_social_media_links();
	}



	function add_excerpts() {
		add_post_type_support( 'page', 'excerpt' );
	}
}


add_action( 'plugins_loaded', array( sage::get_instance(), 'init' ));
