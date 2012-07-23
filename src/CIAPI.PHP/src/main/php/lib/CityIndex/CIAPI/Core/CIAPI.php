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
	 * @return ApiLogOnResponseDTO
	 */
	public function logIn($userName, $password);

	/**
	 * Log Out
	 *
	 * @return boolean
	 */
	public function logOut();

	/**
	 * Change Password
	 *
	 * @param string $userName
	 * @param string $password
	 * @return ApiLogOnResponseDTO
	 */
	public function changePassword($userName, $password);

	/**
	 * @return string
	 */
	public function getEndpoint();

	/**
	 * @return string
	 */
	public function getUserName();

	/**
	 * @return string
	 */
	public function getSession();

	/**
	 * @return AccountInformationResponseDTO
	 */
	public function getAccountInformation();
}
