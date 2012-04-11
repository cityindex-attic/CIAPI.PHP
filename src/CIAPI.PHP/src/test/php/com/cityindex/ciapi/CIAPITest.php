<?php

require_once 'lib/com/cityindex/ciapi/CIAPI.php';

use com\cityindex\ciapi\CIAPI as Context;

/**
 * Skeleton
 */
class CIAPITest extends PHPUnit_Framework_TestCase {
	
	public function testNothing() {
		$this->assertTrue(true);
	}
	
	public function testSomething() {
		$ctx = Context::getInstance();
		$this->assertTrue($ctx->doSomething(true) == "Info set by class CIAPI constructor.");
	}
	
	public function testSomethingElse() {
		$ctx = Context::getInstance();
		$this->assertTrue($ctx->doSomething(false) == "Method doSomething() called with argument 'false'!");
	}
	
}
