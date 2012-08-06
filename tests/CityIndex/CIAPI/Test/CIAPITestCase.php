<?php

namespace CityIndex\CIAPI\Test;

use CityIndex\CIAPI\Core\CIAPIClient;

abstract class CIAPITestCase extends \PHPUnit_Framework_TestCase {
	protected static $endpoint = CIAPIClient::ENDPOINT_RPC_PPE;
	protected static $userName = 'NOTAUSERNAME';
	protected static $password = 'NOTAPASSWORD';
	protected static $appKey = 'CIAPI.PHP';
	protected static $appVersion = '1.0-SNAPSHOT'; // @todo: derive automatically.
}
