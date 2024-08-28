<?php
// Liskov Substitution Principle

abstract class Bird {
    abstract function eat();
    abstract function sleep();
}

class BirdManager {
    function maintainBird(Bird $b){
        $b->eat();
        $b->sleep();
    }
    function flyingBird(FlyingBird $fb){
        $fb->fly();
    }
    function walkingBird(WalkingBird $wb){
        $wb->walk();
    }
}

abstract class WalkingBird extends Bird {
    abstract function walk();
}
abstract class FlyingBird extends Bird {
    abstract function fly();
}

class Eagle extends FlyingBird {
    function eat(){
        echo "Eagle is eating\n";
    }
    function sleep(){
        echo "Eagle is sleeping\n";
    }
    function fly(){
        echo "Eagle is flying\n";
    }
}
class Penguin extends WalkingBird {
    function eat(){
        echo "Penguin is Eating\n";
    }
    function sleep(){
        echo "Penguin is sleeping\n";
    }
    function walk(){
        echo "Penguin walking\n";
    }
}

$eagle = new Eagle();
$penguin = new Penguin();

$bm = new BirdManager();
$bm->maintainBird($eagle);
$bm->flyingBird($eagle);

$bm->maintainBird($penguin);
$bm->walkingBird($penguin);