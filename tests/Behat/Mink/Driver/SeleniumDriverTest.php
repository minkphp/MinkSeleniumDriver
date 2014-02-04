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

    public function testMouseEvents()
    {
        $this->markTestIncomplete('testMouseEvents cannot be tested fully for SeleniumDriver. Supported events are currently tested in testOtherMouseEvents');
    }

    public function testOtherMouseEvents()
    {
        // blur and right click is not supported currently
        $this->getSession()->visit($this->pathTo('/js_test.php'));

        $clicker = $this->getSession()->getPage()->find('css', '.elements div#clicker');

        $this->assertEquals('not clicked', $clicker->getText());

        $clicker->click();
        $this->assertEquals('single clicked', $clicker->getText());

        $clicker->doubleClick();
        $this->assertEquals('double clicked', $clicker->getText());

        $clicker->focus();
        $this->assertEquals('focused', $clicker->getText());

        $clicker->mouseOver();
        $this->assertEquals('mouse overed', $clicker->getText());
    }

    public function testIssue193()
    {
        $this->markTestSkipped('Selenium1 doesn\'t handle selects without values');
    }
}
