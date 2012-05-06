<?php

namespace CityIndex\CIAPI\Core;

use CityIndex\CIAPI\DTO\ApiLogOnRequestDTO;

require_once 'lib/CityIndex/CIAPI/Core/CIAPI.php';
require_once 'lib/CityIndex/CIAPI/DTO/DTO.php';

use CityIndex\CIAPI\DTO\ApiLogOnResponseDTO;


/**
 * City Index Trading API (CIAPI) client.
 */
class CIAPIClient implements CIAPI {
	private $userName;
	private $session;
	private $appKey;
	private $appVersion;
	private $appComments;

	/**
	 * Initalize the class attribute info.
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
	 * Get UserName
	 *
	 * @return string $userName
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * Get Session
	 *
	 * @return string $session
	 */
	public function getSession() {
		return $this->session;
	}

	/**
	 * Get App Key
	 *
	 * @return string $appKey
	 */
	public function getAppKey()
	{
		return $this->appKey;
	}

	/**
	 * Get App Version
	 *
	 * @return string $appVersion
	 */
	public function getAppVersion()
	{
		return $this->appVersion;
	}

	/**
	 * Get App Comments
	 *
	 * @return string $appComments
	 */
	public function getAppComments()
	{
		return $this->appComments;
	}
}
