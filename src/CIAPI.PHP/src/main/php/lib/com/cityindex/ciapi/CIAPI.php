<?php

namespace com\cityindex\ciapi;


/**
 * Sample Singleton Pattern.
 */
class CIAPI {
    static private $info;
    static private $instance = null;

    /**
     *  Initalize the class attribute info.
     */
    private function __construct() {
        $this->info = "Info set by class CIAPI constructor.";
    }

    /**
     * Return the existing instance, if any, otherwise create one.
     *
     * @return <CIAPI> instance
     */
    static public function getInstance() {
         if (null === self::$instance) {
             self::$instance = new self;
         }
         return self::$instance;
    }

    /**
     * Sample class method.
     *
     * @param boolean $returnClassInfo
     * @return string $message
     */
    public function doSomething($returnClassInfo) {

        $message = "";
        if ($returnClassInfo == true) {
             $message = $this->info;
	}
        else {
             $message = "Method doSomething() called with argument 'false'!";
	}

        return $message;
    }
}
?>
