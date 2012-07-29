<?php

namespace CityIndex\CIAPI\Test;
require_once 'CIAPIIntegrationTestCase.php';

use CityIndex\CIAPI\Core\CIAPIClient;
use CityIndex\CIAPI\Core\SessionException;
use CityIndex\CIAPI\DTO\AccountInformationResponseDTO;

class AuthenticationTest extends CIAPIIntegrationTestCase {
	static private $ctx;

	public static function setUpBeforeClass() {
		parent::initializeEnvironment();
		self::$ctx = new CIAPIClient(self::$endpoint, self::$appKey, self::$appVersion);
	}

	/**
	 * @test
	 * @expectedException CityIndex\CIAPI\Core\SessionException
	 */
	public function logInFailsWithShortPassword() {
		$response = self::$ctx->logIn(self::$userName, '01234');
	}

	/**
	 * @test
	 * @expectedException CityIndex\CIAPI\Core\SessionException
	 */
	public function logInFailsWithLongPassword() {
		$response = self::$ctx->logIn(self::$userName, '0123456789012345678901234567890123456');
	}

	/**
	 * Log In
	 *
	 * @test
	 */
	public function logInSucceeds() {
		$response = self::$ctx->logIn(self::$userName, self::$password);
		$this->assertInstanceOf('CityIndex\CIAPI\DTO\ApiLogOnResponseDTO', $response);
		$this->assertNotNull(self::$ctx->getUserName());
		$this->assertNotNull(self::$ctx->getSession());
	}

	/**
	 * Change Password
	 *
	 * @todo: the change password implementation isn't available yet, and the test must likely
	 * be adjusted anyway to reset the test credentials to the expected state.
	 *
	 * @test
	 */
	public function changePassword() {
		$newPassphrase = 'This is the new passphrase!';
		$userName = self::$ctx->getUserName();

		$this->markTestIncomplete('Method under test not yet implemented.');
		$response = self::$ctx->changePassword($userName, $newPassphrase);
		//		$this->assertEquals($newPassphrase, $this->ctx->getUserName(), 'New password doesn\'t match expectation!');
	}

	/**
	 * Log Out
	 *
	 * @test
	 */
	public function logOutSucceeds() {
		$this->assertNotNull(self::$ctx->getSession());
		$response = self::$ctx->logOut();
		$this->assertTrue($response);
		$this->assertNull(self::$ctx->getSession());
	}
}
