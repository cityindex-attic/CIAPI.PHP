<?php

require_once 'PHPUnitInterface.php';


/**
 * This class is solely used to excercise required PHPUnit functionality in the context
 * of this project in order to help with environment configuration and debugging.
 *
 * It implements a sample singleton pattern.
 */
class PHPUnitClass implements PHPUnitInterface {
	static private $info;
	static private $instance = null;

	/**
	 * Initalize the class attribute info.
	 */
	private function __construct() {
		$this->info = "Info set by class PHPUnitClass constructor.";
	}

	/**
	 * Return the existing instance, if any, otherwise create one.
	 *
	 * @return <PHPUnitClass> instance
	 */
	static public function getInstance() {
		if (null === self::$instance) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Sample class method doing something.
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

	/**
	 * Sample class method throwing an exception.
	 *
	 * @throws RuntimeException
	 */
	public function doThrow() {
		throw new RuntimeException('RuntimeException thrown on purpose in doThrow().');
	}
}
