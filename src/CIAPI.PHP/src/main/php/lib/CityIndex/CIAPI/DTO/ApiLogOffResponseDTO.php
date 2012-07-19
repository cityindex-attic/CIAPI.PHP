<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response from a session delete (Log Out) request.
 */
class ApiLogOffResponseDTO {
	private $loggedOut;

	/**
	 * Initalize the class attribute info.
	 *  
	 * @param bool $loggedOut
	 */
	public function __construct($loggedOut) {
		$this->loggedOut = $loggedOut;
	}

	/**
	 * Getter for loggedOut attribute
	 *
	 * @return bool $loggedOut
	 */
	public function getLoggedOut() {
		return $this->loggedOut;
	}
}
