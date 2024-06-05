<?php // phpcs:ignore
/**
 * Front Page Fields
 *
 * @package WordPress
 * @subpackage Courbes
 */

namespace Courbes\Plugins\ACF\IncludeFields;

/**
 * Front Page Fields
 */
class FrontPageFields {
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
		$key            = 'front_page';
		$hide_on_screen = array( 'the_content' );

		$location = array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		);

		$fields = array(
			array(
				'key'   => 'field_' . $key . '_hero_tab',
				'label' => __( 'Hero', 'courbes' ),
				'type'  => 'tab',
			),
			array(
				'key'        => 'field_' . $key . '_hero',
				'label'      => 'Hero',
				'name'       => 'hero',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'         => 'field_' . $key . '_hero_title',
						'label'       => __( 'Title', 'courbes' ),
						'name'        => 'title',
						'type'        => 'textarea',
						'rows'        => 2,
						'placeholder' => __( 'Title', 'courbes' ),
					),
					array(
						'key'           => 'field_' . $key . '_hero_background_image',
						'label'         => __( 'Background Image', 'courbes' ),
						'name'          => 'background_image',
						'type'          => 'image',
						'return_format' => 'id',
						'library'       => 'all',
						'preview_size'  => 'medium',
					),
					array(
						'key'           => 'field_' . $key . '_hero_link',
						'label'         => __( 'Link', 'courbes' ),
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
			array(
				'key'   => 'field_' . $key . '_cares_tab',
				'label' => __( 'Cares', 'courbes' ),
				'type'  => 'tab',
			),
			array(
				'key'        => 'field_' . $key . '_cares',
				'label'      => __( 'Cares', 'courbes' ),
				'name'       => 'cares',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'         => 'field_' . $key . '_cares_title',
						'label'       => __( 'Title', 'courbes' ),
						'name'        => 'title',
						'type'        => 'text',
						'placeholder' => __( 'Title', 'courbes' ),
					),
					array(
						'key'          => 'field_' . $key . '_cares_items',
						'label'        => __( 'Items', 'courbes' ),
						'name'         => 'items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => __( 'Add Item', 'courbes' ),
						'sub_fields'   => array(
							array(
								'key'             => 'field_' . $key . '_cares_items_title',
								'label'           => __( 'Title', 'courbes' ),
								'name'            => 'title',
								'type'            => 'text',
								'placeholder'     => __( 'Title', 'courbes' ),
								'parent_repeater' => 'field_' . $key . '_cares_items',
							),
							array(
								'key'             => 'field_' . $key . '_cares_items_text',
								'label'           => __( 'Text', 'courbes' ),
								'name'            => 'text',
								'type'            => 'textarea',
								'rows'            => 2,
								'placeholder'     => __( 'Text', 'courbes' ),
								'parent_repeater' => 'field_' . $key . '_cares_items',
							),
						),
					),
					array(
						'key'         => 'field_' . $key . '_cares_label',
						'label'       => __( 'Label', 'courbes' ),
						'name'        => 'label',
						'type'        => 'text',
						'placeholder' => __( 'Label', 'courbes' ),
					),
				),
			),
			array(
				'key'   => 'field_' . $key . '_offers_tab',
				'label' => __( 'Offers', 'courbes' ),
				'type'  => 'tab',
			),
			array(
				'key'        => 'field_' . $key . '_offers',
				'label'      => __( 'Offers', 'courbes' ),
				'name'       => 'offers',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'         => 'field_' . $key . '_offers_title',
						'label'       => __( 'Title', 'courbes' ),
						'name'        => 'title',
						'type'        => 'textarea',
						'rows'        => 2,
						'placeholder' => __( 'Title', 'courbes' ),
					),
					array(
						'key'           => 'field_' . $key . '_offers_background_image',
						'label'         => __( 'Background Image', 'courbes' ),
						'name'          => 'background_image',
						'type'          => 'image',
						'return_format' => 'id',
						'library'       => 'all',
						'preview_size'  => 'medium',
					),
					array(
						'key'        => 'field_' . $key . '_offers_offers',
						'label'      => __( 'Offers', 'courbes' ),
						'name'       => 'offers',
						'type'       => 'group',
						'layout'     => 'block',
						'sub_fields' => array(
							array(
								'key'         => 'field_' . $key . '_offers_offers_0',
								'label'       => __( 'Offer', 'courbes' ),
								'name'        => 0,
								'type'        => 'textarea',
								'wrapper'     => array(
									'width' => 4 / 12 * 100,
								),
								'rows'        => 3,
								'placeholder' => __( 'Offer', 'courbes' ),
							),
							array(
								'key'         => 'field_' . $key . '_offers_offers_1',
								'label'       => __( 'Offer', 'courbes' ),
								'name'        => 1,
								'type'        => 'textarea',
								'wrapper'     => array(
									'width' => 4 / 12 * 100,
								),
								'rows'        => 3,
								'placeholder' => __( 'Offer', 'courbes' ),
							),
							array(
								'key'         => 'field_' . $key . '_offers_offers_2',
								'label'       => __( 'Offer', 'courbes' ),
								'name'        => 2,
								'type'        => 'textarea',
								'wrapper'     => array(
									'width' => 4 / 12 * 100,
								),
								'rows'        => 3,
								'placeholder' => __( 'Offer', 'courbes' ),
							),
						),
					),
					array(
						'key'        => 'field_' . $key . '_offers_texts',
						'label'      => __( 'Texts', 'courbes' ),
						'name'       => 'texts',
						'type'       => 'group',
						'layout'     => 'block',
						'sub_fields' => array(
							array(
								'key'         => 'field_' . $key . '_offers_texts_0',
								'label'       => __( 'Text', 'courbes' ),
								'name'        => 0,
								'type'        => 'textarea',
								'wrapper'     => array(
									'width' => 4 / 12 * 100,
								),
								'rows'        => 3,
								'placeholder' => __( 'Text', 'courbes' ),
							),
							array(
								'key'         => 'field_' . $key . '_offers_texts_1',
								'label'       => __( 'Text', 'courbes' ),
								'name'        => 1,
								'type'        => 'textarea',
								'wrapper'     => array(
									'width' => 4 / 12 * 100,
								),
								'rows'        => 3,
								'placeholder' => __( 'Text', 'courbes' ),
							),
							array(
								'key'         => 'field_' . $key . '_offers_texts_2',
								'label'       => __( 'Text', 'courbes' ),
								'name'        => 2,
								'type'        => 'textarea',
								'wrapper'     => array(
									'width' => 4 / 12 * 100,
								),
								'rows'        => 3,
								'placeholder' => __( 'Text', 'courbes' ),
							),
						),
					),
					array(
						'key'           => 'field_' . $key . '_offers_link',
						'label'         => __( 'Link', 'courbes' ),
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
			array(
				'key'   => 'field_' . $key . '_informations_tab',
				'label' => __( 'Informations', 'courbes' ),
				'type'  => 'tab',
			),
			array(
				'key'        => 'field_' . $key . '_informations',
				'label'      => __( 'Informations', 'courbes' ),
				'name'       => 'informations',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'         => 'field_' . $key . '_informations_opening_hours',
						'label'       => __( 'Opening Hours', 'courbes' ),
						'name'        => 'opening_hours',
						'type'        => 'textarea',
						'rows'        => 5,
						'placeholder' => __( 'Opening Hours', 'courbes' ),
					),
					array(
						'key'         => 'field_' . $key . '_informations_address',
						'label'       => __( 'Address', 'courbes' ),
						'name'        => 'address',
						'type'        => 'text',
						'placeholder' => __( 'Address', 'courbes' ),
					),
					array(
						'key'         => 'field_' . $key . '_informations_mail',
						'label'       => __( 'Mail', 'courbes' ),
						'name'        => 'mail',
						'type'        => 'email',
						'placeholder' => __( 'Mail', 'courbes' ),
					),
					array(
						'key'         => 'field_' . $key . '_informations_phone_number',
						'label'       => __( 'Phone Number', 'courbes' ),
						'name'        => 'phone_number',
						'type'        => 'text',
						'placeholder' => __( 'Phone Number', 'courbes' ),
					),
					array(
						'key'           => 'field_' . $key . '_informations_facebook',
						'label'         => __( 'Facebook', 'courbes' ),
						'name'          => 'facebook',
						'type'          => 'link',
						'return_format' => 'array',
					),
					array(
						'key'           => 'field_' . $key . '_informations_instagram',
						'label'         => __( 'Instagram', 'courbes' ),
						'name'          => 'instagram',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
		);

		acf_add_local_field_group(
			array(
				'key'            => 'group_' . $key,
				'title'          => __( 'Front Page Fields', 'courbes' ),
				'fields'         => $fields,
				'location'       => $location,
				'menu_order'     => 0,
				'hide_on_screen' => $hide_on_screen,
			)
		);
	}
}
