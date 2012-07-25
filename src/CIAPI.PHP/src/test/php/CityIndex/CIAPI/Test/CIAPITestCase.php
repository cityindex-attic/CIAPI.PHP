<?php

namespace CityIndex\CIAPI\Test;
// @todo: this is rather kludgy ...
require_once __DIR__ . '/../../../../../../vendor/autoload.php';

use CityIndex\CIAPI\Core\CIAPIClient;
use CityIndex\CIAPI\Core\SessionException;
use CityIndex\CIAPI\DTO\AccountInformationResponseDTO;

class CIAPITestCase extends \PHPUnit_Framework_TestCase {
	static protected $endpoint = 'https://ciapipreprod.cityindextest9.co.uk/TradingApi/';
	static protected $userName = 'NOTAUSERNAME';
	static protected $password = 'NOTAPASSWORD';
	static protected $appKey = 'CIAPI.PHP';
	static protected $appVersion = '1.0-SNAPSHOT'; // @todo: derive automatically.
	protected static $ctx;

	public static function setUpBeforeClass() {
		self::$ctx = new CIAPIClient(self::$endpoint, self::$appKey, self::$appVersion);
	}

	/**
	 * @todo: This is just a dummy to avoid a respective warning w/o test, which should be removed.
	 * @test
	 */
	public function contextNotNull() {
		$this->assertNotNull(self::$ctx);
	}
}
