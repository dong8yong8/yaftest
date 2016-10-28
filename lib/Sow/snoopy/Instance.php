<?php
namespace  Sow\snoopy;
use Sow\bug as Y;
use Sow\snoopy\Snoopy as Snoopy;
class Instance {

    public static $instance = NULL;

   
     /**
     * Gets singleton instance of Snoopy
     *
     * @param boolean $autoCreate
     * @return Snoopy
     */
    public static function getInstance()
    {    
        if (!self::$instance) {
            self::init();
        }
        return self::$instance;
    }
    
    /**
     * Creates Snoopy object for singleton access
     *
     * @return Snoopy
     */
    public static function init()
    {
        return self::setInstance(new Snoopy);
    }

    /**
     * Set the instance of the Snoopy singleton
     * 
     * @param Snoopy $instance The Snoopy object instance
     * @return Snoopy
     */
    public static function setInstance($instance)
    {
        return self::$instance = $instance;
    }

}




?>