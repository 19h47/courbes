<?php // phpcs:ignore
/**
 * WPEditor
 *
 * @package WordPress
 * @subpackage Courbes/WPEditor
 */

namespace Courbes;

/**
 * WPEditor
 */
class WPEditor {

	/**
	 * Runs initialization tasks.
	 *
	 * @return void
	 */
	public function run(): void {
		add_filter( 'tiny_mce_before_init', array( $this, 'tiny_mce_before_init' ), 10, 2 );
	}


	/**
	 * Tiny MCE Before Init
	 *
	 * @param array  $mce_init An array with TinyMCE config.
	 * @param string $editor_id Unique editor identifier, e.g. 'content'. Accepts 'classic-block' when called from block editor’s Classic block.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/tiny_mce_before_init/
	 *
	 * @return array
	 */
	public function tiny_mce_before_init( array $mce_init, string $editor_id ): array {
		$custom_colours = '
    		"5D0524", "Brand primaire",
			"DF0067", "Brand secondaire",
			"F8FCFF", "Brand white blue",
			"131313", "Brand noir",
			"E1E1E1", "Brand gris",
  		';

		$mce_init['textcolor_map'] = '[' . $custom_colours . ']';

		return $mce_init;
	}
}
