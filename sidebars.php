<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $instance ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Sidebar.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Sidebar_Instance.php' );
	$instance->loaders()->add( 'sidebars', [
		'instance' => 'Underpin_Sidebars\Abstracts\Sidebar',
		'default'  => 'Underpin_Sidebars\Factories\Sidebar_Instance',
	] );
} );