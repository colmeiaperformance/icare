<?php 
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

//Stylesheets
function loading_styles(){
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css', array(), '', 'all' );
  
}

//Scripts
function loading_scripts(){
  wp_register_script( 'geral-js', get_template_directory_uri() . '/js/main.js', '', '', true  );
  
  wp_enqueue_script( 'geral-js');
  

}

add_action( 'wp_enqueue_scripts', 'loading_styles' );
add_action( 'wp_enqueue_scripts', 'loading_scripts' );


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