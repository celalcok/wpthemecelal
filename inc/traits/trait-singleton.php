<?php 

namespace Wpcelal_Theme\Inc\Traits;
trait Singleton{
    public function __construct(){

    }
    public function __clone(){

    }

    final public static function get_instace(){
        static $instace=[];
        $called_class = get_called_class();
        if(!isset($instace[$called_class])){
            $instace[$called_class]= new $called_class();
            do_action(sprintf("wpcelal_theme_singleton_init%s",$called_class));

        }
        return $instace[$called_class];
    }
}