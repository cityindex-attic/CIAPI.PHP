<?php

namespace CityIndex\CIAPI\Test;
// @todo: this is rather kludgy ...
require_once __DIR__ . '/../../../../../../vendor/autoload.php';

use CityIndex\CIAPI\Core\CIAPIClient;
use CityIndex\CIAPI\Core\SessionException;
use CityIndex\CIAPI\DTO\AccountInformationResponseDTO;

class AccountInformationTest extends \PHPUnit_Framework_TestCase {
	static private $endpoint = 'https://example.com/';
	static private $userName = 'NOTAUSERNAME';
	static private $password = 'NOTAPASSWORD';
	static private $appKey = 'CIAPI.PHP';
	static private $appVersion = '1.0-SNAPSHOT'; // @todo: derive automatically.
	protected static $ctx;

	public static function setUpBeforeClass() {
		self::$ctx = new CIAPIClient(self::$endpoint, self::$appKey, self::$appVersion);
		self::$ctx->logIn(self::$userName, self::$password);
	}

	protected function tearDown() {
		self::$ctx->logOut();
	}

	/**
	 * @test
	 */
	public function getAccountInformation() {
		$this->assertNotNull(self::$ctx->getSession());
		$response = self::$ctx->getAccountInformation();
		$this->assertInstanceOf('CityIndex\CIAPI\DTO\AccountInformationResponseDTO', $response);
		$this->assertNotEmpty($response->logonUserName);
		$this->assertNotEmpty($response->clientAccountId);
		$this->assertNotEmpty($response->clientAccountCurrency);
		$this->assertNotEmpty($response->accountOperatorId);
		foreach ($response->tradingAccounts as $tradingAccount) {
			$this->assertInstanceOf('CityIndex\CIAPI\DTO\ApiTradingAccountDTO', $tradingAccount);
			$this->assertNotEmpty($tradingAccount->tradingAccountId);
			$this->assertNotEmpty($tradingAccount->tradingAccountCode);
			$this->assertNotEmpty($tradingAccount->tradingAccountStatus);
			$this->assertNotEmpty($tradingAccount->tradingAccountType);
		}
	}
}
