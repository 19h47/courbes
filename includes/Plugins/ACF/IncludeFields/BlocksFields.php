<?php // phpcs:ignore
/**
 * Blocks Fields
 *
 * @package WordPress
 * @subpackage Courbes
 */

namespace Courbes\Plugins\ACF\IncludeFields;

/**
 * Blocks Fields
 */
class BlocksFields {
	/**
	 * Runs initialization tasks.
	 *
	 * @return void
	 */
	public function run() {
		add_action( 'acf/include_fields', array( $this, 'fields' ) );
	}

	/**
	 * Registers the field group.
	 *
	 * @return void
	 */
	public function fields() {
		$key            = 'blocks';
		$hide_on_screen = array();

		$location = array();

		$fields = array();

		acf_add_local_field_group(
			array(
				'key'            => 'group_' . $key,
				'title'          => __( 'Blocks Fields', 'courbes' ),
				'fields'         => $fields,
				'location'       => $location,
				'menu_order'     => 1,
				'hide_on_screen' => $hide_on_screen,
			)
		);
	}
}
