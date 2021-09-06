<?php
/**
 * Plugin Name: Intervention Custom Post Type
 * Description: Registers an intervention CPT and custom taxonomies for ProCamp.
 * Author: Joel Yoder
 * Author URI: https://joelyoder.com
 * Version: 1.0.0
 * GitHub Plugin URI: https://github.com/joelyoder/mte-cpt-intervention
 * GitHub Branch: main
 */

function mte_register_cpt_intervention() {

	/**
	 * Post Type: Interventions.
	 */

	$labels = [
		"name" => __( "Interventions", "mte-cpt-intervention" ),
		"singular_name" => __( "Intervention", "mte-cpt-intervention" ),
	];

	$args = [
		"label" => __( "Interventions", "mte-cpt-intervention" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "intervention", "with_front" => true ],
		"query_var" => true,
		"menu_icon" =>  plugins_url( 'assets/intervention-icon.svg', __FILE__ ),
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions" ],
		"show_in_graphql" => false,
	];

	register_post_type( "intervention", $args );
}

add_action( 'init', 'mte_register_cpt_intervention' );

function mte_register_my_taxes() {

	/**
	 * Taxonomy: Domains.
	 */

	$labels = [
		"name" => __( "Domains", "mte-cpt-intervention" ),
		"singular_name" => __( "Domain", "mte-cpt-intervention" ),
	];

	
	$args = [
		"label" => __( "Domains", "mte-cpt-intervention" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'domain', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "domain",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "domain", [ "intervention" ], $args );

	/**
	 * Taxonomy: Methods.
	 */

	$labels = [
		"name" => __( "Methods", "mte-cpt-intervention" ),
		"singular_name" => __( "Method", "mte-cpt-intervention" ),
	];

	
	$args = [
		"label" => __( "Methods", "mte-cpt-intervention" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'method', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "method",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "method", [ "intervention" ], $args );

	/**
	 * Taxonomy: Populations.
	 */

	$labels = [
		"name" => __( "Populations", "mte-cpt-intervention" ),
		"singular_name" => __( "Population", "mte-cpt-intervention" ),
	];

	
	$args = [
		"label" => __( "Populations", "mte-cpt-intervention" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'population', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "population",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "population", [ "intervention" ], $args );

	/**
	 * Taxonomy: Equipment.
	 */

	$labels = [
		"name" => __( "Equipment", "mte-cpt-intervention" ),
		"singular_name" => __( "Equipment", "mte-cpt-intervention" ),
	];

	
	$args = [
		"label" => __( "Equipment", "mte-cpt-intervention" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'equipment', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "equipment",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "equipment", [ "intervention" ], $args );
}
add_action( 'init', 'mte_register_my_taxes' );
