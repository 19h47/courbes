<?php // phpcs:ignore
/**
 * Bootstraps WordPress theme related functions, most importantly enqueuing javascript and styles.
 *
 * @package WordPress
 * @subpackage Courbes
 */

namespace Courbes;

/**
 * Init
 */
class Init {

	/**
	 * Store all the classes inside an array
	 *
	 * @return array Full list of classes
	 */
	public static function get_services(): array {
		return array(
			Theme::class,
			Setup\Enqueue::class,
			Setup\Context::class,
			Setup\QueryVars::class,
			Setup\Textdomain::class,
			Setup\Twig::class,
			Setup\WordPress::class,
			PostTemplate\BodyClass::class,
			Template\PostStates::class,
			Plugins\ACF\Init::class,
			Plugins\ACF\IncludeFields\BlocksFields::class,
			Plugins\ACF\IncludeFields\FrontPageFields::class,
			Plugins\ACF\IncludeFields\InstagramFields::class,
			Plugins\ACF\IncludeFields\HeaderFields::class,
			Plugins\ACF\Input\AdminEnqueueScripts::class,
			Plugins\ContactForm7\Init::class,
			Vite::class,
			WPEditor::class,
			WPEmbed::class,
			WPImageEditor::class,
			TemplateLoader::class,
			GeneralTemplate::class,
		);
	}


	/**
	 * Loop through the classes, initialize them, and call the run() method if it exists
	 *
	 * @return void
	 */
	public static function run_services(): void {
		foreach ( self::get_services() as $class ) {
			$service = self::instantiate( $class );

			if ( method_exists( $service, 'run' ) ) {
				$service->run();
			}
		}
	}


	/**
	 * Initialize the class
	 *
	 * @param  string $class class name from the services array.
	 * @return object
	 */
	private static function instantiate( string $class ): object {
		return new $class();
	}
}
