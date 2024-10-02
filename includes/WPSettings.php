<?php // phpcs:ignore
/**
 * WPSettings
 *
 * @package WordPress
 * @subpackage Courbes
 */

namespace Courbes;

/**
 * WP Settings
 */
class WPSettings {

	/**
	 * Runs initialization tasks.
	 *
	 * @return void
	 */
	public function run(): void {
		add_action( 'after_setup_theme', array( $this, 'register_menus' ) );
	}

	/**
	 * Register nav menus
	 *
	 * @see https://developer.wordpress.org/reference/functions/register_nav_menus/
	 *
	 * @return void
	 */
	public function register_menus(): void {
		register_nav_menus(
			array(
				'legals' => __( 'Legals Menu', 'courbes' ),
			)
		);
	}
}
