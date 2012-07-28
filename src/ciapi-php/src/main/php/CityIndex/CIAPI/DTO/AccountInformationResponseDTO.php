<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response from an account information query.
 */
class AccountInformationResponseDTO extends AbstractResponseDTO {
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

	/**
	 * @param string $propertyName
	 * @throws LogicException
	 */
	protected static function mapPropertyNameToDTO($propertyName) {
		switch ($propertyName) {
		case 'tradingAccounts':
			return 'CityIndex\CIAPI\DTO\ApiTradingAccountDTO';
			break;
		default:
			throw new \InvalidArgumentException("Encountered unexpected property '" . $propertyName . "'");
		}
	}
}
