<?php
// include(dirname(__FILE__).'/../functions.php');
namespace Tests\SimplePhpWebsite\Tests;

use SimplePhpWebsite\Functions\Functions;

class FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function siteNameIsOk() 
    {
        $siteName = Functions::siteName();
        $this->assertEquals("Simple PHP Website", $siteName);
    }
}
