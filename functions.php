<?php 
/**
 * Theme Functions
 * 
 * @package Wpcelal
 */
?>
<?php 

// echo "<pre>";
// print_r(filemtime(get_template_directory()."/style.css"));
// wp_die();
function wpcelal_enqueue_scripts(){
    //Register Styles.
    wp_register_style("style",get_template_directory_uri()."/style.css",[],filemtime(get_template_directory()."/style.css"),"all");
    wp_register_style("bootstrap",get_template_directory_uri()."/assets/src/library/css/bootstrap.min.css",[],false,"all");
    
    //Register Scripts
    wp_register_script("main",get_template_directory_uri()."/assets/main.js",[],filemtime(get_template_directory()."/assets/main.js"), true);
    wp_register_script("main",get_template_directory_uri()."/assets/src/library/css/bootstrap.min.js",["jquery"],false, true);
    
    //Enqueue Styles
    wp_enqueue_style("style");
    wp_enqueue_style("bootstrap");

    //Enqueue Scripts
    wp_enqueue_script("main");
    wp_enqueue_script("bootstrap");



}

add_action("wp_enqueue_scripts","wpcelal_enqueue_scripts");
