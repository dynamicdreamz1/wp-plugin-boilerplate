<?php
/**
 * Plugin Name: Plugin Name
 * Description: Plugin Description
 * Version: 1.0
 * Licence: MIT
 *  */

 /**
  * Checklist:
  * 1) change root directory name
  * 2) change plugin name in above comment (From: Plugin Name , To: {My Plugin Name})
  * 3) change class name and contant below this comment (From: PLUGIN_NAME , To: {MY_PLUGIN_NAME})
  * 4) Change package name in composer.json and PSR-4 path
  * 5) run `composer install` to dump autoload files
  */


$plugin_root_name = "PLUGIN_NAME";
defined("${plugin_root_name}_DIR") || define("${plugin_root_name}_DIR", trailingslashit( plugin_dir_path(__FILE__)  ) );
defined("${plugin_root_name}_URL") || define("${plugin_root_name}_URL", trailingslashit( plugin_dir_url(__FILE__)  ) );

if(file_exists(constant("${plugin_root_name}_DIR").'vendor/autoload.php')) {
    require_once(constant("${plugin_root_name}_DIR").'vendor/autoload.php');
}

class PLUGIN_NAME_MAIN{
    private static $object = null;
    public static function instance() {
        if(is_null(self::$object)) {
            self::$object = new self;
        }
        return self::$object;
    }

    public function init(  ) {

    }

    public function activate() {

    }

    public function deactivate() {

    }

    public static function uninstall() {

    }
}

add_action('plugins_loaded',function(){
    PLUGIN_NAME_MAIN::instance()->init();
});

register_activation_hook(__FILE__,[PLUGIN_NAME_MAIN::instance(),'activate']);
register_deactivation_hook(__FILE__,[PLUGIN_NAME_MAIN::instance(),'deactivate']);
register_uninstall_hook(__FILE__,'PLUGIN_NAME_MAIN::uninstall');