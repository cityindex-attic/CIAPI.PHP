<?php

//namespace CityIndex\CIAPI\Test;

// @todo: this is rather kludgy ...
require_once __DIR__ . '/../../../../../../vendor/autoload.php';

use CityIndex\CIAPI\Core\CIAPIClient;
use CityIndex\CIAPI\Core\SessionException;
use CityIndex\CIAPI\DTO\AccountInformationResponseDTO;


class CIAPITest extends \PHPUnit_Framework_TestCase {
	static private $endpoint = 'https://example.com/';
	static private $userName = 'NOTAUSERNAME';
	static private $password = 'NOTAPASSWORD';
	static private $appKey = 'CIAPITest';
	static private $appVersion = '1.0-SNAPSHOT';	// @todo: derive automatically.
	protected $ctx;
	
	protected function setUp() {
 		$this->ctx = new CIAPIClient(self::$endpoint, self::$appKey, self::$appVersion);
	}

	/**
	 * Log In
	 *
	 * @test
	 */
	public function logInSucceeds() {
		$response = $this->ctx->logIn(self::$userName, self::$password);
		$this->assertNull($response);
		// @todo: $this->assertInstanceOf('ApiLogOnResponseDTO', $response);
// 		$this->assertNotNull($this->ctx->getSession());
	}
	
	/**
	 * Log Out
	 *
	 * @test
	 */
	public function logOutSucceeds() {
		$response = $this->ctx->logOut();
		$this->assertTrue($response);
		$this->assertNull($this->ctx->getSession());
	}
	
	/**
	 * @test
	 * @expectedException CityIndex\CIAPI\Core\SessionException
	 */
	public function logInFailsWithShortPassword() {
		$response = $this->ctx->logIn(self::$userName, '01234');
	}
	
	/**
	 * @test
	 * @expectedException CityIndex\CIAPI\Core\SessionException
	 */
	public function logInFailsWithLongPassword() {
		$response = $this->ctx->logIn(self::$userName, '0123456789012345678901234567890123456');
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
		$userName = $this->ctx->getUserName();
		
		$response = $this->ctx->changePassword($userName, $newPassphrase);
		$this->assertNull($response);
//		$this->assertEquals($newPassphrase, $this->ctx->getUserName(), 'New password doesn\'t match expectation!'); 
	}

	/**
	 * @test
	 */
	public function getAccountInformation() {
		$response = $this->ctx->getAccountInformation();
		$this->assertInstanceOf('CityIndex\CIAPI\DTO\AccountInformationResponseDTO', $response);
	}
}
