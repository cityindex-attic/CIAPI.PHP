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
