<?php

abstract class OurClass {
    final function doSomething(){
        echo "Doing Something";
    }
}

class MyClass extends OurClass {
    // function doSomething(){
       
    // }
}

$myClass = new MyClass();
$myClass->doSomething();