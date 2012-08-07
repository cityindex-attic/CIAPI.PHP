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
require_once 'CIAPITestCase.php';

use CityIndex\CIAPI\Core\CIAPIClient;

abstract class CIAPIIntegrationTestCase extends CIAPITestCase {
	/**
	 * Try to initialize endpoint and credentials from environment variables
	 */
	protected static function initializeEnvironment() {
		$env = array(
				'CIAPI_ENDPOINT' => self::$endpoint, 'CIAPI_USERNAME' => self::$userName,
				'CIAPI_PASSWORD' => self::$password
		);
		array_walk($env,
				function (&$value, $key) {
					$envValue = getenv($key);
					if ($envValue) {
						$value = $envValue;
					}
				});
		self::$endpoint = $env['CIAPI_ENDPOINT'];
		self::$userName = $env['CIAPI_USERNAME'];
		self::$password = $env['CIAPI_PASSWORD'];
	}

	protected function setUp() {
		if (!getenv('CIAPI_USERNAME') || !getenv('CIAPI_PASSWORD')) {
			$this->markTestSkipped('CIAPI credentials are not available.');
		}
	}
}
