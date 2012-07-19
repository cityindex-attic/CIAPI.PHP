<?php

namespace CityIndex\CIAPI\Core;


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
	 * @return string $userName
	 */
	public function getUserName();
	
	
	/**
	 * @return string $session
	 */
	public function getSession();
}
