<?php
/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function () {

	wp_enqueue_style( 'aeffchen-style', get_stylesheet_uri(), [], AEFF_VERSION );

	// wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', [], null, true );
	// wp_enqueue_script( 'alpine', 'https://unpkg.com/alpinejs', [ 'swiper' ], null, false );
	// wp_enqueue_script( 'aeff', THEME_URL . '/js/app.js', [ 'swiper' ], AEFF_VERSION, true );

} );

add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) {
	if ( $handle === 'alpine' ) {
//		if (false === stripos($tag, 'defer')) {
//
//			$tag = str_replace(' src', ' async="async" src', $tag);
//
//		}
		if ( false === stripos( $tag, 'defer' ) ) {

			$tag = str_replace( '<script ', '<script defer ', $tag );

		}
	}

	return $tag;
}, 10, 3 );