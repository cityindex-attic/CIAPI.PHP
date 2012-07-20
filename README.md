# CIAPI.PHP ![Incomplete](http://labs.cityindex.com/wp-content/uploads/2012/01/lbl-incomplete.png)![Unsupported](http://labs.cityindex.com/wp-content/uploads/2012/01/lbl-unsupported.png)
A basic/limited PHP client library for connecting to the CityIndex Trading API.

## Status
Actively developed (very early stages though, i.e. nothing to see yet) and currently unsupported.


## Usage Example

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


## Installation


### Install via PHP Archive (phar)

You can include CIAPI.PHP via a single line as follows:

	TODO [CIAPI.PHP-1.0-SNAPSHOT.phar is currently dysfunctional]


### Install via Composer

If you're using [Composer](https://github.com/composer/composer) to manage
dependencies, you will be able to add CIAPI.PHP with it as follows:

	TODO [CIAPI.PHP is not yet published via Composer]
	

### Install via source from GitHub

To install the source code:

    $ git clone git://github.com/cityindex/CIAPI.PHP.git

And include it in your scripts:

    require_once '<PATH_TO CLONE>/vendor/autoload.php';


### Install via source from tarball/zipball

Alternatively, you can fetch a [tarball][] or [zipball][]:

    $ curl https://github.com/cityindex/CIAPI.PHP/tarball/master | tar xzv
    (or)
    $ wget https://github.com/cityindex/CIAPI.PHP/tarball/master -O - | tar xzv

[tarball]: https://github.com/cityindex/CIAPI.PHP/tarball/master
[zipball]: https://github.com/cityindex/CIAPI.PHP/zipball/master


# License
 
Licensed under the Apache License, Version 2.0, see LICENSE.TXT for details.
