<?php
/**
 * Registers a sidebar
 *
 * @since   1.0.0
 * @package Underpin\Abstracts
 */


namespace Underpin\Sidebars\Abstracts;

use Underpin\Traits\Feature_Extension;
use Underpin\Traits\Templates;


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Sidebar
 *
 * @since   1.0.0
 * @package Underpin\Abstracts
 */
abstract class Sidebar {
	use Feature_Extension;

	public $id = '';

	protected $before_widget = '<section id="%1$s" class="widget %2$s">';
	protected $after_widget = '</section>';
	protected $before_title = '<h2 class="widget-title">';
	protected $after_title = '</h2>';

	/**
	 * @inheritDoc
	 */
	public function do_actions() {
		// Register the sidebar.
		register_sidebar(
			[
				'name'          => $this->name,
				'id'            => $this->id,
				'description'   => $this->description,
				'before_widget' => $this->before_widget,
				'after_widget'  => $this->after_widget,
				'before_title'  => $this->before_title,
				'after_title'   => $this->after_title,
			]
		);
	}

	public function __get( $key ) {
		if ( isset( $this->$key ) ) {
			return $this->$key;
		} else {
			return new \WP_Error( 'post_template_param_not_set', 'The batch task key ' . $key . ' could not be found.' );
		}
	}

}