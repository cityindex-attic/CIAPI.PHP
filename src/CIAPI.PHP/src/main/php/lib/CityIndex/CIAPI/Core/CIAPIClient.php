<?php

namespace CityIndex\CIAPI\Core;

use CityIndex\CIAPI\DTO\ApiLogOnRequestDTO;

require_once 'lib/CityIndex/CIAPI/Core/CIAPI.php';

use CityIndex\CIAPI\DTO\ApiLogOnResponseDTO;


/**
 * City Index Trading API (CIAPI) client.
 */
class CIAPIClient implements CIAPI {
	const idMinValue = -2147483648;
	const idMaxValue = 2147483647;
	
	private $userName;
	private $session;
	private $appKey;
	private $appVersion;
	private $appComments;

	/**
	 * @param string $appKey
	 * @param string $appVersion
	 * @param string $appComments
	 */
	public function __construct($appKey, $appVersion, $appComments = "") {
		$this->appKey = $appKey;
		$this->appVersion = $appVersion;
		$this->appComments = $appComments;
	}

	/**
	 * Log In
	 *
	 * @param string $userName
	 * @param string $password
	 * @return ApiLogOnResponseDTO $response
	 */
	public function logIn($userName, $password) {
		if (strlen($userName) < ApiLogOnRequestDTO::userNameMinLength 
				|| strlen($userName) > ApiLogOnRequestDTO::userNameMaxLength) {
			throw new SessionException(SessionException::userNameLengthViolation);
		}
		if (strlen($password) < ApiLogOnRequestDTO::passwordMinLength
				|| strlen($password) > ApiLogOnRequestDTO::passwordMaxLength) {
			throw new SessionException(SessionException::passwordLengthViolation);
		}
		
		$this->userName = $userName;
		$request = new ApiLogOnRequestDTO($userName, $password,
				$this->appKey, $this->appVersion, $this->appComments);

		return null;
	}

	/**
	 * Log Out
	 *
	 * @return bool $result
	 */
	public function logOut() {
		$this->session = null;

		return true;
	}

	/**
	 * Change Password
	 *
	 * @param string $userName
	 * @param string $password
	 * @return ApiLogOnResponseDTO $response
	 */
	public function changePassword($userName, $password) {
		// @todo: strangely the following chokes with PHPUnit currently:
		// throw new RuntimeException("Not implemented!");
		return null;
	}

	/**
	 * @return string $userName
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * @return string $session
	 */
	public function getSession() {
		return $this->session;
	}

	/**
	 * @return string $appKey
	 */
	public function getAppKey()
	{
		return $this->appKey;
	}

	/**
	 * @return string $appVersion
	 */
	public function getAppVersion()
	{
		return $this->appVersion;
	}

	/**
	 * @return string $appComments
	 */
	public function getAppComments()
	{
		return $this->appComments;
	}
}
