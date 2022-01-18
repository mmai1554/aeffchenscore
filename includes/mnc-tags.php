<?php


/**
 * for more readability, we don't want the html code for the components in the function body
 * so we created this wrapper that loads just the html block into the function scope.
 * The naming convention: tags/function_name without mnc  + .php,
 * e.g. render code for mnc_filter_toggler() is in themes/lq-mnc-theme/tags/filter_toggler.php
 *
 * @return false|string
 */
function mnc_render_template() {
	$template      = debug_backtrace( DEBUG_BACKTRACE_IGNORE_ARGS, 2 )[1]['function'];
	$template_name = str_replace( 'mnc_', '', $template );
	$template_name = THEME_DIR . '/tags/' . $template_name . '.php';
	ob_start();
	load_template( $template_name, false );
	$html = ob_get_contents();
	ob_end_clean();

	return $html;
}

function mnc_favorites_toggler() {
	return mnc_render_template();
}

/**
 * @return string
 */
function mnc_get_paginator() {

	global $wp_query;

	if ( !$wp_query  ) {
		return '';
	}

	return get_the_posts_pagination( [
		'mid_size'           => 1,
		'prev_text'          => '«',
		'next_text'          => '»',
		'screen_reader_text' => __( 'Quartier Navigation' ),
		'aria_label'         => __( 'Quartiere' ),
		'class'              => 'pagination',
	] );

}

/**
 * used to inject php boolean in templates for javascript evaluation
 * mostly used by alpine initial states
 *
 * @param $state
 *
 * @return string
 */
function mnc_boolean_as_text( $state ) {
	$state = $state && true;
	if ( $state ) {
		return 'true';
	}
	return 'false';
}


