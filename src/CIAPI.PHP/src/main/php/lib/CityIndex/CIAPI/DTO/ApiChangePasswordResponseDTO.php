<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response to a change password request.
 */
class ApiChangePasswordResponseDTO {
	private $isPasswordChanged;

	/**
	 * @param bool $isPasswordChanged
	 */
	public function __construct($isPasswordChanged) {
		$this->isPasswordChanged = $isPasswordChanged;
	}

	/**
	 * @return bool
	 */
	public function getLoggedOut() {
		return $this->isPasswordChanged;
	}
}
