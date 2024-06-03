<?php // phpcs:ignore
/**
 * TemplateLoader
 *
 * @package WordPress
 * @subpackage Courbes/TemplateLoader
 */

namespace Courbes;

/**
 * TemplateLoader
 */
class TemplateLoader {

	/**
	 * Runs initialization tasks.
	 *
	 * @return void
	 */
	public function run(): void {
		add_filter( 'template_include', array( $this, 'template_include' ), 10, 1 );
	}

	/**
	 * Template Include
	 *
	 * @param string $template The path of the template to include.
	 *
	 * @return string
	 */
	function template_include( string $template ) {

		return $template;
	}
}
