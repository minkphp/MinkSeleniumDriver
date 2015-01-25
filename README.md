Mink Selenium1 Driver
=====================

[![Latest Stable Version](https://poser.pugx.org/behat/mink-selenium-driver/v/stable.svg)](https://packagist.org/packages/behat/mink-selenium-driver)
[![Latest Unstable Version](https://poser.pugx.org/behat/mink-selenium-driver/v/unstable.svg)](https://packagist.org/packages/behat/mink-selenium-driver)
[![Total Downloads](https://poser.pugx.org/behat/mink-selenium-driver/downloads.svg)](https://packagist.org/packages/behat/mink-selenium-driver)
[![Build Status](https://travis-ci.org/minkphp/MinkSeleniumDriver.svg?branch=master)](https://travis-ci.org/minkphp/MinkSeleniumDriver)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/minkphp/MinkSeleniumDriver/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/minkphp/MinkSeleniumDriver/)
[![Code Coverage](https://scrutinizer-ci.com/g/minkphp/MinkSeleniumDriver/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/minkphp/MinkSeleniumDriver/)
[![License](https://poser.pugx.org/behat/mink-selenium-driver/license.svg)](https://packagist.org/packages/behat/mink-selenium-driver)

Usage Example
-------------

``` php
<?php

use Behat\Mink\Mink,
    Behat\Mink\Session,
    Behat\Mink\Driver\SeleniumDriver;

use Selenium\Client as SeleniumClient;

$startUrl = 'http://example.com';

$mink = new Mink(array(
    'selenium' => new Session(new SeleniumDriver(new SeleniumClient($host, $port))),
));

$mink->getSession('selenium')->getPage()->findLink('Chat')->click();
```

Installation
------------

``` json
{
    "require": {
        "behat/mink":                  "~1.5",
        "behat/mink-selenium-driver":  "~1.1"
    }
}
```

``` bash
$> curl -sS https://getcomposer.org/installer | php
$> php composer.phar install
```

Copyright
---------

Copyright (c) 2012 Alexandre Salomé <alexandre.salome@gmail.com>.

Maintainers
-----------

* Alexandre Salomé [alexandresalome](http://github.com/alexandresalome)
