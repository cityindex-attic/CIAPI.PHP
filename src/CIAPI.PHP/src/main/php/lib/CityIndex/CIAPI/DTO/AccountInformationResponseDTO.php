<?php

namespace CityIndex\CIAPI\DTO;

/**
 * Response from an account information query.
 */
class AccountInformationResponseDTO {
	private $logonUserName;
	private $clientAccountId;
	private $clientAccountCurrency;
	private $accountOperatorId;
	private $tradingAccounts = array();
	private $personalEmailAddress;
	private $hasMultipleEmailAddresses;
	
	/**
	 * @param string $logonUserName
	 * @param integer $clientAccountId
	 * @param string $clientAccountCurrency
	 * @param integer $accountOperatorId
	 * @param array $tradingAccounts
	 * @param string $personalEmailAddress
	 * @param bool $personalEmailAddress
	 */
	public function __construct($logonUserName, $clientAccountId, $clientAccountCurrency, $accountOperatorId, 
			array $tradingAccounts, $personalEmailAddress, $hasMultipleEmailAddresses) {
		$this->logonUserName = $logonUserName;
		$this->clientAccountId = $clientAccountId;
		$this->clientAccountCurrency = $clientAccountCurrency;
		$this->accountOperatorId = $accountOperatorId;
		$this->tradingAccounts = $tradingAccounts;
		$this->personalEmailAddress = $personalEmailAddress;
		$this->hasMultipleEmailAddresses = $hasMultipleEmailAddresses;
	}

	/**
	 * @return string
	 */
	public function getLogonUserName() {
		return $this->logonUserName;
	}

	/**
	 * @return integer
	 */
	public function getClientAccountId() {
		return $this->clientAccountId;
	}

	/**
	 * @return string
	 */
	public function getClientAccountCurrency() {
		return $this->clientAccountCurrency;
	}

	/**
	 * @return integer
	 */
	public function getAccountOperatorId() {
		return $this->accountOperatorId;
	}

	/**
	 * @return null|array
	 */
 	public function getTradingAccounts() {
		return $this->tradingAccounts;
	}

	/**
	 * @return string
	 */
	public function getPersonalEmailAddress() {
		return $this->personalEmailAddress;
	}

	/**
	 * @return boolean
	 */
	public function getHasMultipleEmailAddresses() {
		return $this->hasMultipleEmailAddresses;
	}
}
