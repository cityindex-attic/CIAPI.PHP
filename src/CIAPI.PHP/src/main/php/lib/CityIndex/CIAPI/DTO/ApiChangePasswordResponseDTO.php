<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response to a change password request.
 */
class ApiChangePasswordResponseDTO {
	private $isPasswordChanged;

	/**
	 * Initalize the class attribute info.
	 *
	 * @param bool $isPasswordChanged
	 */
	public function __construct($isPasswordChanged) {
		$this->isPasswordChanged = $isPasswordChanged;
	}

	/**
	 * Getter for isPasswordChanged attribute
	 *
	 * @return bool $isPasswordChanged
	 */
	public function getLoggedOut() {
		return $this->isPasswordChanged;
	}
}
