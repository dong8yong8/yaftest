<?php namespace  Sow\redis;
use Sow\bug as Y;
use Sow\sys\Exception as Exception;
class Instance {

    public static $_instance = array();

    public static function db( $name ) {

        if (isset($_instance[$name])){
            if ($_instance[$name] instanceof Predis\Client) {
                return $_instance[$name];
            }        
        }
        $redis = Y::get('redis');
        $config = $redis[$name];
        $_instance[$name] = new \Predis\Client($config);
	
        return $_instance[$name];


    }


}
