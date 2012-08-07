<?php
/**
 * Copyright 2012 CityIndex Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace CityIndex\CIAPI\Test;
require_once 'PHPUnitClass.php';

/**
 * This test case is solely used to excercise required PHPUnit functionality in the context
 * of this project in order to help with environment configuration and debugging.
 */
class PHPUnitTest extends \PHPUnit_Framework_TestCase {
	protected $ctx;

	protected function setUp() {
		$this->ctx = PHPUnitClass::getInstance();
	}

	public function testNothing() {
		$this->assertFalse(false);
		$this->assertTrue(true);
	}

	public function testInstance() {
		$this->assertInstanceOf('CityIndex\CIAPI\Test\PHPUnitClass', $this->ctx);
	}
	public function testSomething() {
		$this->assertEquals("Info set by class PHPUnitClass constructor.", $this->ctx->doSomething(true));
	}

	public function testSomethingElse() {
		$this->assertEquals("Method doSomething() called with argument 'false'!", $this->ctx->doSomething(false));
	}

	/**
	 * @expectedException RuntimeException
	 */
	public function testThrow() {
		$this->ctx->doThrow();
	}

	public function testStub() {
		$stub = $this->getMock('CityIndex\CIAPI\Test\PHPUnitInterface');

		$map = array(
			array(
				true, 'foo'
			), array(
				false, 'bar'
			)
		);
		$stub->expects($this->any())->method('doSomething')->will($this->returnValueMap($map));

		$this->assertEquals('foo', $stub->doSomething(true));
		$this->assertEquals('bar', $stub->doSomething(false));
	}
}
