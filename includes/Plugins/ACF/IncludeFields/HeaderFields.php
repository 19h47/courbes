<?php // phpcs:ignore
/**
 * Header Fields
 *
 * @package WordPress
 * @subpackage Courbes
 */

namespace Courbes\Plugins\ACF\IncludeFields;

/**
 * Header Fields
 */
class HeaderFields {
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
		$key            = 'header';
		$hide_on_screen = array( 'the_content' );

		$location = array(
			array(
				array(
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'theme-settings',
				),
			),
		);

		$fields = array(
			array(
				'key'        => 'field_' . $key,
				'label'      => __( 'Header', 'courbes' ),
				'name'       => 'header',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'         => 'field_' . $key . '_title',
						'label'       => __( 'Title', 'courbes' ),
						'name'        => 'title',
						'type'        => 'text',
						'placeholder' => __( 'Title', 'courbes' ),
					),
					array(
						'key'           => 'field_' . $key . '_link',
						'label'         => __( 'Link', 'courbes' ),
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
		);

		acf_add_local_field_group(
			array(
				'key'            => 'group_' . $key,
				'title'          => __( 'Header Fields', 'courbes' ),
				'fields'         => $fields,
				'location'       => $location,
				'menu_order'     => 0,
				'hide_on_screen' => $hide_on_screen,
			)
		);
	}
}
