<?php // phpcs:ignore
/**
 * Instagram Fields
 *
 * @package WordPress
 * @subpackage Courbes
 */

namespace Courbes\Plugins\ACF\IncludeFields;

/**
 * Instagram Fields
 */
class InstagramFields {
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
		$key            = 'instagram';
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
				'label'      => __( 'Instagram', 'courbes' ),
				'name'       => 'instagram',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'          => 'field_' . $key . '_images',
						'label'        => __( 'Images', 'courbes' ),
						'name'         => 'images',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => __( 'Add Image', 'courbes' ),
						'sub_fields'   => array(
							array(
								'key'             => 'field_' . $key . '_images_image',
								'label'           => __( 'Image', 'courbes' ),
								'name'            => 'image',
								'type'            => 'image',
								'return_format'   => 'id',
								'library'         => 'all',
								'preview_size'    => 'medium',
								'parent_repeater' => 'field_' . $key . '_images',
							),
							array(
								'key'             => 'field_' . $key . '_images_link',
								'label'           => __( 'Link', 'courbes' ),
								'name'            => 'link',
								'type'            => 'url',
								'parent_repeater' => 'field_' . $key . '_images',
							),
						),
					),
				),
			),
		);

		acf_add_local_field_group(
			array(
				'key'            => 'group_' . $key,
				'title'          => __( 'Instagram Fields', 'courbes' ),
				'fields'         => $fields,
				'location'       => $location,
				'menu_order'     => 0,
				'hide_on_screen' => $hide_on_screen,
			)
		);
	}
}
