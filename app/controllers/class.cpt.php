<?php
if( !class_exists('sage') )
	require_once dirname(__FILE__) . '/class.sage.php';

class sage_cpt extends sage {

	protected function __construct() {
		parent::__construct();
	}

	public function init() {
		$this->register_cpt('ASV Staff', 'ASV Staff' );
		//$this->register_tax( 'article-category', 'article-categories', 'articles' );

	}


	public function register_tax( $tax_name, $tax_name_plural, $post_type, $args = array() ) {

		register_taxonomy(
			$tax_name,
			$post_type,
			array(
				'label' => __( $this::clean_name($tax_name_plural) ),
				#'public' => false,
				'rewrite' => false,
				'hierarchical' => true,
			)
		);
	}


	public function register_cpt( $cpt_name, $cpt_name_plural, $args = array() ) {

		$labels = array(
			'name'                => _x( ucwords($cpt_name_plural), 'Post Type General Name' ),
			'singular_name'       => _x( ucwords($cpt_name) . '', 'Post Type Singular Name' ),
			'menu_name'           => __( ucwords($cpt_name_plural) ),
			'parent_item_colon'   => __( 'Parent ' . ucwords($cpt_name) ),
			'all_items'           => __( 'All ' . ucwords($cpt_name_plural) ),
			'view_item'           => __( 'View ' . ucwords($cpt_name) ),
			'add_new_item'        => __( 'Add New ' . ucwords($cpt_name) ),
			'add_new'             => __( 'Add New' ),
			'edit_item'           => __( 'Edit ' . ucwords($cpt_name) ),
			'update_item'         => __( 'Update ' . ucwords($cpt_name) ),
			'search_items'        => __( 'Search ' . ucwords($cpt_name) ),
			'not_found'           => __( 'Not found' ),
			'not_found_in_trash'  => __( 'Not found in Trash' ),
		);
		$defaults = array(
			'label'               => __( $cpt_name_plural ),
			'description'         => __( ucwords($cpt_name) . ' Description' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'taxonomies'          => array( /*'category', 'post_tag'*/ ),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-admin-post',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		$args = wp_parse_args( $args, $defaults );
		register_post_type( ucwords( str_replace(' ', '-', $cpt_name_plural) ), $args );

	}


	public static function clean_name( $str ) {
		return ucwords(str_replace( '-', ' ', $str ));
	}

}

add_action( 'init', array(sage_cpt::get_instance(), 'init') );