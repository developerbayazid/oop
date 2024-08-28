<?php

abstract class Car {
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract protected function intro($a, $b);
}

class Volvo extends Car {
    public function intro($a, $b, $c = 0, $d = 0, $e = 0){
        echo "My Car {$this->name}, I choose German Quality\n";
    }
}

class Audi extends Car {
    public function intro($a, $b){
        echo "My Car {$this->name}, I choose Swedish Quality\n";
    }
}

$volvo = new Volvo("Volvo");
$audi = new Audi("Audi");

$volvo->intro(2, 2, 3);
$audi->intro(2, 3);