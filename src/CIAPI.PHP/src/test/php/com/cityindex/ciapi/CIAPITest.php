<?php

require_once 'lib/com/cityindex/ciapi/CIAPIClient.php';

use com\cityindex\ciapi\CIAPIClient;


class CIAPITest extends PHPUnit_Framework_TestCase {
	protected $ctx;
	static private $userName = "NOTAUSERNAME";
	static private $password = "NOTAPASSWORD";
	
	protected function setUp() {
 		$this->ctx = new CIAPIClient();
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
