<?php


// Register Custom Navigation Walker
require_once get_template_directory() . '/template-parts/navbar.php';

function tema1_agregar_css_js(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('ownStyle', get_template_directory_uri() . '/assets/css/style.css');
  // wp_enqueue_style('slickCss', get_template_directory_uri() . '/assets/css/slick.css');
   wp_enqueue_style('fontsCss', get_template_directory_uri() . '/assets/css/fonts.css');

  // wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
  // wp_enqueue_style('slickTheme', get_template_directory_uri() . '/assets/css/slick-theme.css');

   wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array ( 'jquery' ), '1.14', true);
  
   wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array ( 'popper' ), '4.3', true);

   wp_enqueue_script('flexbox', 'https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css', array ( 'flex' ), '4.3', true);

   wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array('bootstrap-js'), '1.0', true);

// Slick CSS & JS files
	wp_register_style('slick-css', get_template_directory_uri() .'/css/slick.css');
	wp_register_style('slick-theme-css', get_template_directory_uri() .'/css/slick-theme.css');
	wp_enqueue_script('jquery-min-js', get_template_directory_uri().'/js/jquery-1.11.0.min.js', array(), '1.11.0');		
	wp_enqueue_script('slick-min-js', get_template_directory_uri().'/js/slick.min.js');		

	// Our Custom JS (we'll initialize slick here)
	wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom-js.js', array(), '1.0.0');

	// Enqueue all CSS & JS files
	wp_enqueue_style('slick-css');
	wp_enqueue_style('slick-theme-css');
	wp_enqueue_script('jquery-min-js');
	wp_enqueue_script('slick-min-js');
	wp_enqueue_script('custom-js');

  
}
add_action('wp_enqueue_scripts', 'tema1_agregar_css_js');



function tema1_setup(){

  // Soporte imagenes destacadas
  if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
  }

  add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'tema1_setup' );

// Agregar Sidebar
function tema1_widgets(){
  register_sidebar(array(
    'id' => 'widgets-derecha',
    'name' => __( 'Widget Derecha' ),
    'description'   => __( 'Arrastra lo que quieras' ),
    'before_widget' => '<div class="card-body">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4><hr>'
  ));
}
add_action('widgets_init', 'tema1_widgets');

// Registrar Menús
function tema1_register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menú Superior' )
     )
   );
}
add_action( 'init', 'tema1_register_my_menus' );
