<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response from a session delete (Log Out) request.
 */
class ApiLogOffResponseDTO {
	private $loggedOut;

	/**
	 * @param boolean $loggedOut
	 */
	public function __construct($loggedOut) {
		$this->loggedOut = $loggedOut;
	}

	/**
	 * @return boolean
	 */
	public function getLoggedOut() {
		return $this->loggedOut;
	}
}
