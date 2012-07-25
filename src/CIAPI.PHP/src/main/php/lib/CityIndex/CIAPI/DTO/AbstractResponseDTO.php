<?php

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
