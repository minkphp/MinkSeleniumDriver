<?php

namespace Behat\Mink\Tests\Driver;

use Behat\Mink\Driver\SeleniumDriver;
use Selenium\Client as SeleniumClient;

class SeleniumConfig extends AbstractConfig
{
    public static function getInstance()
    {
        return new self();
    }

    /**
     * {@inheritdoc}
     */
    public function createDriver()
    {
        $browser = '*'.$_SERVER['WEB_FIXTURES_BROWSER'];
        $baseUrl = $_SERVER['WEB_FIXTURES_HOST'];

        return new SeleniumDriver(
            $browser,
            $baseUrl,
            new SeleniumClient($_SERVER['DRIVER_HOST'], $_SERVER['DRIVER_PORT'])
        );
    }
}
