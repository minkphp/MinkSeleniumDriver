Mink Selenium1 Driver
=====================

[![Latest Stable Version](https://poser.pugx.org/behat/mink-selenium-driver/v/stable.png)](https://packagist.org/packages/behat/mink-selenium-driver)
[![Total Downloads](https://poser.pugx.org/behat/mink-selenium-driver/downloads.png)](https://packagist.org/packages/behat/mink-selenium-driver)
[![Build Status](https://secure.travis-ci.org/Behat/MinkSeleniumDriver.png?branch=master)](http://travis-ci.org/Behat/MinkSeleniumDriver)

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
        "behat/mink":                  "1.4.*",
        "behat/mink-selenium-driver":  "1.0.*"
    }
}
```

``` bash
$> curl http://getcomposer.org/installer | php
$> php composer.phar install
```

Copyright
---------

Copyright (c) 2012 Alexandre Salomé <alexandre.salome@gmail.com>.

Maintainers
-----------

* Alexandre Salomé [alexandresalome](http://github.com/alexandresalome)
