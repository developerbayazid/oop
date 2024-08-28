<?php

class ParentClass {
    public function __construct(){
        $this->sayHi();
    }
    protected function sayHi(){
        echo "Hi I am Parent\n";
    }
    protected function sayHi2(){
        echo "Hi I am Parent2\n";
    }
}

class ChildClass extends ParentClass {
    public function sayHi(){
        parent::sayHi();
        // parent::sayHi2();
        echo "Hello I am Child\n";
    }
}

$child = new ChildClass();