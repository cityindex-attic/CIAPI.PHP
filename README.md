# CIAPI.PHP ![Incomplete](http://labs.cityindex.com/wp-content/uploads/2012/01/lbl-incomplete.png)![Unsupported](http://labs.cityindex.com/wp-content/uploads/2012/01/lbl-unsupported.png)
A basic/limited PHP client library for connecting to the CityIndex Trading API.

## Status
Actively developed (very early stages though, i.e. nothing to see yet) and currently unsupported.


## Usage

```php
<?php
use CityIndex\CIAPI\Core\CIAPIClient;

// Setup a connection to the API endpoint
$client = new CIAPIClient("https://{REST API ENDPOINT}/", '{APP_KEY}', '{APP_VERSION}');
// Create a session
$client->logIn("{username}", "{password}");
// Retrieve some data
$accountInformation = $client->getClientAndTradingAccount();
    ```

# License
 
Licensed under the Apache License, Version 2.0, see LICENSE.TXT for details.
