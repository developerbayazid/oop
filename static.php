<?php

class MathCalCulate {
    private $number;
    static public $name;
    static public function fibonacci($n){
        self::doSomething();
        echo "{$n}th fibonacci series\n";
    }
    static public function doSomething(){
        echo "Do Something\n";
    }
    public function factorial($n){
        $this->number = 12;
        $this->doSomething();
        self::doSomething();
        self::$name = "ABCD";
        echo "{$n}th factorial series\n";
    }
}

class Number {
    public function getFib(){
        MathCalCulate::fibonacci(38);
    }
}

$math = new MathCalCulate();
$math->fibonacci(8);
MathCalCulate::fibonacci(19);
// echo MathCalCulate::$fib;
MathCalCulate::doSomething();

$num = new Number();
$num->getFib();
$math->factorial(38);
echo MathCalCulate::$name;
echo PHP_EOL;


class A {
    protected static $name;
    public static function sayHi(){
        self::$name = "Bayazid\n";
        echo "Say Hi from A\n";
    }
}

class B extends A {
    static function sayHi(){
        echo "Say Hi from B\n";
        parent::sayHi();
        echo self::$name;
    }
}

$b = new B();

$b->sayHi();
echo PHP_EOL;

class MyClass {
    const CITY = "Dhaka";
    function doSomething(){
        echo "I am doing something on ".self::CITY;
    }
}

echo MyClass::CITY;