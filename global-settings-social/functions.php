<?php

	function gws_social_icons($echo = true) {
		$social_links = get_field('social_media_links', 'option');
		if( !$social_links ) {
			return;
		}

		$icons_css = file_get_contents( __DIR__ . '/icons.css' );

		$ret = '';

		$ret .= '<ul class="gws-social-icons">';

		foreach( $social_links as $social_link ) {
			$link = $social_link['link'];
			if( !$link ) {
				continue;
			}

			$url = esc_url( $link['url'] );
			$target = $link['target'] ? $link['target'] : '_blank';
			$title = $link['title'] ? esc_html( $link['title'] ) : '';

			$parsed_url = parse_url( $url );
			$host = $parsed_url['host'] ?? '';
			$host = preg_replace( '/^www\./', '', $host );
			$host_parts = explode( '.', $host );
			$social_network = $host_parts[0] ?? 'link';

			// check icons.css if icon exists
			if( strpos( $icons_css, $social_network ) === false ) {
				$svg = file_get_contents( "https://icons.getbootstrap.com/assets/icons/$social_network.svg" );
				if( $svg ) {
					$style  =  "/* $social_network */\n";
					$style .=  ".gws-social-icon[href*='$social_network']:before {\n";
					$style .=  "	content: '';\n";
					$style .=  "	mask-image: url('data:image/svg+xml;base64," . base64_encode( $svg ) . "');\n";
					$style .=  "	mask-size: contain;\n";
					$style .=  "	mask-repeat: no-repeat;\n";
					$style .=  "	height: 1em;\n";
					$style .=  "	width: 1em;\n";
					$style .=  "	background-color: currentColor;\n";
					$style .=  "	display: inline-block;\n";
					$style .=  "	vertical-align: middle;\n";
					$style .=  "}\n\n";
					file_put_contents( __DIR__ . '/icons.css', $style, FILE_APPEND );
				}
			}

			$ret .= '<a href="' . $url . '" target="' . esc_attr( $target ) . '" class="gws-social-icon" aria-label="' . $title . '">';
		}
		$ret .= '</ul>';

		if ( $echo === true) {
			echo $ret;
		} else {
			return $ret;
		}
	}

	// shortcode [gws_social_icons]
	add_shortcode( 'gws_social_icons', 'gws_social_icons' );

	// gutenberg block gws/social-icons
	function gws_register_social_icons_block() {
		if( ! function_exists( 'acf_register_block_type' ) ) {
			return;
		}
		$block = [
			'title'             => __('GWS Social Icons'),
			'description'       => __('Dieser Block stellt die Social Icons aus den globalen Einstellungen dar.'),
			'keywords'          => array('GWS', 'Social'),

			'category'          => 'widgets',
			'icon'              => 'share',
			'supports'          => array(),
			'mode'              => 'preview', // 'preview' oder 'edit'


			// automatisch generierte Werte
			'name'              => 'gws_social_icons',
			'render_callback'   => 'gws_social_icons',
		];
		acf_register_block_type($block);
	}
	add_action( 'init', 'gws_register_social_icons_block' );

	// ADD-GLOBAL-SETTINGS

	if(defined('GWS_WPT_GLOBALS')) {
		$content = explode("// ADD-GLOBAL-SETTINGS", file_get_contents(__FILE__));
		file_put_contents(__FILE__, $content[0]);

		return;
	};
	define('GWS_WPT_GLOBALS', true);

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

