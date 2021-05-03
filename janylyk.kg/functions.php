 <?php 

add_action('wp_enqueue_scripts', 'style_them' );
add_action('wp_footer', 'scripts_them' );

add_action( 'after_setup_theme', 'theme_register_nav_menu');
add_action( 'widgets_init', 'register_my_widgets');


  function register_my_widgets(){

    register_sidebar( array(
      'name'          => 'left sidebar',
      'id'            => "left_sidebar",
      'description'   => 'Описание нашего сайдбара'
    ) );
  }

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Меню в шапке' );
	register_nav_menu( 'footer', 'Меню в подвале' );
	
	}


function style_them() {
 wp_enqueue_style('style', get_stylesheet_uri());
 wp_enqueue_style( 'babushka', get_template_directory_uri() . "/assets/css/default.css");
 wp_enqueue_style( 'layout', get_template_directory_uri() . "/assets/css/layout.css");
 wp_enqueue_style( 'babushka', get_template_directory_uri() . "/assets/css/media-queries.css");
}

 
 function scripts_them() {

  wp_enqueue_script('init', get_template_directory_uri() . "/assets/js/init.js");
   wp_enqueue_script('doubletaptogo', get_template_directory_uri() . "/assets/js/doubletaptogo.js", null, true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . "/assets/js/jquery.flexslider.js", null, true);
     wp_enqueue_script('jquery', get_template_directory_uri() . "/assets/js/jquery-1.10.2.min.js", ['jquery'], null, true );
     wp_enqueue_script('migrate', get_template_directory_uri() . "/assets/js/jquery-migrate-1.2.1.min.js");
     wp_enqueue_script('modernizer', get_template_directory_uri() . "/assets/js/modernizr.js", null, null, false );
 }