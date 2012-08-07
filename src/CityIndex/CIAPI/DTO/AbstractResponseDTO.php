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
 * Abstract base class for response DTOs.
 */
abstract class AbstractResponseDTO extends AbstractDTO {

	/**
	 * REVIEW: It might be useful to hide this from clients via a factory method.
	 * @param mixed $jsonData A JSON string or an array decoded from a JSON string
	 * @throw \InvalidArgumentException
	 */
	public final function __construct($jsonData) {
		$jsonDTO = parent::createJSONDTO($jsonData);

		// DTOs feature Upper Camel Case properties, so convert these to Lower Camel Case first
		$jsonDTOLCC = parent::mapArrayKeys(function ($key) {
			return lcfirst($key);
		}, $jsonDTO);

		// @todo: Review looping over the DTO instead, ita ll depends on what yields the best resilience.
		$properties = get_object_vars($this);
		foreach ($properties as $key => $value) {
			// Is this an array property?
			if (is_array($jsonDTOLCC[$key])) { // yes
				$className = $this->mapPropertyNameToDTO($key);
				$value = array();
				foreach ($jsonDTOLCC[$key] as $arrayKey) {
					$value[] = new $className($arrayKey);
				}
			} else { // no
				$this->$key = $jsonDTOLCC[$key];
			}
		}
	}
}
