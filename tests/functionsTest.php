<?php
include(dirname(__FILE__).'/../functions.php');
include(dirname(__FILE__).'/../config.php');

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testSiteNameIsOk() 
    {
        $siteName = siteName();
        $siteName = 'Simple PHP Website';
        $this->assertEquals('Simple PHP Website', $siteName);
    }
}
