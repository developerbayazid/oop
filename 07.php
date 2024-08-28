<?php

class Shape {

}

class Shapes {
    private $shapes;
    function __construct(){
        $this->shapes = array();
    }
    function addShape(Shape $shape){
        array_push($this->shapes, $shape);
    }
    function totalShape(){
        echo count($this->shapes);
    }
}

class Rectangle extends Shape {

}
class Circle extends Shape {

}
class Triangle extends Shape {

}
class Student {

}

$shapes = new Shapes();
$shapes->addShape(new Rectangle);
$shapes->addShape(new Circle);
$shapes->addShape(new Triangle);
// $shapes->addShape(new Student);

$shapes->totalShape();