<?php
include(dirname(__FILE__).'/../functions.php');

class FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function site_name_is_ok() 
    {
        echo 'hello';

        siteName()->willReturn("Simple PHP Website");
    }
}
