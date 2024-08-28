<?php

trait MyTrait {
    static $number;
    abstract function doSomething();
}

class Something {
    use MyTrait;
    function doSomething(){
        echo "\nI am doing nothing\n";
    }
}

class MyTraitClass {
    use MyTrait;
    function doSomething(){
        echo "\nI am doing something\n";
    }
}

MyTraitClass::$number = 20;
echo MyTraitClass::$number;
$t1 = new MyTraitClass;
$t1::$number = 24;
echo $t1::$number;
$t1->doSomething();

Something::$number = 2028;
echo Something::$number;
$t2 = new Something;
$t2->doSomething();