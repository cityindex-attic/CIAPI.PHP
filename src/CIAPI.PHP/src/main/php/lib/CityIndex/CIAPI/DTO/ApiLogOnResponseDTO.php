<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response to a session create (Log In) request.
 */
class ApiLogOnResponseDTO {
	/**
	 * @var string $session
	 */
	public $session;

	/**
	 * @var boolean $passwordChangeRequired
	 */
	public $passwordChangeRequired;

	/**
	 * @var boolean $allowedAccountOperator
	 */
	public $allowedAccountOperator;
}
