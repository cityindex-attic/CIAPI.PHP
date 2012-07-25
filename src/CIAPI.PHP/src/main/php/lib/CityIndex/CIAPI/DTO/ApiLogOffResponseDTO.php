<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response from a session delete (Log Out) request.
 */
class ApiLogOffResponseDTO extends AbstractResponseDTO {
	/**
	 * @var boolean $loggedOut
	 */
	public $loggedOut;
}
