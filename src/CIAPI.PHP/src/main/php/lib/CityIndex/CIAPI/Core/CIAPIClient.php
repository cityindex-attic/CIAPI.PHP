<?php

namespace CityIndex\CIAPI\Core;
require_once 'CIAPI.php';

use CityIndex\CIAPI\DTO\AccountInformationResponseDTO;
use CityIndex\CIAPI\DTO\ApiLogOnRequestDTO;
use CityIndex\CIAPI\DTO\ApiLogOnResponseDTO;

/**
 * City Index Trading API (CIAPI) client.
 */
class CIAPIClient implements CIAPI {
	const ID_MIN_VALUE = -2147483648;
	const ID_MAX_VALUE = 2147483647;

	private $endpoint;
	private $userName;
	private $session;
	private $appKey;
	private $appVersion;
	private $appComments;

	/**
	 * @param string $endpoint
	 * @param string $appKey
	 * @param string $appVersion
	 * @param string $appComments (optional)
	 */
	public function __construct($endpoint, $appKey, $appVersion, $appComments = "") {
		$this->endpoint = $endpoint;
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
		if (strlen($userName) < ApiLogOnRequestDTO::USER_NAME_MIN_LENGTH
				|| strlen($userName) > ApiLogOnRequestDTO::USER_NAME_MAX_LENGTH) {
			throw new SessionException(SessionException::USER_NAME_LENGTH_VIOLATION);
		}
		if (strlen($password) < ApiLogOnRequestDTO::PASSWORD_MIN_LENGTH
				|| strlen($password) > ApiLogOnRequestDTO::PASSWORD_MAX_LENGTH) {
			throw new SessionException(SessionException::PASSWORD_LENGTH_VIOLATION);
		}

		$this->userName = $userName;
		$request = new ApiLogOnRequestDTO($userName, $password, $this->appKey, $this->appVersion, $this->appComments);

		// @todo
		$response = new ApiLogOnResponseDTO(null, false, false);

		return $response;
	}

	/**
	 * Log Out
	 *
	 * @return boolean $result
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
	 * @return ApiLogOnResponseDTO
	 */
	public function changePassword($userName, $password) {
		// @todo: strangely the following chokes with PHPUnit currently:
		// throw new RuntimeException("Not implemented!");
		return null;
	}

	/**
	 * @return string
	 */
	public function getEndpoint() {
		return $this->endpoint;
	}

	/**
	 * @return string
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * @return string
	 */
	public function getSession() {
		return $this->session;
	}

	/**
	 * @return AccountInformationResponseDTO
	 */
	public function getAccountInformation() {
		// @todo
		$result = new AccountInformationResponseDTO('', '', '', '', array(), '', '');

		return $result;
	}

	/**
	 * @return string
	 */
	public function getAppKey() {
		return $this->appKey;
	}

	/**
	 * @return string
	 */
	public function getAppVersion() {
		return $this->appVersion;
	}

	/**
	 * @return string
	 */
	public function getAppComments() {
		return $this->appComments;
	}
}
