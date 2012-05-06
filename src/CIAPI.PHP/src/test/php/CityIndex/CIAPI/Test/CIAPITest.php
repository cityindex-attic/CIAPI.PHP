<?php

require_once 'lib/CityIndex/CIAPI/Core/CIAPIClient.php';

use CityIndex\CIAPI\Core\CIAPIClient;


class CIAPITest extends PHPUnit_Framework_TestCase {
	static private $userName = 'NOTAUSERNAME';
	static private $password = 'NOTAPASSWORD';
	static private $appKey = 'CIAPITest';
	static private $appVersion = '1.0-SNAPSHOT';	// @todo: derive automatically.
	protected $ctx;
	
	protected function setUp() {
 		$this->ctx = new CIAPIClient(self::$appKey, self::$appVersion);
	}

	/**
	 * Log In
	 *
	 * @test
	 */
	public function logIn() {
		$response = $this->ctx->logIn(self::$userName, self::$password);
		$this->assertNull($response);
		// @todo: $this->assertInstanceOf('ApiLogOnResponseDTO', $response);
	}
	
	/**
	 * Log Out
	 *
	 * @test
	 */
	public function logOut() {
		$response = $this->ctx->logOut();
		$this->assertTrue($response);
	}
	
	/**
	 * Change Password
	 *
	 * @todo: the change passwor implementation isn't available yet, and the test must likely 
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
}
