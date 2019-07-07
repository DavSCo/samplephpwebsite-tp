<?php
include(dirname(__FILE__).'/../functions.php');

class FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function siteNameIsOk() 
    {
        siteName()->willReturn("Simple PHP Website");
    }

    public function siteNameIsOk2() 
    {
        siteName()->willReturn("Simple PHP Website");
    }
}
