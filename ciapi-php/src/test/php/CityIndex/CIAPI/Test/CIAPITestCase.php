<?php

namespace CityIndex\CIAPI\Test;

use CityIndex\CIAPI\Core\CIAPIClient;
use CityIndex\CIAPI\Core\SessionException;
use CityIndex\CIAPI\DTO\AccountInformationResponseDTO;

abstract class CIAPITestCase extends \PHPUnit_Framework_TestCase {
	protected static $endpoint = CIAPIClient::ENDPOINT_RPC_PPE;
	protected static $userName = 'NOTAUSERNAME';
	protected static $password = 'NOTAPASSWORD';
	protected static $appKey = 'CIAPI.PHP';
	protected static $appVersion = '1.0-SNAPSHOT'; // @todo: derive automatically.

	/**
	 * Try to initialize endpoint and credentials from environment variables
	 */
	protected static function initializeEnvironment() {
		$env = array('CIAPI_ENDPOINT' => self::$endpoint, 'CIAPI_USERNAME' => self::$userName, 'CIAPI_PASSWORD' => self::$password);
		array_walk($env, function(&$value, $key) {
			$envValue = getenv($key);
			if ($envValue) {
				$value = $envValue;
			}
		});
		self::$endpoint = $env['CIAPI_ENDPOINT'];
		self::$userName = $env['CIAPI_USERNAME'];
		self::$password = $env['CIAPI_PASSWORD'];
	}
}
