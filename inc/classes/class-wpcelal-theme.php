<?php 
/**
 * Bootstrap the Theme
 * 
 * @package Wpcelal
 */

 namespace WPCELAL_THEME\Inc;

use WPCELAL_THEME\Inc\Traits\Singleton;

 class WPCELAL_THEME{
    use Singleton;
    protected function __construct()
    {
        wp_die("Hello");
        //load class
        $this->set_hooks();
    }

    protected function set_hooks(){
        //actions and filters

    }
 }
