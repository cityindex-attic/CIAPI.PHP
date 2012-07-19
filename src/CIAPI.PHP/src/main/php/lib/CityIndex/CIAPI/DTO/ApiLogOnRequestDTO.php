<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Request to create a session (log in).
 */
class ApiLogOnRequestDTO {
	const userNameMinLength = 6;
	const userNameMaxLength = 20;
	const passwordMinLength = 6;
	const passwordMaxLength = 20;

	private $userName;
	private $password;
	private $appKey;
	private $appVersion;
	private $appComments;

	/**
	 * Initalize the class attribute info.
	 *  
	 * @param string $userName
	 * @param string $password
	 * @param string $appKey
	 * @param string $appVersion
	 * @param string $appComments (optional)
	 */
	public function __construct($userName, $password, $appKey, $appVersion,
			$appComments = "") {
		$this->userName = $userName;
		$this->password = $password;
		$this->appKey = $appKey;
		$this->appVersion = $appVersion;
		$this->appComments = $appComments;
	}

	public function getUserName() {
		return $this->userName;
	}

	public function getPassword() {
		return $this->password;
	}

	public function getAppKey() {
		return $this->appKey;
	}

	public function getAppVersion() {
		return $this->appVersion;
	}

	public function getAppComments() {
		return $this->appComments;
	}
}
