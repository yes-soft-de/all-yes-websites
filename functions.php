<?php

	// Include NavWalker Class For Bootstrap Navigation Menu
	require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
	// Include Enqueue File That Handle 'css/js' and all functions
	require get_template_directory() . '/inc/enqueue.php';
	require get_template_directory() . '/inc/theme-support.php';
	require get_template_directory() . '/inc/custom-post-type.php';
	// Include Ajax File
	require_once get_template_directory() . '/inc/ajax.php';
	// PolyLang Translation File
	require get_template_directory() . '/inc/polylang-string-register.php';
