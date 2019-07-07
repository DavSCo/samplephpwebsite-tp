<?php
// include(dirname(__FILE__).'/../functions.php');

class FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function siteName_is_ok() 
    {
        include(dirname(__FILE__).'/../functions.php');
        $result = Functions::siteName();
        $this->assertEquals("Simple PHP Website", $result);
    }
}
