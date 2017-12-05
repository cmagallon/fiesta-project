<?php 
function customThemeEnqueues(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/wafiesta-style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script( 'customScript', get_template_directory_uri() . '/js/wafiesta-script.js', array(), '1.0.0', true);
};

add_action('wp_enqueue_scripts', 'customThemeEnqueues');

function addGoogleFonts(){
    wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', false );
    wp_enqueue_style( 'bebas', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="styleshee', false );
};
    add_action('wp_enqueue_scripts', 'addGoogleFonts');

function customThemeSetUp(){
	add_theme_support('menus');
	register_nav_menu('footer', 'This is the footer, positioned at the bottom of the page');
};

add_action( 'init', 'customThemeSetUp');
add_theme_support( 'custom-logo' );
add_theme_support('custom-background');
add_theme_support('post-thumbnails');

// $customHeaderSetting = array(
//         'default-image' => '',
//         'width' => 100,
//         'height' => 50,
//         'flex-height' => true,
//         'flex-width' => true,
//         'default-text-color' => '',
//         'header-text' => true,
//         'uploads' => true,
//         'video' => true,
// 	);
// add_theme_support('custom-header', $customHeaderSetting);

function customLogoSetUp(){
	$customLogoSetting = array(
		'height'      => 100,
	    'width'       => 400,
	    'flex-height' => true,
	    'flex-width'  => true,
	    'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $customLogoSetting );
};

add_action('after_setup_theme', 'customLogoSetUp');

add_theme_support('post-formats', array('aside', 'image', 'video'));

function customTheme_customize($wp_customize){
	//Settings
	$wp_customize->add_setting('newtheme_text_colour', array(
		'default' => '#000000',
		'transport' => 'refresh'
	));
	$wp_customize->add_setting('newtheme_nav_colour', array(
		'default' => '#000000',
		'transport' => 'refresh'
	));
	$wp_customize->add_setting('newtheme_font', array(
		'default' => 'Helvetica',
		'transport' => 'refresh'
	));
	// $wp_customize->add_setting('video_front_page', array(
	// 	'default' => '',
	// 	'transport' => 'refresh'
	// ));

	//Section
	$wp_customize->add_section('newtheme_text_colour_section', array(
		'title' => __('Standard Colours', 'New Custom Theme'), //los parentesis es para que dejemos el texto que puso el cliente y no se convierta en codigo
		'priority' => 30
	));
	$wp_customize->add_section('newtheme_font_section', array(
		'title' => __('Fonts', 'New Custom Theme')
	));

	// $wp_customize->add_section('video_front_page_section', array(
	// 	'title' => __('Video', 'New Custom Theme')
	// ));

	// Add the control

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'newtheme_link_colour_control', array(
		'label'=>__('text colour', 'New Custom Theme'),
		'section'=>'newtheme_text_colour_section',
		'settings'=>'newtheme_text_colour'
	)));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'newtheme_nav_colour_control', array(
		'label'=>__('nav colour', 'New Custom Theme'),
		'section'=>'newtheme_text_colour_section',
		'settings'=>'newtheme_nav_colour'
	)));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newtheme_font_control', array(
		'section'=>'newtheme_font_section',
		'settings'=>'newtheme_font',
		'type'=> 'radio',
		'choices'=> array(
                'Helvetica'   => __( 'Helvetica' ),
                'Futura'   => __( 'Futura' ),
                'Times'  => __( 'Times New Roman' )
            )
	)));
	// $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'video_front_page_control', array(
	// 	'label'=>__('video', 'New Custom Theme'),
	// 	'section'=>'video_front_page_control_section',
	// 	'settings'=>'video_front_page_control',
	// 	'video'=>true
	// )));

};

add_action('customize_register', 'customTheme_customize');



// SOCIAL MEDIA ICONS //

function ct_tribes_social_array() {

	$social_sites = array(
		'facebook'      => 'tribes_facebook_profile',
		'youtube'       => 'tribes_youtube_profile',
		'instagram'     => 'tribes_instagram_profile',
		'spotify'       => 'tribes_spotify_profile',
	);

	return apply_filters( 'ct_tribes_social_array_filter', $social_sites );
};

function my_add_customizer_sections( $wp_customize ) {

	$social_sites = ct_tribes_social_array();

	// set a priority used to order the social sites
	$priority = 4;

	// section
	$wp_customize->add_section( 'ct_tribes_social_media_icons', array(
		'title'       => __( 'Social Media Icons', 'tribes' ),
		'priority'    => 25,
		'description' => __( 'Add the URL for each of your social profiles.', 'tribes' )
	) );

	// create a setting and control for each social site
	foreach ( $social_sites as $social_site => $value ) {

		$label = ucfirst( $social_site );

		// setting
		$wp_customize->add_setting( $social_site, array(
			'sanitize_callback' => 'esc_url_raw'
		) );
		// control
		$wp_customize->add_control( $social_site, array(
			'type'     => 'url',
			'label'    => $label,
			'section'  => 'ct_tribes_social_media_icons',
			'priority' => $priority
		) );
		// increment the priority for next site
		$priority = $priority + 5;
	}
}
add_action( 'customize_register', 'my_add_customizer_sections' );

function my_social_icons_output() {

	$social_sites = ct_tribes_social_array();

	foreach ( $social_sites as $social_site => $profile ) {

		if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
			$active_sites[ $social_site ] = $social_site;
		}
	}

	if ( ! empty( $active_sites ) ) {

		echo '<ul class="social-media-icons">';
		foreach ( $active_sites as $key => $active_site ) { 
        	$class = 'fa fa-' . $active_site; ?>
		 	<li>
				<a class="<?php echo esc_attr( $active_site ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $key ) ); ?>">
					<i class="<?php echo esc_attr( $class ); ?>" title="<?php echo esc_attr( $active_site ); ?>"></i>
				</a>
			</li>
		<?php } 
		echo "</ul>";
	}
}

// SECTIONS DASHBOARD //

function parties_init() {
    $labels = array(
        'name'               => _x( 'Parties', 'post type general name' ),
        'singular_name'      => _x( 'Parties', 'post type singular name' ),
        'menu_name'          => _x( 'Parties', 'admin menu' ),
        'name_admin_bar'     => _x( 'Parties', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New Party', 'programme' ),
        'add_new_item'       => __( 'Add New Party' ),
        'new_item'           => __( 'New Party' ),
        'edit_item'          => __( 'Edit Party' ),
        'view_item'          => __( 'View Party' ),
        'all_items'          => __( 'All Party' ),
        'search_items'       => __( 'Search Parties' ),
        'parent_item_colon'  => __( 'Parent Parties:' ),
        'not_found'          => __( 'No Parties found.' ),
        'not_found_in_trash' => __( 'No Parties found in Trash.' )
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'Parties'),
        'query_var' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',),
        );
    register_post_type( 'parties', $args );
}
add_action( 'init', 'parties_init' );

// VIDEO //

add_theme_support( 'custom-header', array(
  'video' => true
));
add_filter( 'is_header_video_active', 'custom_video_header_pages' );

function custom_video_header_pages( $active ) {
  if( is_home() || is_page() ) {
    return true;
  }

  return false;
}

add_theme_support( 'custom-header', array(
  'video' => true,
  'video-active-callback' => 'custom_video_active_callback'
));

function custom_video_active_callback() {
  if( !is_user_logged_in() && !is_home() ) {
    return true;
  }
  
  return false;
}

add_filter( 'header_video_settings', 'my_header_video_settings');
function my_header_video_settings( $settings ) {
  $settings['minWidth'] = 680;
  $settings['minHeight'] = 400;
  return $settings;
}