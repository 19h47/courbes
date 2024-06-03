<?php // phpcs:ignore
/**
 * Init
 *
 * @package WordPress
 * @subpackage Courbes/Plugins/ACF
 */

namespace Courbes\Plugins\ACF;

/**
 * Init
 */
class Init {
	/**
	 * Runs initialization tasks.
	 *
	 * @return void
	 */
	public function run() {
		add_action( 'acf/init', array( $this, 'init' ) );
	}

	/**
	 * Admin head
	 */
	public function init() {
		acf_add_options_page(
			array(
				'page_title' => __( 'Theme Settings', 'courbes' ),
				'menu_slug'  => 'theme-settings',
				'menu_title' => __( 'Theme Settings', 'courbes' ),
				'position'   => '',
				'redirect'   => false,
				'menu_icon'  => array(
					'type'  => 'dashicons',
					'value' => 'dashicons-admin-home',
				),
				'icon_url'   => 'dashicons-admin-home',
			)
		);
	}
}
