<?php

class Human2 {
    public $name;
    public $age;
    public function __construct($personName, $personAge = 0){
        $this->name = $personName;
        $this->age = $personAge;
    }
    public function sayHi(){
        if($this->age){
            echo "I am {$this->name} and I am {$this->age} years old.\n";
        } else {
            echo "I am {$this->name}, I don't know about my age.\n";
        }
    }
}

$obj = new Human2("Bayazid", 24);
$obj2 = new Human2("Bayazid Hasan");

$obj->sayHi();
$obj2->sayHi();