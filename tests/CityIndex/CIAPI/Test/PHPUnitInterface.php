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
/**
 * This interface is solely used to excercise required PHPUnit functionality in the context
 * of this project in order to help with environment configuration and debugging.
 */
interface PHPUnitInterface {
	/**
	 * Sample class method
	 *
	 * @param boolean $returnClassInfo
	 * @return string $message
	 */
	public function doSomething($returnClassInfo);
}
