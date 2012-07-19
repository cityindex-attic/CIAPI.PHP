<?php

namespace CityIndex\CIAPI\Test;
// @todo: this is rather kludgy ...
require_once __DIR__ . '/../../../../../../vendor/autoload.php';

use \Requests;

/**
 * This test case is solely used to excercise basic Requests library functionality in the context
 * of this project in order to help with environment configuration and debugging.
 */
class RequestsTest extends \PHPUnit_Framework_TestCase {
	const ENDPOINT = 'http://httpbin.org/get';

	public function testExampleCom200() {
		$request = Requests::get(self::ENDPOINT);
		$this->assertEquals(200, $request->status_code);
	}
}
