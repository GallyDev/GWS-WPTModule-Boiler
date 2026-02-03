<?php
	global $remove;
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		?>⚠️ ACF ist nicht aktiviert. Bitte aktiviere ACF Pro bevor du das Modul installierst.
		<?php
		$remove = true;
		return;
	}

	$uniqid = uniqid();
	$group = array(
		'key' => 'gws_global_group_kontakt_'.$uniqid,
		'title' => 'Kontaktdaten',
		'fields' => array(
			array(
				'key' => 'gws_global_field_anschrift_'.$uniqid,
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
				'key' => 'gws_global_field_burozeiten_'.$uniqid,
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
				'key' => 'gws_global_field_email_'.$uniqid,
				'label' => 'E-Mail',
				'name' => 'e-mail',
				'aria-label' => '',
				'type' => 'email',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
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
				'key' => 'gws_global_field_telefon_'.$uniqid,
				'label' => 'Telefon',
				'name' => 'telefon',
				'aria-label' => '',
				'type' => 'text',
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
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
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
	);
	
	acf_add_local_field_group($group);
	acf_import_field_group($group);
