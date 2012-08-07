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
 * Abstract base class for DTOs.
 */
abstract class AbstractDTO {
	/**
	 * @param mixed $jsonData A JSON string or an array decoded from a JSON string
	 * @throw \InvalidArgumentException
	 */
	protected static function createJSONDTO($jsonData) {
		$jsonDTO = $jsonData;
		if (is_string($jsonData)) {
			$jsonDTO = json_decode($jsonData, true);
		} elseif (!is_array($jsonData)) {
			throw \InvalidArgumentException;
		}

		return $jsonDTO;
	}

	/**
	 * Can be overriden to allow special case handling for the generic property mapping
	 * @param string $propertyName
	 * @throws InvalidArgumentException
	 */
	protected static function mapPropertyNameToDTO($propertyName) {
		throw new InvalidArgumentException("Encountered unexpected property '" . $propertyName . "'");
	}

	/**
	 * Applies the callback to the keys of the given array
	 * @todo: Move somewhere more appropriate.
	 * @param callback callback <p>
	 * Callback function to run for each element in the array.
	 * </p>
	 * @param array $arr <p>
	 * An array to run through the callback function.
	 * </p>
	 * @return array an array containing all the keys of arr
	 * after applying the callback function to each one.
	 */
	 protected static function mapArrayKeys($callback, array $arr) {
		$keys = array_map($callback, array_keys($arr));
		return array_combine($keys, $arr);
	}
}
