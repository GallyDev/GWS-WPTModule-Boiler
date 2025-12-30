<?php

	add_action( 'acf/init', function() {
		acf_add_options_page( array(
			'page_title' => 'Globale Optionen',
			'menu_slug' => 'globale-optionen',
			'menu_title' => 'Globales',
			'position' => 2,
			'redirect' => false,
			'menu_icon' => array(
				'type' => 'dashicons',
				'value' => 'dashicons-visibility',
			),
			'icon_url' => 'dashicons-visibility',
		) );
	} );

