<?php
if ( ! defined( 'ABSPATH' ) )
	exit;
if( !class_exists('sage') )
	require_once dirname(__FILE__) . '/class.sage.php';


class sage_gmaps extends sage {
	private static $gmaps_api_key;
	private $acf_api_key = 'google_maps_api_key';


	/**
	 * Checks for api key and registers JS if found
	 * Register api key @ https://console.developers.google.com/apis/credentials
	 */
	public function init() {
		if( $acf_key = get_field( $this->acf_api_key, 'option' ) )
			self::$gmaps_api_key = $acf_key;

		if( self::$gmaps_api_key )
			$this->register_js();

	}




	public function register_js() {
		wp_register_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=' . self::$gmaps_api_key, null, null, true );
		wp_register_script( 'google-maps-sage', get_template_directory_uri() . '/js/google-maps.js',
			array( 'jquery', 'google-maps' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

	public static function enqueue_js() {
		if( self::$gmaps_api_key ) {
			wp_enqueue_script( 'google-maps' );
			wp_enqueue_script( 'google-maps-sage' );
		}
	}


	/**
	 * Returns google maps <iframe> embed code for $address
	 *
	 * https://developers.google.com/maps/documentation/embed/guide
	 *
	 * @param $address
	 * @param array $args {
	 *     @type string $mode             place|directions|search|view|streetview.
	 * }
	 *
	 * @return string   The iframe code
	 */
	public static function embed_iframe( $address, $args = array() ) {

		$defaults = array (
			'mode'      => 'place',
			'height'    => '',
			'width'     => '',
			'id'        => '',
			'class'     => 'acf-map',
		);
		$args = wp_parse_args( $args, $defaults );

		$url = sprintf( 'https://www.google.com/maps/embed/v1/%s?key=%s&q=%s',
			esc_attr( $args['mode'] ),
			esc_attr( self::$gmaps_api_key ),
			urlencode( $address )
		);

		return sprintf( '<iframe %s %s frameborder="0" id="%s" class="%s" src="%s" allowfullscreen></iframe>',
			!empty( $args['width'] ) ? 'width="' . esc_attr( $args['width'] ) . '" ' : '',
			!empty( $args['height'] ) ? 'height="' . esc_attr( $args['height'] ) . '" ' : '',
			esc_attr( $args['id'] ),
			esc_attr( $args['class'] ),
			esc_html( $url )
		);
	}

}


add_action( 'plugins_loaded', array( sage_gmaps::get_instance(), 'init' ));
