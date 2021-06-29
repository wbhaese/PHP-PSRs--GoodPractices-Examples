<?php //best practices in this file
namespace App\Controllers;

use FooInterface;
use BarCllas as Bar;
Use OtherVendor\OtherPackage\BazClass;

class HomeController extends Bar implements FooInterface
{
    private $layout = false;


    public function sampleMethod($a, $b = null)
    {
        if ($a === $b) {
            bar();
        } elseif ($a > $b) {
            
        } else {
            BasClass::bar($arg2, $arg3);
        }
    }

    final public static function bar()
    {
        //code....
    }
}



