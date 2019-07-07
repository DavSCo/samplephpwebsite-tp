<?php
include(dirname(__FILE__).'/../functions.php');
// namespace Tests\SimplePhpWebsite\Tests;

// use SimplePhpWebsite\Functions\Functions;
// use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testSiteNameIsOk() 
    {
        // $siteName = Functions::siteName();
        $siteName = siteName();
        $this->assertEquals("Simple PHP Website", $siteName);
    }
}
