<?php

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
