<?php // phpcs:ignore
/**
 * General Template
 *
 * @package WordPress
 * @subpackage Courbes/GeneralTemplate
 */

namespace Courbes;

/**
 * General Template
 */
class GeneralTemplate {

	/**
	 * Runs initialization tasks.
	 *
	 * @return void
	 */
	public function run(): void {
		add_filter( 'wp_head', array( $this, 'wp_head' ), 10, 0 );
	}

	/**
	 * @see https://developer.wordpress.org/reference/hooks/wp_head/
	 */
	function wp_head(  ) {

		echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
		echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
	}
}
