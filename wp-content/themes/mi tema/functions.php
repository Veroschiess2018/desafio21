<?php 
/* definiendo funciones*/
function register_enqueue_style() {
$theme_data = wp_get_theme();


wp_register_style('boostrap', get_theme_file_uri('css/bootstrap.min.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('theme', get_theme_file_uri('css/bootstrap-theme.min.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('portafolio', get_theme_file_uri('css/styles.css'), null, $theme_data->get('Version'), 'screen');



wp_enqueue_style('boostrap');
wp_enqueue_style('theme');
wp_enqueue_style('portafolio');

}
add_action('wp_enqueue_scripts', 'register_enqueue_style');



function register_enqueue_scripts(){
$theme_data = wp_get_theme();


wp_deregister_script('jquery');
wp_deregister_script('jquery_migrate');

wp_register_script('jquery3', get_parent_theme_file_uri('js/vendor/jquery-3.3.1.slim.min.js'),  null, '3.3.1', true);

wp_register_script('jquery2', get_parent_theme_file_uri('js/vendor/jquery-1.11.2.min.js'),  null, '1.11.2', true);

wp_register_script('modernizr', get_parent_theme_file_uri('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'), array('jquery3'), '2.8.3', true);

wp_register_script('bootstrap', get_parent_theme_file_uri('js/vendor/bootstrap.min.js'), array('jquery3'), null, true);

wp_register_script('plugins', get_parent_theme_file_uri('js/plugins.js'), array('jquery3'), null, true);

wp_register_script('main', get_parent_theme_file_uri('js/main.js'), array('jquery3'), null, true);


wp_enqueue_script('jquery3');
wp_enqueue_script('jquery2');
wp_enqueue_script('modernizr');
wp_enqueue_script('bootstrap');
wp_enqueue_script('plugins');
wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

  //menús personalizables
  function menus_setup() {
  register_nav_menus(
    array(
      'header-menu' => __( 'header menu' ),
      'footer-menu' => __( 'footer menu' ),
    )
  );
  }
  add_action( 'after_setup_theme', 'menus_setup' );

  remove_action ('shutdown', 'wp_ob_end_flush_all', 1);

?>
