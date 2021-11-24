<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observers\Loader( 'sidebars', [
	'abstraction_class' => 'Underpin\Sidebars\Abstracts\Sidebar',
	'default_factory'  => 'Underpin\Sidebars\Factories\Sidebar_Instance',
] ) );