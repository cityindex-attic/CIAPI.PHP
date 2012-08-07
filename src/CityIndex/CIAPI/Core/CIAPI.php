<?php
/**
 * Copyright 2012 CityIndex Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

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
