<?php

/**
 * PhrameWork base class
 */

namespace PhrameWork;

class PhrameWork {


    /**
     * Base class constructor
     *
     * @param array $config Array of overrides for the created classes properties
     */
    public function __construct ($config = null) {

        if(isset($config)){

            foreach($config as $key => $value){

                if(property_exists($this, $key)){

                    $this->$key = $value;

                }

            }

        }

    }

    /**
     * Factory method to create a new PhrameWork application
     *
     * @param  array $config Array of settings to override the object being created
     *
     * @return [type]         [description]
     */
    public static function init($config) {
        require __DIR__."/Application.php";
        $app = new Application($config);
        spl_autoload_register(array($app, "load"));
        return $app;
    }

    /**
     * Utility function for printing variables
     *
     * @param  mixed $var Some variable
     *
     * @return void
     */
    public function print_var($var) {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }

}

?>