<?php
//Test to import stylesheet of childoftwentytwelve>

define('child_template_directory', dirname( get_bloginfo('stylesheet_url')) );

function bootstrapping() {
	wp_enqueue_script( 'latest_jquery', esc_url_raw( 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js' ), array('jquery'), true );

	wp_enqueue_script(
		'respond.js',
		get_theme_root_uri() . '/mindtrainer/bootstrap/js/respond.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'bootstrap.min.js',
		get_theme_root_uri() . '/mindtrainer/bootstrap/js/bootstrap.min.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'custom_jquery_scripts.js',
		get_theme_root_uri() . '/mindtrainer/js/custom_jquery_scripts.js',
		array( 'jquery' )
	);
	// ELINS SCRIPT
	// wp_enqueue_script( 'latest_jquery', esc_url_raw( 'https://code.jquery.com/jquery-latest.min.js' ), array('jquery'), true );


	// FONTAWESOME
	wp_enqueue_style( 'fontawesome', esc_url_raw( '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' ), array(), null );

	//ENQUEING GOOGLE STUFF
	wp_enqueue_style( 'roboto_font', esc_url_raw( 'https://fonts.googleapis.com/css?family=Roboto:100,300,700,400' ), array(), null );
	wp_enqueue_style( 'mdl_font', esc_url_raw( 'https://fonts.googleapis.com/icon?family=Material+Icons' ), array(), null );
	wp_enqueue_style( 'mdl_lime_blue', esc_url_raw( 'https://storage.googleapis.com/code.getmdl.io/1.0.0/material.lime-light_blue.min.css' ), array(), null );
	wp_enqueue_script( 'mdl_script', esc_url_raw( 'https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js' ), array(), null );
}
add_action('wp_enqueue_scripts', 'bootstrapping');

// wp_enqueue_script( 'latest_jquery', esc_url_raw( 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js' ), array('jquery'), true );


// ------------------
//   SUPPORT FOR SVG
// ------------------
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// ------------------------
// REMOVE THEME SUPPORT FROM TWENTYTWELVE
// ---------------------------------------



 //  --------------------------
 //   MINDTRAINER INFORMATION
 //  --------------------------
function mindtrainer_customize_register($wp_customize){

	$wp_customize->add_section('mindtrainer_information', array(
		'title'    => __('Generel Information', 'mindtrainer'),
		'description' => '',
		'priority' => 5,
	));

 //  NAME
	$wp_customize->add_setting('name_textbox', array(
		'default'        => 'Name',
	));

	$wp_customize->add_control('name_textbox', array(
		'label'      => 'Name',
		'section'    => 'mindtrainer_information',
		  'type' 		 => 'text',
	)
 );
  //  TITLE
	$wp_customize->add_setting(
	'title_textbox',
	array(
		'default' => 'Psykolog',
	)
);
  $wp_customize->add_control(
	'title_textbox',
	array(
		'label' => 'Your title',
		'section' => 'mindtrainer_information',
		'type' => 'text',
	)
);
	//  ADDRESS
  $wp_customize->add_setting(
	'address_textbox',
	array(
		'default' => 'Wallaby Way, Sydney',
	)
);
  $wp_customize->add_control(
	'address_textbox',
	array(
		'label' => 'Address',
		'section' => 'mindtrainer_information',
		'type' => 'text',
	)
);

	  //  ZIPCODE
  $wp_customize->add_setting(
	'zipcode_textbox',
	array(
		'default' => '2200, Nørrebro',
	)
);
  $wp_customize->add_control(
	'zipcode_textbox',
	array(
		'label' => 'Zipcode & Area',
		'section' => 'mindtrainer_information',
		'type' => 'text',
	)
);

	  //  TELEPHONE
  $wp_customize->add_setting(
	'telephone_textbox',
	array(
		'default' => '+45 5555 1234',
	)
);
  $wp_customize->add_control(
	'telephone_textbox',
	array(
		'label' => 'Telephone No.',
		'section' => 'mindtrainer_information',
		'type' => 'text',
	)
);

	  //  EMAIL
  $wp_customize->add_setting(
	'email_textbox',
	array(
		'default' => 'contact@email.com',
	)
);
  $wp_customize->add_control(
	'email_textbox',
	array(
		'label' => 'Email Address',
		'section' => 'mindtrainer_information',
		'type' => 'text',
	)
);

	  //  CVR. NUMBER
  $wp_customize->add_setting(
	'cvr_textbox',
	array(
		'default' => '12345678',
	)
);
  $wp_customize->add_control(
	'cvr_textbox',
	array(
		'label' => 'CVR Number',
		'section' => 'mindtrainer_information',
		'type' => 'text',
	)
);

	  //  TAGLINE
	$wp_customize->add_setting(
	'tagline_textbox',
	array(
		'default' => 'For dig, der vil være den bedste udgave af dig, så du udlever dit potentiale, dine værdier og dine ønsker.',
	)
);
  $wp_customize->add_control(
	'tagline_textbox',
	array(
		'label' => 'Tagline',
		'section' => 'mindtrainer_information',
		'type' => 'textarea',
	)
);

		  //  TAGLINE BULLET 1
	$wp_customize->add_setting(
	'tagline_bullet_1',
	array(
		'default' => 'Dit potentiale',
	)
);
  $wp_customize->add_control(
	'tagline_bullet_1',
	array(
		'label' => 'Tagline: Bullet 1',
		'section' => 'mindtrainer_information',
		'type' => 'text',
	)
);

			  //  TAGLINE BULLET 2
	$wp_customize->add_setting(
	'tagline_bullet_2',
	array(
		'default' => 'Dine værdier',
	)
);
  $wp_customize->add_control(
	'tagline_bullet_2',
	array(
		'label' => 'Tagline: Bullet 2',
		'section' => 'mindtrainer_information',
		'type' => 'text',
	)
);

			  //  TAGLINE BULLET 3
	$wp_customize->add_setting(
	'tagline_bullet_3',
	array(
		'default' => 'Dine ønsker',
	)
);
  $wp_customize->add_control(
	'tagline_bullet_3',
	array(
		'label' => 'Tagline: Bullet 3',
		'section' => 'mindtrainer_information',
		'type' => 'text',
	)
);


}

add_action('customize_register', 'mindtrainer_customize_register');

function mindtrainer_theme_customizer( $wp_customize ) {

	$wp_customize->add_section( 'mindtrainer_logo_section' , array(
	'title'       => __( 'Mindtrainer-logoer', 'mindtrainer' ),
	'priority'    => 6,
	'description' => 'Custom Logos for the Mindtrainer Theme',
) );

	$wp_customize->add_setting( 'mindtrainer_small_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mindtrainer_small_logo', array(
	'label'    => __( 'Lille firkantet logo', 'mindtrainer' ),
	'section'  => 'mindtrainer_logo_section',
	'settings' => 'mindtrainer_small_logo',
) ) );

	$wp_customize->add_setting( 'mindtrainer_logo_title' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mindtrainer_logo_title', array(
	'label'    => __( 'Logo-titel (kun navnet)', 'mindtrainer' ),
	'section'  => 'mindtrainer_logo_section',
	'settings' => 'mindtrainer_logo_title',
) ) );

	// VIRKSOMHEDER-SEKTION

	$wp_customize->add_section( 'corporate_logo_section' , array(
	'title'       => __( 'Virksomheder', 'mindtrainer' ),
	'priority'    => 7,
	'description' => 'Virksomhedslogoer til Mindtrainer-samarbejder',
) );

	// TITLE FOR COOPERATION WITH COMPANIES

	$wp_customize->add_setting(
	'virksomheder_title',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'virksomheder_title',
	array(
		'label' => 'Overskrift til samarbejde',
		'section' => 'corporate_logo_section',
		'type' => 'text',
	)
);

	// CORPORATE LOGO 01
$wp_customize->add_setting( 'mindtrainer_corporate_01' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mindtrainer_coporate_01', array(
	'label'    => __( '1. virksomhed', 'mindtrainer' ),
	'section'  => 'corporate_logo_section',
	'settings' => 'mindtrainer_corporate_01',
) ) );

		 $wp_customize->add_setting(
	'corporate_link_01',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'corporate_link_01',
	array(
		'label' => 'Hjemmeside for 1. virksomhed - uden https://',
		'section' => 'corporate_logo_section',
		'type' => 'text',
	)
);

	// CORPORATE LOGO 02
$wp_customize->add_setting( 'mindtrainer_corporate_02' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mindtrainer_coporate_02', array(
	'label'    => __( '2. virksomhed', 'mindtrainer' ),
	'section'  => 'corporate_logo_section',
	'settings' => 'mindtrainer_corporate_02',
) ) );

			 $wp_customize->add_setting(
	'corporate_link_02',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'corporate_link_02',
	array(
		'label' => 'Hjemmeside for 2. virksomhed - uden https://',
		'section' => 'corporate_logo_section',
		'type' => 'text',
	)
);

	// CORPORATE LOGO 03

$wp_customize->add_setting( 'mindtrainer_corporate_03' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mindtrainer_coporate_03', array(
	'label'    => __( '3. virksomhed', 'mindtrainer' ),
	'section'  => 'corporate_logo_section',
	'settings' => 'mindtrainer_corporate_03',
) ) );

			 $wp_customize->add_setting(
	'corporate_link_03',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'corporate_link_03',
	array(
		'label' => 'Hjemmeside for 3. virksomhed - uden https://',
		'section' => 'corporate_logo_section',
		'type' => 'text',
	)
);

	// CORPORATE LOGO 04

$wp_customize->add_setting( 'mindtrainer_corporate_04' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mindtrainer_coporate_04', array(
	'label'    => __( '4. virksomhed', 'mindtrainer' ),
	'section'  => 'corporate_logo_section',
	'settings' => 'mindtrainer_corporate_04',
) ) );

			 $wp_customize->add_setting(
	'corporate_link_04',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'corporate_link_04',
	array(
		'label' => 'Hjemmeside for 4. virksomhed - uden https://',
		'section' => 'corporate_logo_section',
		'type' => 'text',
	)
);

		// CORPORATE LOGO 05

$wp_customize->add_setting( 'mindtrainer_corporate_05' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mindtrainer_coporate_05', array(
	'label'    => __( '5. virksomhed', 'mindtrainer' ),
	'section'  => 'corporate_logo_section',
	'settings' => 'mindtrainer_corporate_05',
) ) );

			 $wp_customize->add_setting(
	'corporate_link_05',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'corporate_link_05',
	array(
		'label' => 'Hjemmeside for 5. virksomhed - uden https://',
		'section' => 'corporate_logo_section',
		'type' => 'text',
	)
);

			// CORPORATE LOGO 06

$wp_customize->add_setting( 'mindtrainer_corporate_06' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mindtrainer_coporate_06', array(
	'label'    => __( '6. virksomhed', 'mindtrainer' ),
	'section'  => 'corporate_logo_section',
	'settings' => 'mindtrainer_corporate_06',
) ) );

			 $wp_customize->add_setting(
	'corporate_link_06',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'corporate_link_06',
	array(
		'label' => 'Hjemmeside for 6. virksomhed - uden https://',
		'section' => 'corporate_logo_section',
		'type' => 'text',
	)
);

	// PICTURES

		$wp_customize->add_section( 'mindtrainer_picture_section' , array(
	'title'       => __( 'Billeder - Portrætter', 'mindtrainer' ),
	'priority'    => 6,
	'description' => 'Profilbilleder',
) );

	$wp_customize->add_setting( 'profilepicture01' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'profilepicture01', array(
	'label'    => __( 'Main Profile Picture', 'mindtrainer' ),
	'section'  => 'mindtrainer_picture_section',
	'settings' => 'profilepicture01',
) ) );

	$wp_customize->add_setting( 'profilepicture02' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'profilepicture02', array(
	'label'    => __( 'Secondary Profile Picture', 'mindtrainer' ),
	'section'  => 'mindtrainer_picture_section',
	'settings' => 'profilepicture02',
) ) );



	// ABOUT ME PAGE

	$wp_customize->add_section( 'about_section' , array(
	'title'       => __( 'Billeder - Om mig', 'mindtrainer' ),
	'priority'    => 6,
	'description' => 'Billeder til om mig',
) );

$wp_customize->add_setting(
	'about_overskrift',
	array(
		'default' => 'Overskrift',
	)
);
  $wp_customize->add_control(
	'about_overskrift',
	array(
		'label' => 'Overskrift til billedesektionen',
		'section' => 'about_section',
		'type' => 'text',
	)
);

	// 1ST OFFICE PICTURE

	$wp_customize->add_setting( 'office_picture_01' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'office_picture_01', array(
	'label'    => __( 'Første billede', 'mindtrainer' ),
	'section'  => 'about_section',
	'settings' => 'office_picture_01',
) ) );

	// 2ND OFFICE PICTURE

	$wp_customize->add_setting( 'office_picture_02' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'office_picture_02', array(
	'label'    => __( 'Andet billede', 'mindtrainer' ),
	'section'  => 'about_section',
	'settings' => 'office_picture_02',
) ) );

	// 3RD OFFICE PICTURE
		$wp_customize->add_setting( 'office_picture_03' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'office_picture_03', array(
	'label'    => __( 'Tredje billede', 'mindtrainer' ),
	'section'  => 'about_section',
	'settings' => 'office_picture_03',
) ) );


	// SUPERVISOR PICTURES

	$wp_customize->add_section( 'supervisor_section' , array(
	'title'       => __( 'Billeder - Supervisor', 'mindtrainer' ),
	'priority'    => 6,
	'description' => 'Billede til Supervisor-siden',
) );

	$wp_customize->add_setting( 'supervisor_picture_01' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'supervisor_picture_01', array(
	'label'    => __( 'Supervisorbillede', 'mindtrainer' ),
	'section'  => 'supervisor_section',
	'settings' => 'supervisor_picture_01',
) ) );

	// MIN METODE PICTURES

	$wp_customize->add_section( 'minmetode_section' , array(
	'title'       => __( 'Billeder - Min metode', 'mindtrainer' ),
	'priority'    => 6,
	'description' => 'Billede til Min metode-siden',
) );

	$wp_customize->add_setting( 'minmetode_picture_01' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'minmetode_picture_01', array(
	'label'    => __( 'Min metode - billede', 'mindtrainer' ),
	'section'  => 'minmetode_section',
	'settings' => 'minmetode_picture_01',
) ) );

	// AFBUDSREGLER

  $wp_customize->add_section('prisliste-info', array(
		'title'    => __('Afbudsregler', 'mindtrainer'),
		'description' => '',
		'priority' => 5,
	));

		 $wp_customize->add_setting(
	'afbudtitel_textbox',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'afbudtitel_textbox',
	array(
		'label' => 'Titel for afbudsregler',
		'section' => 'prisliste-info',
		'type' => 'text',
	)
);

			 $wp_customize->add_setting(
	'afbud_textbox',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'afbud_textbox',
	array(
		'label' => 'Afbudsregler',
		'section' => 'prisliste-info',
		'type' => 'textarea',
	)
);

	$wp_customize->add_setting(
	'afbudkontakt_textbox',
	array(
		'default' => '',
	)
);
  $wp_customize->add_control(
	'afbudkontakt_textbox',
	array(
		'label' => 'Kontakt vedr. afbudsregler',
		'section' => 'prisliste-info',
		'type' => 'textarea',
	)
);

	// SOCIAL MEDIA

	$wp_customize->add_section('social_section', array(
		'title'    => __('Sociale medier', 'mindtrainer'),
		'description' => '',
		'priority' => 8,
	));

	//NEWSLETTER
	$wp_customize->add_setting( 'toggle_newsletter', array(
	'default'        => true,
) );

$wp_customize->add_control( 'toggle_newsletter', array(
	'settings' => 'toggle_newsletter',
	'label'    => 'Vis nyhedsbrev',
	'section'  => 'social_section',
	'type'     => 'checkbox'
) );

	//FACEBOOK
	$wp_customize->add_setting(
		'social_facebook',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'social_facebook',
		array(
			'label' => 'Facebook',
			'section' => 'social_section',
			'type' => 'text',
		)
	);

		$wp_customize->add_setting(
		'social_linkedin',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'social_linkedin',
		array(
			'label' => 'LinkedIn',
			'section' => 'social_section',
			'type' => 'text',
		)
	);

		$wp_customize->add_setting(
		'social_youtube',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'social_youtube',
		array(
			'label' => 'YouTube-kanal',
			'section' => 'social_section',
			'type' => 'text',
		)
	);

	$wp_customize->add_setting(
		'social_twitter',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'social_twitter',
		array(
			'label' => 'Twitter',
			'section' => 'social_section',
			'type' => 'text',
		)
	);

	// FOOTER CUSTOMIZER

	$wp_customize->add_section('footer_section', array(
		'title'    => __('Footer', 'mindtrainer'),
		'description' => '',
		'priority' => 8,
	));

	// COPYRIGHT

	$wp_customize->add_setting(
		'footer_copyright',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'footer_copyright',
		array(
			'label' => 'Copyright Notice',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);

// WEBMASTER

	$wp_customize->add_setting(
		'footer_webmaster',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'footer_webmaster',
		array(
			'label' => 'Webmaster',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);

	$wp_customize->add_setting(
		'footer_webmaster_link',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'footer_webmaster_link',
		array(
			'label' => 'Webmasters hjemmeside',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);

	// CREDIT 1 (fotograf)

	$wp_customize->add_setting(
		'footer_credit1',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'footer_credit1',
		array(
			'label' => 'Credit 1: Titel',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);

	$wp_customize->add_setting(
		'footer_fotograf',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'footer_fotograf',
		array(
			'label' => 'Credit 1: Navn/Firma',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);

	$wp_customize->add_setting(
		'footer_fotograf_link',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'footer_fotograf_link',
		array(
			'label' => 'Credit 1: Hjemmeside',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);


	// CREDIT 2 (grafik)

	$wp_customize->add_setting(
		'footer_credit2',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'footer_credit2',
		array(
			'label' => 'Credit 2: Titel',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);

	$wp_customize->add_setting(
		'footer_grafik',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'footer_grafik',
		array(
			'label' => 'Credit 2: Navn/Firma',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);

	$wp_customize->add_setting(
		'footer_grafik_link',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'footer_grafik_link',
		array(
			'label' => 'Credit 2: Hjemmeside',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);





}
add_action( 'customize_register', 'mindtrainer_theme_customizer' );


/** ADD MINDTRAINER MENU */
add_action( 'admin_menu', 'mindtrainer_menu' );

/** SETUP VARIOUS MINDTRAINER SETTINGS PAGES */
function mindtrainer_menu() {
	add_menu_page( 'Mindtrainer Settings', 'Mindtrainer', 'edit_theme_options', 'customize.php', '', '../wp-content/themes/mindtrainer/assets/logo_small_icon.png', 1 );
}


/** BOOTSTRAP 3 MENU FUNCTIONALITY */
add_filter('nav_menu_css_class', 'ss_nav_menu_css_class', 10, 3);

function ss_nav_menu_css_class($classes, $item, $args) {
	if (array_search('menu-item-has-children', $classes) !== false) {
		$classes[] = 'dropdown';
		$classes[] = 'focus';
	}
	return $classes;
}

add_filter('nav_menu_link_attributes', 'ss_nav_menu_link_attributes', 10, 3);
function ss_nav_menu_link_attributes($atts, $item, $args) {
	if (array_search('menu-item-has-children', $item->classes) === false) return $atts;
	$atts['data-toggle'] = 'dropdown';
	$atts['class'] = 'dropdown-toggle';
	return $atts;
}

class SS_Walker_Nav_Menu extends Walker_Nav_Menu {

	function start_lvl(&$output, $depth = 0, $args = array()) {
		$output .= '<ul class="dropdown-menu">';
	}
}


/** DASHBOARD */
function mindtrainer_dashboard_widgets() {

	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'ColdCastle Support', 'mindtrainer_dashboard_help');
	}

	function mindtrainer_dashboard_help() {
		echo '<iframe src="https://coldcastle.net/support/mindtrainer/" width="100%" height="300" frameBorder="0">Browser not compatible.</iframe>';
	}

add_action('wp_dashboard_setup', 'mindtrainer_dashboard_widgets');
