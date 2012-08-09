# CIAPI.PHP ![Incomplete](http://labs.cityindex.com/wp-content/uploads/2012/01/lbl-incomplete.png)![Unsupported](http://labs.cityindex.com/wp-content/uploads/2012/01/lbl-unsupported.png)
A basic/limited PHP client library for connecting to the CityIndex Trading API.

## Status
[![Build Status](https://buildhive.cloudbees.com/job/sopel/job/CIAPI.PHP/badge/icon)](https://buildhive.cloudbees.com/job/sopel/job/CIAPI.PHP/)
[![Build Status](https://secure.travis-ci.org/sopel/CIAPI.PHP.png?branch=master)](http://travis-ci.org/sopel/CIAPI.PHP)

Actively developed (very early stages though) and currently unsupported.

**NOTE**: Currently the builds are based on a fork, so beware.


## Usage Example

```php
<?php
use CityIndex\CIAPI\Core\CIAPIClient;

// Setup a connection to the API endpoint
$client = new CIAPIClient("https://{REST API ENDPOINT}/", '{APP_KEY}', '{APP_VERSION}');
// Create a session
$client->logIn("{username}", "{password}");
// Retrieve some data
$accountInformation = $client->getAccountInformation();
// Use the data
echo $accountInformation->logonUserName ."\n";
// Delete the session
$client->logOut();
```


## Requirements

CIAPI.PHP requires at least [PHP](http://php.net/) version 5.3.

Furthermore it depends on [Requests for PHP](http://requests.ryanmccue.info/), but this dependency is usually handled automatically, 
see section *Installation* for details.


## Installation


### Install via PHP Archive (phar)

**NOTE**: CIAPI.PHP.phar is **currently dysfunctional**, so this doesn't work yet!

You can include CIAPI.PHP via a single line as follows:

```php
<?php
require_once 'CIAPI.PHP.phar';

// ...
```


### Install via Composer

**NOTE**: CIAPI.PHP is **not yet published** via Composer, so this doesn't work yet!

If you're using [Composer](https://github.com/composer/composer) to manage
dependencies, you will be able to add CIAPI.PHP with it as follows:

```json
{
    "require": {
        "cityindex/ciapi": ">=1.0"
    }
}
```


### Install via archives from BuildHive

You can download a generated source archive:

* Download the last successful source code artifacts from the [CIAPI.PHP BuildHive project][]:
```sh
$ curl -O https://buildhive.cloudbees.com/job/sopel/job/CIAPI.PHP/lastSuccessfulBuild/artifact/build/dist/CIAPI.PHP.tar.gz
```    
Include it in your scripts via PHP autoloading:    
```php
<?php
require_once '<PATH TO DOWNLOAD>/vendor/autoload.php';
```


### Install via source from GitHub

You can either clone the repository or download an archive:

* Clone the source code from the [CIAPI.PHP Git repository][]:
```sh
$ git clone git://github.com/cityindex/CIAPI.PHP.git
```    
Run the Ant build to fetch dependencies via Composer:    
```sh
$ ant
```    
Include it in your scripts via PHP autoloading:    
```php
<?php
require_once '<PATH TO CLONE>/vendor/autoload.php';
```

* Alternatively, you can fetch a [tarball][] or [zipball][] from the [CIAPI.PHP Git repository][]:
```sh
    $ curl https://github.com/cityindex/CIAPI.PHP/tarball/master | tar xzv
    (or)
    $ wget https://github.com/cityindex/CIAPI.PHP/tarball/master -O - | tar xzv
```    
Run the Ant build to fetch dependencies via Composer:    
```sh
$ ant
```    
Include it in your scripts via PHP autoloading:    
```php
<?php
require_once '<PATH TO DOWNLOAD>/vendor/autoload.php';
```
[CIAPI.PHP BuildHive project]: https://buildhive.cloudbees.com/job/sopel/job/CIAPI.PHP/
[CIAPI.PHP Git repository]: https://github.com/cityindex/CIAPI.PHP
[tarball]: https://github.com/cityindex/CIAPI.PHP/tarball/master
[zipball]: https://github.com/cityindex/CIAPI.PHP/zipball/master


## Development

A couple of preliminary notes on how to build/test the library:

### Build

The build is based on [Apache Ant](http://ant.apache.org/) and provides the usual targets clean/build/test/dist, e.g.
```sh
$ ant dist
```

Updating the Composer dependencies modifies the source code and ist handled by a dedicated target accordingly:    
```sh
$ ant update
```

### Test

There are a few unit tests and some integration tests currently, with the latter requiring CIAPI credentials to be available as environment variables, e.g.
(the integration tests are skipped if one or both of these are absent):    
```sh
$ export CIAPI_USERNAME='<username>'    
$ export CIAPI_PASSWORD='<password>'
```

# License
 
Licensed under the Apache License, Version 2.0, see LICENSE.TXT for details.
