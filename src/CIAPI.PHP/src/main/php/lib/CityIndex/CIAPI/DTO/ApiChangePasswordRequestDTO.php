<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Request to create a session (log in).
 */
class ApiChangePasswordRequestDTO {
	private $userName;
	private $password;

	/**
	 * @param string $userName
	 * @param string $password
	 */
	public function __construct($userName, $password) {
		$this->userName = $userName;
		$this->password = $password;
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
}
