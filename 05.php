<?php

class Animal {
    protected $name;
    public function __construct($name = ''){
        $this->name = $name;
    }
    public function eat(){
        echo "{$this->name} is eating \n";
    }
    public function run(){
        echo "{$this->name} is running \n";
    }
    public function sleep(){
        echo "{$this->name} is sleeping \n";
    }
    public function greet(){}
    protected function addTitle($title = ''){
        $this->name = $title." ".$this->name;
    }
}

class AbuSayed extends Animal {
    public function greet(){
        echo "{$this->addTitle("Mr.")}{$this->name} Say Hi\n";
    }

}
class Cat extends Animal {
    public function greet(){
        echo "{$this->addTitle("Mrs.")}{$this->name} Say Meow\n";
    }
}

$abuSayed = new AbuSayed("Abu Sayed");
$abuSayed->greet();
$abuSayed->run();

$cat = new Cat("Tom");
$cat->greet();
$cat->eat();