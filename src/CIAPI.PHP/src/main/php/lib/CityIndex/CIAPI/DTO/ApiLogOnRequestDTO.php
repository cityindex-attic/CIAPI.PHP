<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Request to create a session (log in).
 */
class ApiLogOnRequestDTO {
	const USER_NAME_MIN_LENGTH = 6;
	const USER_NAME_MAX_LENGTH = 20;
	const PASSWORD_MIN_LENGTH = 6;
	const PASSWORD_MAX_LENGTH = 20;

	private $userName;
	private $password;
	private $appKey;
	private $appVersion;
	private $appComments;

	/**
	 * @param string $userName
	 * @param string $password
	 * @param string $appKey
	 * @param string $appVersion
	 * @param string $appComments (optional)
	 */
	public function __construct($userName, $password, $appKey, $appVersion, $appComments = "") {
		$this->userName = $userName;
		$this->password = $password;
		$this->appKey = $appKey;
		$this->appVersion = $appVersion;
		$this->appComments = $appComments;
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
	public function getPassword() {
		return $this->password;
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
