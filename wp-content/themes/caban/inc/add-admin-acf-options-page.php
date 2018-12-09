<?php

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' => 'Caban General Options',
			'menu_title' => 'Caban Options',
			'menu_slug' => 'caban-general-options',
			'capability' => 'edit_posts'
		));
	}
