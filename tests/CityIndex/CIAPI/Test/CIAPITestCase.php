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

namespace CityIndex\CIAPI\Test;

use CityIndex\CIAPI\Core\CIAPIClient;

abstract class CIAPITestCase extends \PHPUnit_Framework_TestCase {
	protected static $endpoint = CIAPIClient::ENDPOINT_RPC_PPE;
	protected static $userName = 'NOTAUSERNAME';
	protected static $password = 'NOTAPASSWORD';
	protected static $appKey = 'CIAPI.PHP';
	protected static $appVersion = '1.0-SNAPSHOT'; // @todo: derive automatically.
}
