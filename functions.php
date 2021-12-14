<?php 

//Stylesheets
function loading_styles(){
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/vendor/swiper-js/swiper-bundle.min.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'opensans-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'map-css', get_template_directory_uri() . '/vendor/jqvmap/jqvmap.min.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
  
}

//Scripts
function loading_scripts(){
    wp_register_script( 'swiper-js', get_template_directory_uri() . '/vendor/swiper-js/swiper-bundle.min.js', array( 'jquery-core' ), wp_get_theme()->get( 'Version' ), true  );
    wp_register_script( 'map-js', get_template_directory_uri() . '/vendor/jqvmap/jquery.vmap.min.js', array( 'jquery-core' ), wp_get_theme()->get( 'Version' ), true  );
    wp_register_script( 'map-world-js', get_template_directory_uri() . '/vendor/jqvmap/jquery.vmap.world.js', array( 'map-js' ), wp_get_theme()->get( 'Version' ), true  );
    wp_register_script( 'map-sampledata-js', get_template_directory_uri() . '/vendor/jqvmap/jquery.vmap.sampledata.js', array( 'map-world-js' ), wp_get_theme()->get( 'Version' ), true  );
    wp_register_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery-core' ), wp_get_theme()->get( 'Version' ), true  );
  
    wp_enqueue_script( 'swiper-js');
    wp_enqueue_script( 'map-js');
    wp_enqueue_script( 'map-world-js');
    wp_enqueue_script( 'map-sampledata-js');
    wp_enqueue_script( 'main-js');
  

}

add_action( 'wp_enqueue_scripts', 'loading_styles' );
add_action( 'wp_enqueue_scripts', 'loading_scripts' );


function base_setup() {

    //Tradução
	//load_theme_textdomain( 'icare-domain', get_template_directory() . '/languages' );

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
        'main-menu'=> _e('Main menu', 'icare-domain' ),
        'secondary-menu'=> _e('Secondary menu', 'icare-domain' ),
        'footer-menu'=> _e('Footer menu', 'icare-domain' )
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

//Adiciona classe no item do menu
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/* Criação das páginas de opções do ACF */
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => _e('General option', 'icare-domain' ),
            'menu_title'  => _e('General options', 'icare-domain' ),
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => _e('Footer', 'icare-domain' ),
            'menu_title'  => _e('Footer', 'icare-domain' ),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

/* Remoção do editor do WP */
add_action('init', 'remove_guttenberg_from_pages', 10);
function remove_guttenberg_from_pages()
{
    remove_post_type_support('page', 'editor');
}


// Wordpress Breadcrumb Function

function get_breadcrumb() {

    // Check if is front/home page, return
    if ( is_front_page() ) {
      return;
    }
  
    // Define
    global $post;
    $custom_taxonomy  = ''; // If you have custom taxonomy place it here
  
    $defaults = array(
      'seperator'   =>  '&#187;',
      'id'          =>  'items-breadcrumb',
      'classes'     =>  'items-breadcrumb',
      'home_title'  =>  esc_html__( 'Home', 'icare-domain' )
    );
  
    $sep  = esc_html( $defaults['seperator'] );
  
    // Start the breadcrumb with a link to your homepage
    echo '<div id="'. esc_attr( $defaults['id'] ) .'" class="'. esc_attr( $defaults['classes'] ) .'">';
  
    // Creating home link
    echo '<span class="breadcrumb-item"><a href="'. get_home_url() .'">'. esc_html( $defaults['home_title'] ) .'</a></span>' . $sep;
  
    if ( is_single() ) {
  
      // Get posts type
      $post_type = get_post_type();
  
      // If post type is not post
      if( $post_type != 'post' ) {
  
        $post_type_object   = get_post_type_object( $post_type );
        $post_type_link     = get_post_type_archive_link( $post_type );
  
        echo '<span class="breadcrumb-item"><a href="'. $post_type_link .'">'. $post_type_object->labels->name .'</a></span>'. $sep;
  
      }
  
      // Get categories
      $category = get_the_category( $post->ID );
  
      // If category not empty
      if( !empty( $category ) ) {
  
        // Arrange category parent to child
        $category_values      = array_values( $category );
        $get_last_category    = end( $category_values );
        // $get_last_category    = $category[count($category) - 1];
        $get_parent_category  = rtrim( get_category_parents( $get_last_category->term_id, true, ',' ), ',' );
        $cat_parent           = explode( ',', $get_parent_category );
  
        // Store category in $display_category
        $display_category = '';
        foreach( $cat_parent as $p ) {
          $display_category .=  '<span class="breadcrumb-item">'. $p .'</span>' . $sep;
        }
  
      }
  
      // If it's a custom post type within a custom taxonomy
      $taxonomy_exists = taxonomy_exists( $custom_taxonomy );
  
      if( empty( $get_last_category ) && !empty( $custom_taxonomy ) && $taxonomy_exists ) {
  
        $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
        $cat_id         = $taxonomy_terms[0]->term_id;
        $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
        $cat_name       = $taxonomy_terms[0]->name;
  
      }
  
      // Check if the post is in a category
      if( !empty( $get_last_category ) ) {
  
        echo $display_category;
        echo '<span class="breadcrumb-item">'. get_the_title() .'</span>';
  
      } else if( !empty( $cat_id ) ) {
  
        echo '<span class="breadcrumb-item"><a href="'. $cat_link .'">'. $cat_name .'</a></span>' . $sep;
        echo '<span class="breadcrumb-item">'. get_the_title() .'</span>';
  
      } else {
  
        echo '<span class="breadcrumb-item">'. get_the_title() .'</span>';
  
      }
  
    } else if( is_archive() ) {
  
      if( is_tax() ) {
        // Get posts type
        $post_type = get_post_type();
  
        // If post type is not post
        if( $post_type != 'post' ) {
  
          $post_type_object   = get_post_type_object( $post_type );
          $post_type_link     = get_post_type_archive_link( $post_type );
  
          echo '<span class="breadcrumb-item item-custom-post-type-' . $post_type . '"><a href="' . $post_type_link . '">' . $post_type_object->labels->name . '</a></span>' . $sep;
  
        }
  
        $custom_tax_name = get_queried_object()->name;
        echo '<span class="breadcrumb-item">'. $custom_tax_name .'</span>';
  
      } else if ( is_category() ) {
  
        $parent = get_queried_object()->category_parent;
  
        if ( $parent !== 0 ) {
  
          $parent_category = get_category( $parent );
          $category_link   = get_category_link( $parent );
  
          echo '<span class="breadcrumb-item"><a href="'. esc_url( $category_link ) .'">'. $parent_category->name .'</a></span>' . $sep;
  
        }
  
        echo '<span class="breadcrumb-item">'. single_cat_title( '', false ) .'</span>';
  
      } else if ( is_tag() ) {
  
        // Get tag information
        $term_id        = get_query_var('tag_id');
        $taxonomy       = 'post_tag';
        $args           = 'include=' . $term_id;
        $terms          = get_terms( $taxonomy, $args );
        $get_term_name  = $terms[0]->name;
  
        // Display the tag name
        echo '<span class="breadcrumb-item">'. $get_term_name .'</span>';
  
      } else if( is_day() ) {
  
        // Day archive
  
        // Year link
        echo '<span class="breadcrumb-item"><a href="'. get_year_link( get_the_time('Y') ) .'">'. get_the_time('Y') . ' Archives</a></span>' . $sep;
  
        // Month link
        echo '<span class="breadcrumb-item"><a href="'. get_month_link( get_the_time('Y'), get_the_time('m') ) .'">'. get_the_time('M') .' Archives</a></span>' . $sep;
  
        // Day display
        echo '<span class="breadcrumb-item">'. get_the_time('jS') .' '. get_the_time('M'). ' Archives</span>';
  
      } else if( is_month() ) {
  
        // Month archive
  
        // Year link
        echo '<span class="breadcrumb-item"><a href="'. get_year_link( get_the_time('Y') ) .'">'. get_the_time('Y') . ' Archives</a></span>' . $sep;
  
        // Month Display
        echo '<span class="breadcrumb-item">'. get_the_time('M') .' Archives</span>';
  
      } else if ( is_year() ) {
  
        // Year Display
        echo '<span class="breadcrumb-item">'. get_the_time('Y') .' Archives</span>';
  
      } else if ( is_author() ) {
  
        // Auhor archive
  
        // Get the author information
        global $author;
        $userdata = get_userdata( $author );
  
        // Display author name
        echo '<span class="breadcrumb-item">'. 'Author: '. $userdata->display_name . '</span>';
  
      } else {
  
        echo '<span class="breadcrumb-item">'. post_type_archive_title() .'</span>';
  
      }
  
    } else if ( is_page() ) {
  
      // Standard page
      if( $post->post_parent ) {
  
        // If child page, get parents
        $anc = get_post_ancestors( $post->ID );
  
        // Get parents in the right order
        $anc = array_reverse( $anc );
  
        // Parent page loop
        if ( !isset( $parents ) ) $parents = null;
        foreach ( $anc as $ancestor ) {
  
          $parents .= '<span class="breadcrumb-item"><a href="'. get_permalink( $ancestor ) .'">'. get_the_title( $ancestor ) .'</a></span>' . $sep;
  
        }
  
        // Display parent pages
        echo $parents;
  
        // Current page
        echo '<span class="breadcrumb-item">'. get_the_title() .'</span>';
  
      } else {
  
        // Just display current page if not parents
        echo '<span class="breadcrumb-item">'. get_the_title() .'</span>';
  
      }
  
    } else if ( is_search() ) {
  
      // Search results page
      echo '<span class="breadcrumb-item">' . _e(' Search results for:', 'icare-domain') . get_search_query() .'</span>';
  
    } else if ( is_404() ) {
  
      // 404 page
      echo '<span class="breadcrumb-item">' . _e('Error 404', 'icare-domain') . '</span>';
  
    }
  
    // End breadcrumb
    echo '</div>';
  
  }

//Excerpt size
function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );