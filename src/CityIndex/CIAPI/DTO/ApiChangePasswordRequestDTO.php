<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Request to create a session (log in).
 */
class ApiChangePasswordRequestDTO extends AbstractRequestDTO {
	/**
	 * @var string $userName
	 */
	public $userName;

	/**
	 * @var string $password
	 */
	public $password;
}
