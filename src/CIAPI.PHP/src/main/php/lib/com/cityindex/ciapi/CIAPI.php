<?php

namespace com\cityindex\ciapi;


/**
 * Interface for City Index Trading API (CIAPI) clients.
 */
interface CIAPI {
	/**
	 * Log In
	 *
     * @param string $userName
     * @param string $password
	 * @return ApiLogOnResponseDTO $response
	 */
	public function logIn($userName, $password);

	/**
	 * Log Out
	 *
	 * @return bool $result
	 */
	public function logOut();

	/**
	 * Change Password
	 *
     * @param string $userName
     * @param string $password
	 * @return ApiLogOnResponseDTO $response
	 */
	public function changePassword($userName, $password);

	/**
	 * Get UserName
	 *
	 * @return string $userName
	 */
	public function getUserName();
	
	
	/**
	 * Get Session
	 *
	 * @return string $session
	 */
	public function getSession();
}
