<?php

interface BaseAnimal {
    public function makeSound();
}

class Animal implements BaseAnimal {
    public function makeSound(){
        echo "Meow\n";
    }
}
class Cat extends Animal {

}
interface BaseHuman extends BaseAnimal {
    public function canITalk();
    public function eat();
    public function doSomething();
}
abstract class AbstractHuman implements BaseHuman {
    abstract public function run();
}
class Human extends AbstractHuman {
    public function run(){}
    public function eat(){}
    public function doSomething(){}
    public function makeSound(){}
    public function canITalk(){}
}

$human = new Human();
echo $human instanceof BaseHuman.PHP_EOL;
echo $human instanceof BaseAnimal.PHP_EOL;
echo $human instanceof AbstractHuman.PHP_EOL;

$cat = new Cat();
echo $cat instanceof BaseAnimal.PHP_EOL;
echo $cat instanceof Animal.PHP_EOL;
echo $cat instanceof BaseHuman.PHP_EOL;