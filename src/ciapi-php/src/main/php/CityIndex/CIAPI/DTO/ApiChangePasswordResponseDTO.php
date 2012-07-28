<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response to a change password request.
 */
class ApiChangePasswordResponseDTO extends AbstractResponseDTO {
	/**
	 * @var boolean $isPasswordChanged
	 */
	public $isPasswordChanged;
}
