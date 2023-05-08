<?php 
/**
 * Theme Functions
 * 
 * @package Wpcelal
 */

use WPCELAL_THEME\Inc\WPCELAL_THEME;

?>
<?php 

if(!defined("WPCELAL_DIR_PATH")){
    define("WPCELAL_DIR_PATH", untrailingslashit(get_template_directory()));
}
// echo "<pre>";
// print_r(WPCELAL_DIR_PATH);
// wp_die();
require_once WPCELAL_DIR_PATH."/inc/helpers/autoloader.php";

function wpcelal_get_theme_instance(){
    WPCELAL_THEME::get_instace();
}
 wpcelal_get_theme_instance();
function wpcelal_enqueue_scripts(){
    //Register Styles.
    wp_register_style("style",get_template_directory_uri()."/style.css",[],filemtime(get_template_directory()."/style.css"),"all");
    wp_register_style("bootstrap",get_template_directory_uri()."/assets/src/library/css/bootstrap.min.css",[],false,"all");
    
    //Register Scripts
    wp_register_script("main",get_template_directory_uri()."/assets/main.js",[],filemtime(get_template_directory()."/assets/main.js"), true);
    wp_register_script("bootstrap",get_template_directory_uri()."/assets/src/library/js/bootstrap.min.js",["jquery"],false, true);
    
    //Enqueue Styles
    wp_enqueue_style("style");
    wp_enqueue_style("bootstrap");

    //Enqueue Scripts
    wp_enqueue_script("main");
    wp_enqueue_script("bootstrap");



}

add_action("wp_enqueue_scripts","wpcelal_enqueue_scripts");
