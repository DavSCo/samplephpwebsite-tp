<?php
// include(dirname(__FILE__).'/../functions.php');

class FunctionTest extends PHPUnit_Framework_TestCase
{
    public function siteName_is_ok() 
    {
        include(dirname(__FILE__).'/../functions.php');
        $result = siteName();
        $this->assertEquals($result, "Simple PHP Website");
    }
}
