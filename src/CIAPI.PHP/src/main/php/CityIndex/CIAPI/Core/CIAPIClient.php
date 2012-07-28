<?php

namespace CityIndex\CIAPI\Core;

use CityIndex\CIAPI\DTO\AbstractRequestDTO;
use CityIndex\CIAPI\DTO\AccountInformationResponseDTO;
use CityIndex\CIAPI\DTO\ApiLogOffResponseDTO;
use CityIndex\CIAPI\DTO\ApiLogOnRequestDTO;
use CityIndex\CIAPI\DTO\ApiLogOnResponseDTO;
use CityIndex\CIAPI\DTO\ApiTradingAccountDTO;

/**
 * City Index Trading API (CIAPI) client.
 */
class CIAPIClient implements CIAPI {
	/**
	 * @var string - The RPC endpoint for the City Index "Live" environment
	 */
	const ENDPOINT_RPC_LIVE = 'https://ciapi.cityindex.com/tradingapi/';

	/**
	 * @var string - The RPC endpoint for the City Index "Pre-Production" environment
	 */
	const ENDPOINT_RPC_PPE = 'https://ciapipreprod.cityindextest9.co.uk/TradingApi/';

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
	 * @throws SessionException
	 */
	public function logIn($userName, $password) {
		self::validateLength($userName, ApiLogOnRequestDTO::USER_NAME_MIN_LENGTH,
				ApiLogOnRequestDTO::USER_NAME_MAX_LENGTH, SessionException::USER_NAME_LENGTH_VIOLATION);
		self::validateLength($password, ApiLogOnRequestDTO::PASSWORD_MIN_LENGTH,
				ApiLogOnRequestDTO::PASSWORD_MAX_LENGTH, SessionException::PASSWORD_LENGTH_VIOLATION);

		$this->userName = $userName;
		$requestDTO = new ApiLogOnRequestDTO();
		$requestDTO->userName = $userName;
		$requestDTO->password = $password;
		$requestDTO->appKey = $this->appKey;
		$requestDTO->appVersion = $this->appVersion;
		$requestDTO->appComments = $this->appComments;

		$response = $this->post($this->endpoint . '/session', $requestDTO);
		$result = new ApiLogOnResponseDTO($response->body);
		$this->session = $result->session;

		return $result;

	}

	/**
	 * Log Out
	 *
	 * @return boolean $result
	 */
	public function logOut() {
		$response = $this->post($this->endpoint . '/session/deleteSession');
		$result = new ApiLogOffResponseDTO($response->body);
		if ($result->loggedOut) {
			$this->session = null;
		}

		return $result->loggedOut;
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
		$response = $this->get($this->endpoint . '/UserAccount/ClientAndTradingAccount');
		$result = new AccountInformationResponseDTO($response->body);

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

	/**#@+
	 * @param string $url
	 * @param array $headers
	 * @param array $options
	 * @return \Requests_Response
	 */
	/**
	 * Send a GET request
	 */
	public function get($url, $headers = array(), $options = array()) {
		$defaultHeaders = array(
			'Content-Type' => 'application/json', 'UserName' => $this->userName, 'Session' => $this->session,
		);
		$headers = array_merge($defaultHeaders, $headers);
		$defaultOptions = array();
		$options = array_merge($defaultOptions, $options);

		return \Requests::get($url, $headers, $options);
	}

	/**#@+
	 * @param string $url
	 * @param AbstractRequestDTO $data
	 * @param array $headers
	 * @param array $options
	 * @return \Requests_Response
	 */
	/**
	 * Send a POST request
	 */
	public function post($url, AbstractRequestDTO $requestDTO = null, $headers = array(), $options = array()) {
		$jsonRequestDTO = is_null($requestDTO) ? "{}" : json_encode(get_object_vars($requestDTO));
		$defaultHeaders = array(
			'Content-Type' => 'application/json', 'UserName' => $this->userName, 'Session' => $this->session,
		);
		$headers = array_merge($defaultHeaders, $headers);
		$defaultOptions = array();
		$options = array_merge($defaultOptions, $options);

		return \Requests::post($url, $headers, $jsonRequestDTO, $options);
	}

	/**
	 * @param string $userName
	 * @param integer $minLength
	 * @param integer $maxLength
	 * @param string $errorMessage
	 * @throws SessionException
	 */
	protected static function validateLength($parameterValue, $minLength, $maxLength, $errorMessage) {
		if (strlen($parameterValue) < $minLength || strlen($parameterValue) > $maxLength) {
			throw new SessionException($errorMessage);
		}
	}
}
