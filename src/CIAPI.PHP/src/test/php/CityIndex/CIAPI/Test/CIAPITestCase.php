<?php

namespace CityIndex\CIAPI\Test;
// @todo: this is rather kludgy ...
require_once __DIR__ . '/../../../../../../vendor/autoload.php';

use CityIndex\CIAPI\Core\CIAPIClient;
use CityIndex\CIAPI\Core\SessionException;
use CityIndex\CIAPI\DTO\AccountInformationResponseDTO;

abstract class CIAPITestCase extends \PHPUnit_Framework_TestCase {
	static protected $endpoint = CIAPIClient::ENDPOINT_RPC_PPE;
	static protected $userName = 'NOTAUSERNAME';
	static protected $password = 'NOTAPASSWORD';
	static protected $appKey = 'CIAPI.PHP';
	static protected $appVersion = '1.0-SNAPSHOT'; // @todo: derive automatically.
}
