<?php
/**
 * 404
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Courbes
 * @since 0.0.0
 */

use Timber\{ Timber };

$templates    = array( 'pages/404.html.twig' );
$data         = Timber::context();
$data['post'] = array(
	'title'   => __( 'Oops! That page can&rsquo;t be found.', 'courbes' ),
	'content' => '<p>' . __( 'It looks like nothing was found at this location.', 'courbes' ) . '</p>',
);

Timber::render( $templates, $data );
