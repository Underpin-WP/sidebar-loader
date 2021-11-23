<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observers\Loader( 'sidebars', [
	'instance' => 'Underpin\Sidebars\Abstracts\Sidebar',
	'default'  => 'Underpin\Sidebars\Factories\Sidebar_Instance',
] ) );