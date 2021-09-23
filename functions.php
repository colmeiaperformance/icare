<?php 

//Stylesheets
function loading_styles(){
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/vendor/swiper-js/swiper-bundle.min.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'opensans-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap', array(), wp_get_theme()->get( 'Version' ), 'all' );
  
}

//Scripts
function loading_scripts(){
    wp_register_script( 'swiper-js', get_template_directory_uri() . '/vendor/swiper-js/swiper-bundle.min.js', array( 'jquery-core' ), wp_get_theme()->get( 'Version' ), true  );
    wp_register_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery-core' ), wp_get_theme()->get( 'Version' ), true  );
  
    wp_enqueue_script( 'swiper-js');
    wp_enqueue_script( 'main-js');
  

}

add_action( 'wp_enqueue_scripts', 'loading_styles' );
add_action( 'wp_enqueue_scripts', 'loading_scripts' );


function base_setup() {

    //Tradução
	//load_theme_textdomain( 'base_language', get_template_directory() . '/languages' );

    //Wordpress gerencia o título
    add_theme_support( 'title-tag' );

    //Formatos de posts
    add_theme_support(
        'post-formats',
        array(
            'aside',
            'gallery',
            'image',
            'video',
        )
    );

    // register a new menu
    register_nav_menus(
        array(
        'main-menu'=> __('Main menu'),
        'footer-menu'=> __('Footer menu')
        )
    );

    //Thumbnails ou miniaturas
    add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1920, 9999 );

    //Logo customizado
    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );

    // Add support for full and wide align images
    add_theme_support( 'align-wide' );

}


// Add support for responsive embedded content.
add_theme_support( 'responsive-embeds' );

// Add support for custom line height controls.
add_theme_support( 'custom-line-height' );

// Add support for experimental link color control.
add_theme_support( 'experimental-link-color' );

// Add support for experimental cover block spacing.
add_theme_support( 'custom-spacing' );

add_action( 'after_setup_theme', 'base_setup' );

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


/**
 * Organiza um menu personalizado para exibição dos itens e subitens
**/
function get_menu($menu_name = false, $menuID = false)
{
    //Obtem o menu em questão
    if ($menu_name) {
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations[$menu_name];
    }

    $itens_menu = wp_get_nav_menu_items($menuID);
    $menu = array();
    $submenu = array();

    foreach ($itens_menu as $item) {
        if ($item->menu_item_parent == 0) {
            $menu[] = $item;
        } else {
            if (!array_key_exists($item->menu_item_parent, $submenu)) {
                $submenu[$item->menu_item_parent] = array();
            }
            $submenu[$item->menu_item_parent][] = $item;
        }
    }
    $menu_itens = array();
    $menu_itens["parents"] = $menu;
    $menu_itens["childrens"] = $submenu;
    return $menu_itens;
}

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Opções Gerais'),
            'menu_title'  => __('Opções Gerais'),
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Rodapé'),
            'menu_title'  => __('Rodapé'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}