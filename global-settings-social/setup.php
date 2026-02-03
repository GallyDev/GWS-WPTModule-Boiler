<?php
	global $remove;
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		?>⚠️ ACF ist nicht aktiviert. Bitte aktiviere ACF Pro bevor du das Modul installierst.
		<?php
		$remove = true;
		return;
	}


	$group = array(
		'key' => 'gws_global_group_social_media',
		'title' => 'Social Media Icons',
		'fields' => array(
			array(
				'key' => 'gws_global_field_social_media_links',
				'label' => 'Social Media Links',
				'name' => 'social_media_links',
				'aria-label' => '',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'table',
				'pagination' => 0,
				'min' => 0,
				'max' => 0,
				'collapsed' => '',
				'button_label' => 'Eintrag hinzufügen',
				'rows_per_page' => 20,
				'sub_fields' => array(
					array(
						'key' => 'gws_global_field_social_media_link',
						'label' => 'Social Media Link',
						'name' => 'link',
						'aria-label' => '',
						'type' => 'link',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'allow_in_bindings' => 0,
						'parent_repeater' => 'gws_global_field_social_media_links',
					),
				),
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


