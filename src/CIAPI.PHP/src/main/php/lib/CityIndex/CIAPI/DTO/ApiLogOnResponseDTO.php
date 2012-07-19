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
	 * @return string
	 */
    public function getSession()
	{
		return $this->session;
	}

	/**
	 * @return boolean
	 */
	public function getPasswordChangeRequired()
	{
		return $this->passwordChangeRequired;
	}

	/**
	 * @return boolean
	 */
	public function getAllowedAccountOperator()
	{
		return $this->allowedAccountOperator;
	}
}
