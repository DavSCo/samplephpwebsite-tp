<?php
include(dirname(__FILE__).'/../functions.php');
include(dirname(__FILE__).'/../config.php');

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testSiteNameIsOk() 
    {
        // $siteName = siteName();
        $this->mock
        ->method('siteName')
        ->will($this->returnValue('foo'));
    }
}
