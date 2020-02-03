<?php

/**
 * Theme Setup
 */
function prototypedev_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'prototyprdev' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'prototypedev' ),
		'social'  => __( 'Social Links Menu', 'prototypedev' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'prototypedev_setup' );

/**
 * Theame customize func
 * @param $wp_customize
 */
function prototypedev_customize_register($wp_customize){

    $wp_customize->add_section(
        'prototypedev_social_options',
        array(
            'title'     => 'Social Link Options',
            'priority'  => 200
        )
    );

    $wp_customize->add_setting(
        'prototypedev_link_instagram',
        array(
            'default'     => 'https://instagram.com'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_social_0',
            array(

                'label'      => __( 'Instagram Link', 'prototypedev' ),
                'description' => __( 'Select default link for Instagram account', 'prototypedev' ),
                'section'    => 'prototypedev_social_options',
                'type' => 'text',
                'settings'   => 'prototypedev_link_instagram'
            )
        )
    );

    $wp_customize->add_setting(
        'prototypedev_link_be',
        array(
            'default'     => 'https://www.behance.net/'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_social_1',
            array(

                'label'      => __( 'Behance Link', 'prototypedev' ),
                'description' => __( 'Select default link for Behance account', 'prototypedev' ),
                'section'    => 'prototypedev_social_options',
                'type' => 'text',
                'settings'   => 'prototypedev_link_be'
            )
        )
    );

    $wp_customize->add_setting(
        'prototypedev_link_fb',
        array(
            'default'     => 'https://fb.me'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_social_2',
            array(

                'label'      => __( 'Facebook Link', 'prototypedev' ),
                'description' => __( 'Select default link for Facebook account', 'prototypedev' ),
                'section'    => 'prototypedev_social_options',
                'type' => 'text',
                'settings'   => 'prototypedev_link_fb'
            )
        )
    );

    $wp_customize->add_setting(
        'prototypedev_link_twi',
        array(
            'default'     => 'https://twitter.com'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_social_3',
            array(

                'label'      => __( 'Twitter Link', 'prototypedev' ),
                'description' => __( 'Select default link for Twitter account', 'prototypedev' ),
                'section'    => 'prototypedev_social_options',
                'type' => 'text',
                'settings'   => 'prototypedev_link_twi'
            )
        )
    );

    $wp_customize->add_section(
        'prototypedev_adv_options',
        array(
            'title'     => 'Advanced Theame Options',
            'priority'  => 200
        )
    );

    $wp_customize->add_setting(
        'prototypedev_email',
        array(
            'default'     => 'webmaster@prototypedev.net'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'email_0',
            array(

                'label'      => __( 'Mail form email', 'prototypedev' ),
                'description' => __( 'Select default mail address', 'prototypedev' ),
                'section'    => 'prototypedev_adv_options',
                'type' => 'text',
                'settings'   => 'prototypedev_email'
            )
        )
    );

}
add_action('customize_register', 'prototypedev_customize_register');

/**
 * Register Custom post
 * Slug=portfolio
 */
function prototypedev_post_types() {

    $labels = array(
        'name'                => __( 'Prototype Dev Portfolio', 'prototypedev' ),
        'singular_name'       => __( 'Portfolio', 'prototypedev' ),
        'add_new'             => __( 'Add New', 'prototypedev' ),
        'add_new_item'        => __( 'Add New Portfolio', 'prototypedev' ),
        'edit_item'           => __( 'Edit Portfolio', 'prototypedev' ),
        'new_item'            => __( 'New Portfolio', 'prototypedev' ),
        'all_items'           => __( 'All Portfolios', 'prototypedev' ),
        'view_item'           => __( 'View Portfolio', 'prototypedev' ),
        'search_items'        => __( 'Search Portfolios', 'prototypedev' ),
        'not_found'           => __( 'No Portfolio found', 'prototypedev' ),
        'not_found_in_trash'  => __( 'No Portfolio found in Trash', 'prototypedev' ),
        'menu_name'           => __( 'Prototype Dev Portfolio', 'prototypedev' ),
    );

    $supports = array( 'title', 'editor' ,'thumbnail');

    $slug = get_theme_mod( 'portfolio_permalink' );
    $slug = ( empty( $slug ) ) ? 'portfolio' : $slug;

    $args = array(
        'labels'              => $labels,
        'public'              => false,
        'publicly_queryable'  => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => $slug ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => $supports,
    );

    register_post_type( 'portfolio', $args );

}
add_action( 'init', 'prototypedev_post_types' );

/**
 * Return posts with 'portfolio' slug
 * @return array
 */
function prototypedev_get_portfolio(){
    $the_slug = 'portfolio';
    $args = array(

        'post_type'   => $the_slug,
        'post_status' => 'publish'
    );
    $result_posts=get_posts($args);
    if (count($result_posts)>0)
        foreach ($result_posts as $value){
            $value=(array)$value;
            $attachement=array_shift (get_attached_media( 'image' , $value['ID'] ));
            $result[]=array_merge($value,array('sumbnail'=>$attachement->guid));
        }
return $result;
}

//================================================ Email Form

function prototypedev_register_guest_session()
{
    if( !session_id() )
    {
        session_start();
        setcookie('guest','guest',time()+60*60*24,'/','prototypedev.net',false,false);
    }
}
add_action('init', 'register_guest_session');

function prototypedev_mail_action_callback() {

    if ((!isset($_COOKIE['guest']))||($_COOKIE['guest']!='guest')) die();
    $nonce=filter_input(INPUT_POST,'nonce',FILTER_SANITIZE_STRING);

    if (($nonce)&&(!is_null($nonce))){
        //Set session. to prevent double message sending

        $args=array(
            (md5('name').$nonce)=>FILTER_SANITIZE_STRING,
            (md5('email').$nonce)=>FILTER_VALIDATE_EMAIL,
            (md5('comment').$nonce)=>FILTER_SANITIZE_STRING
        );
        $arr=filter_input_array(INPUT_POST,$args);

        //Email is wrong
        if (!$arr[(md5('email').$nonce)]) die();

        // Name too short
        if (intval($arr[md5('name').$nonce])>1) die();

        $headers = 'From: '.$arr[md5('name').$nonce].' <'.$arr[md5('email').$nonce].">\r\n" .
            'Reply-To: '.$arr[md5('email').$nonce]. "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (strlen($arr[md5('comment').$nonce])>1){
            mail(get_theme_mod('prototypedev_email','webmaster@prototypedev.net'),'Contact form',$arr[md5('comment').$nonce],$headers);}
        setcookie('guest','true',time()+60*60*24,'/','prototypedev.net',false,false);
            echo json_encode(array('status'=>'true'));
            }

   die();
}
add_action('wp_ajax_feedback', 'prototypedev_mail_action_callback');
add_action('wp_ajax_nopriv_feedback', 'prototypedev_mail_action_callback');