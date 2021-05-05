<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $file ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Sidebar.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Sidebar_Instance.php' );
	Underpin\underpin()->get( $file )->loaders()->add( 'sidebars', [
		'instance' => 'Underpin_Sidebars\Abstracts\Sidebar',
		'default'  => 'Underpin_Sidebars\Factories\Sidebar_Instance',
	] );
} );