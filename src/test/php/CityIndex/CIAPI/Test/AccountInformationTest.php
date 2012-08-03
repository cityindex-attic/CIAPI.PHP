<?php

namespace CityIndex\CIAPI\Test;
require_once 'CIAPIIntegrationTestCase.php';

use CityIndex\CIAPI\Core\CIAPIClient;
use CityIndex\CIAPI\Core\SessionException;
use CityIndex\CIAPI\DTO\AccountInformationResponseDTO;

class AccountInformationTest extends CIAPIIntegrationTestCase {
	static private $ctx;

	public static function setUpBeforeClass() {
		parent::initializeEnvironment();
		self::$ctx = new CIAPIClient(self::$endpoint, self::$appKey, self::$appVersion);
		self::$ctx->logIn(self::$userName, self::$password);
	}

	public static function tearDownAfterClass() {
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
