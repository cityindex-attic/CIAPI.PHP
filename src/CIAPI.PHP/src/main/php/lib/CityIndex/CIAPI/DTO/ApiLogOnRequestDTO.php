<?php

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
