<?php
namespace Devdyna\PluginName\controller\admin;

class Admin{
    private static $object = null;
    public static function instance() {
        if(is_null(self::$object)) {
            self::$object = new self;
        }
        return self::$object;
    }

    public function init(  ) {
        
    }
}