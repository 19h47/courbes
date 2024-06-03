<?php // phpcs:ignore
/**
 * Init
 *
 * @package WordPress
 * @subpackage Courbes/Plugins/ContactForm7/Init
 */

namespace Courbes\Plugins\ContactForm7;

use Timber\{Timber};

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
		remove_action( 'wpcf7_init', 'wpcf7_add_form_tag_submit' );

		add_action( 'wpcf7_init', array( $this, 'add_form_tag_submit' ), 10, 0 );
	}

	public function add_form_tag_submit() {
		wpcf7_add_form_tag( 'submit', array( $this, 'submit_form_tag_handler' ) );
	}

	/**
	 * Submit Form Tag Handler
	 *
	 * @param object $tag Tag.
	 *
	 * @see https://github.com/rocklobster-in/contact-form-7/blob/master/modules/submit.php
	 */
	public function submit_form_tag_handler( $tag ) {
		$class = \wpcf7_form_controls_class( $tag->type, 'has-spinner' );

		$atts = array();

		$atts['class']    = $tag->get_class_option( $class );
		$atts['id']       = $tag->get_id_option();
		$atts['tabindex'] = $tag->get_option( 'tabindex', 'signed_int', true );

		$value = isset( $tag->values[0] ) ? $tag->values[0] : '';

		if ( empty( $value ) ) {
			$value = __( 'Send', 'contact-form-7' );
		}

		$atts['type']  = 'submit';
		$atts['value'] = $value;

		return Timber::compile( 'components/button.html.twig', $atts );
	}
}
