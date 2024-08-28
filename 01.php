<?php

class Human {
    public $name;
    function sayHi(){
        echo "Hi, buddy \n";
        echo $this->sayName($this->name);
        echo PHP_EOL;
    }
    function sayName($name){
        return "My name is {$name}";
    }
}

class Cat { 
    function sayHi(){
        echo "Hi, I am Cat \n";
    }
}

class Dog {
    function sayHi(){
        echo "Hi, I am Dog \n";
    }
}

$h1 = new Human();
$c1 = new Cat();
$d1 = new Dog();

$h2 = new Human();

$h1->name = "Bayazid";
$h2->name = "Hasan";

// $c1->sayHi();
// $d1->sayHi();

$h1->sayHi();
$h2->sayHi();

