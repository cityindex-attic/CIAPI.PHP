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
 * Exception used by City Index Trading API (CIAPI) clients.
 */
class SessionException extends \RuntimeException {
	const USER_NAME_LENGTH_VIOLATION = 'User name length violation'; // @todo: details
	const PASSWORD_LENGTH_VIOLATION = 'Password length violation'; // @todo: details

	/**
	 * @param string $message
	 * @param integer $code (optional)
	 * @param Exception $previous (optional)
	 */
	public function __construct($message, $code = 0, Exception $previous = null) {
		parent::__construct($message, $code, $previous);
	}
}
