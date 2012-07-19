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

	private $tradingAccountId;
	private $tradingAccountCode;
	private $tradingAccountStatus;
	private $tradingAccountType;

	/**
	 * @param integer $tradingAccountId
	 * @param string $tradingAccountCode
	 * @param string $tradingAccountStatus
	 * @param string $tradingAccountType
	 */
	public function __construct($tradingAccountId, $tradingAccountCode, $tradingAccountStatus, $tradingAccountType) {
		$this->tradingAccountId = $tradingAccountId;
		$this->tradingAccountCode = $tradingAccountCode;
		$this->tradingAccountStatus = $tradingAccountStatus;
		$this->tradingAccountType = $tradingAccountType;
	}

	/**
	 * @return integer
	 */
	public function getTradingAccountId() {
		return $this->tradingAccountId;
	}

	/**
	 * @return string
	 */
	public function getTradingAccountCode() {
		return $this->tradingAccountCode;
	}

	/**
	 * @return string tradingAccountStatus
	 */
	public function getTradingAccountStatus() {
		return $this->tradingAccountStatus;
	}

	/**
	 * @return string
	 */
	public function getTradingAccountType() {
		return $this->tradingAccountType;
	}
}
