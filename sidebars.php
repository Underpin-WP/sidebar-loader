<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observer( 'sidebars', [
	'update' => function ( Underpin $plugin, $args ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Sidebar.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Sidebar_Instance.php' );
	$plugin->loaders()->add( 'sidebars', [
		'instance' => 'Underpin_Sidebars\Abstracts\Sidebar',
		'default'  => 'Underpin_Sidebars\Factories\Sidebar_Instance',
	] );
	},
] ) );