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
 * Information about a Trading Account.
 */
class ApiTradingAccountDTO extends AbstractResponseDTO  {
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
