<?php

trait TraitOne {
    private function one(){
        echo "TraitOne\n";
    }
}
trait TraitTwo {
    private function two(){
        echo "TraitTwo\n";
        $this->one();
    }
}
trait TraitThree {
    function three(){
        echo "TraitThree\n";
        $this->two();
    }
}

class AllTraits {
    use TraitOne, TraitTwo, TraitThree;
}

$obj = new AllTraits();
// $obj->one();
// $obj->two();
$obj->three();