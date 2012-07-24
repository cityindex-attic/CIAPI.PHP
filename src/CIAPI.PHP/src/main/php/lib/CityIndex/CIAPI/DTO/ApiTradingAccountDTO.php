<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Information about a Trading Account.
 */
class ApiTradingAccountDTO {
	const TRADING_ACCOUNT_STATUS_OPEN = 'Open';
	const TRADING_ACCOUNT_STATUS_CLOSED = 'Closed';
	const TRADING_ACCOUNT_TYPE_SPREAD = 'Spread';
	const TRADING_ACCOUNT_TYPE_CFD = 'CFD';

	/**
	 * @var integer $tradingAccountId
	 */
	public $tradingAccountId;

	/**
	 * @var string $tradingAccountCode
	 */
	public $tradingAccountCode;

	/**
	 * @var string $tradingAccountStatus
	 */
	public $tradingAccountStatus;

	/**
	 * @var string $tradingAccountType
	 */
	public $tradingAccountType;
}
