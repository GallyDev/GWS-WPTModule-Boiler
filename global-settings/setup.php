<?php

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		?>⚠️ ACF ist nicht aktiviert. Das Modul wird wieder gelöscht. Bitte aktiviere ACF Pro bevor du das Modul installierst.
		<?php
		rmdir( dirname( __FILE__ ) );
		return;
	}

	acf_add_local_field_group( array(
		'key' => 'group_67ac9688cb615',
		'title' => 'Kontaktdaten',
		'fields' => array(
			array(
				'key' => 'field_67ac9688b04a0',
				'label' => 'Anschrift',
				'name' => 'anschrift',
				'aria-label' => '',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'allow_in_bindings' => 0,
				'rows' => '',
				'placeholder' => '',
				'new_lines' => 'br',
			),
			array(
				'key' => 'field_67ac97c59d02b',
				'label' => 'Bürozeiten',
				'name' => 'burozeiten',
				'aria-label' => '',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'allow_in_bindings' => 0,
				'rows' => '',
				'placeholder' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_67ac96e4b04a1',
				'label' => 'E-Mail',
				'name' => 'e-mail',
				'aria-label' => '',
				'type' => 'email',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'allow_in_bindings' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_67ac96fcb04a2',
				'label' => 'Telefon',
				'name' => 'telefon',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'allow_in_bindings' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_67ac97e79d02c',
				'label' => 'LinkedIn',
				'name' => 'linkedin',
				'aria-label' => '',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'allow_in_bindings' => 0,
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'globale-optionen',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
		'display_title' => '',
	) );

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

