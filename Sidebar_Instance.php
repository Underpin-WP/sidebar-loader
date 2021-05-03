<?php

namespace Underpin_Sidebars\Factories;


use Underpin\Traits\Instance_Setter;
use Underpin_Sidebars\Abstracts\Sidebar;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Sidebar_Instance extends Sidebar {
	use Instance_Setter;

	public function __construct( $args ) {
		$this->set_values( $args );
	}

}