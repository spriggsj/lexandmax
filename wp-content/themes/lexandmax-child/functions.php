<?php
//creating a function to enque bootstrap css and style css
function es_styles() {
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
  wp_enqueue_style('style',get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
}
// wp_enqueue_style say what to call ot in the '', how tofind it . 'where it is' and how much to take
//call on it
add_action('wp_enqueue_scripts','es_styles');
// going to enqueue javascript
function es_method(){
  wp_register_script('es_script', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(jquery), '', true);
  wp_enqueue_script('es_script');
}
add_action('wp_enqueue_scripts','es_method');
//call function name not what is registerd inside the function


//register our navelocker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
  'primary' => __('Primary Menu','lexandmax'),
  ) );






?>
