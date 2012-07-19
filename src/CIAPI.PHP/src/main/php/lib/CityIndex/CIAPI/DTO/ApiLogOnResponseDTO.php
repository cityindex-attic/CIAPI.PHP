<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response to a session create (Log In) request.
 */
class ApiLogOnResponseDTO {
	private $session;
	private $passwordChangeRequired;
	private $allowedAccountOperator;
	
    /**
     * Initalize the class attribute info.
     *  
     * @param string $session
     * @param bool $passwordChangeRequired
     * @param bool $allowedAccountOperator
     */
    public function __construct($session, $passwordChangeRequired, $allowedAccountOperator) {
        $this->session = $session;
        $this->passwordChangeRequired = $passwordChangeRequired;
        $this->allowedAccountOperator = $allowedAccountOperator;
    }

	/**
	 * Getter for session attribute
	 *
	 * @return string $session
	 */
    public function getSession()
	{
		return $this->session;
	}

	/**
	 * Getter for passwordChangeRequired attribute
	 *
	 * @return bool $passwordChangeRequired
	 */
	public function getPasswordChangeRequired()
	{
		return $this->passwordChangeRequired;
	}

	/**
	 * Getter for allowedAccountOperator attribute
	 *
	 * @return bool $allowedAccountOperator
	 */
	public function getAllowedAccountOperator()
	{
		return $this->allowedAccountOperator;
	}
}
