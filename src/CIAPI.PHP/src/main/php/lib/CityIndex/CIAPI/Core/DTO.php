<?php

//namespace CityIndex\CIAPI\Core;

/**
 * Request to create a session (log in).
 */
class ApiLogOnRequestDTO {
	private $userName;
	private $password;
	
    /**
     * Initalize the class attribute info.
     *  
     * @param string $userName
     * @param string $password
     */
    public function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }

	public function getUserName()
	{
		return $this->userName;
	}

	public function getPassword()
	{
		return $this->password;
	}
}

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
	public function getLoggedOut()
	{
		return $this->loggedOut;
	}
}

/**
 * Request to create a session (log in).
 */
class ApiChangePasswordRequestDTO {
	private $userName;
	private $password;
	
    /**
     * Initalize the class attribute info.
     *  
     * @param string $userName
     * @param string $password
     */
    public function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }

	public function getUserName()
	{
		return $this->userName;
	}

	public function getPassword()
	{
		return $this->password;
	}
}

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
	public function getLoggedOut()
	{
		return $this->isPasswordChanged;
	}
}
