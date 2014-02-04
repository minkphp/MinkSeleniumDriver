<?php

namespace Tests\Behat\Mink\Driver;

use Behat\Mink\Driver\SeleniumDriver;
use Selenium\Client as SeleniumClient;

/**
 * @group seleniumdriver
 */
class SeleniumDriverTest extends JavascriptDriverTest
{
    protected static function getDriver()
    {
        $browser = '*'.$_SERVER['WEB_FIXTURES_BROWSER'];
        $baseUrl = $_SERVER['WEB_FIXTURES_HOST'];

        return new SeleniumDriver(
            $browser,
            $baseUrl,
            new SeleniumClient($_SERVER['DRIVER_HOST'], $_SERVER['DRIVER_PORT'])
        );
    }

    public function testIssue193()
    {
        $this->markTestSkipped('Selenium1 doesn\'t handle selects without values');
    }
}
