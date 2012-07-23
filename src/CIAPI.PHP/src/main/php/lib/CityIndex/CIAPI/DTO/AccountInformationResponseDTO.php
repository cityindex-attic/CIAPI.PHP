<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response from an account information query.
 */
class AccountInformationResponseDTO {
	/**
	 * @var string $logonUserName
	 */
	public $logonUserName;

	/**
	 * @var integer $clientAccountId
	 */
	public $clientAccountId;

	/**
	 * @var string $clientAccountCurrency
	 */
	public $clientAccountCurrency;

	/**
	 * @var integer $accountOperatorId
	 */
	public $accountOperatorId;

	/**
	 * @var null|array $tradingAccounts
	 */
	public $tradingAccounts = array();

	/**
	 * @var string $personalEmailAddress
	 */
	public $personalEmailAddress;

	/**
	 * @var boolean $hasMultipleEmailAddresses
	 */
	public $hasMultipleEmailAddresses;
}
