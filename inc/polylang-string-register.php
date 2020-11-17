<?php

	/*
	    POLY LANG TRANSLATION FILE
		------------------------------------------
	*/

	// require translation words file
	require get_template_directory() . '/inc/templates/poly-lang-translations-words.php';


	/**
	 * Output's localized string if polyLang exists or output's not translated one as a fallback
	 *  @param $string
	 */
	function pl_e( $string = '' ) {
		if ( function_exists( 'pll_e' ) ) {
			pll_e( $string );
		} else if ( function_exists( 'pll__' ) ) {
			echo pll__( $string );
		} else {
			echo $string;
		}
	}


	function pll_( $string = '' ) {
		if ( function_exists( 'pll__' ) ) {
			return pll__( $string );
		}
	}


	function yes_idea_add_to_poly_lang_register() {
		global $translationWords;
		if ( function_exists( 'pll_register_string' ) && !empty( $translationWords ) ) {
			foreach( $translationWords as $word ) {
				pll_register_string( '', $word, 'yes-soft', false );
			}
		}
	}
	add_action( 'after_setup_theme', 'yes_idea_add_to_poly_lang_register' );

