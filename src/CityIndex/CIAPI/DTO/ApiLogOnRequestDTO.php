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

namespace CityIndex\CIAPI\DTO;

/**
 * Request to create a session (log in).
 */
class ApiLogOnRequestDTO extends AbstractRequestDTO {
	const USER_NAME_MIN_LENGTH = 6;
	const USER_NAME_MAX_LENGTH = 20;
	const PASSWORD_MIN_LENGTH = 6;
	const PASSWORD_MAX_LENGTH = 20;

	/**
	 * @var string $userName
	 */
	public $userName;

	/**
	 * @var string $password
	 */
	public $password;

	/**
	 * @var string $appKey
	 */
	public $appKey;

	/**
	 * @var string $appVersion
	 */
	public $appVersion;

	/**
	 * @var string $appComments (optional)
	 */
	public $appComments;
}
