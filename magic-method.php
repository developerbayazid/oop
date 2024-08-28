<?php

class Student {
    private $name;
    private $age;
    private $roll;

    function __construct($name = '', $age = '', $roll = ''){
        $this->name = $name;
        $this->age = $age;
        $this->roll = $roll;
    }

    function __get($prop){
        return $this->$prop;
    }
    function __set($prop, $value){
        $this->$prop = $value;
    }

    // function getName(){
    //     return $this->name;
    // }
    // function setName($name){
    //     $this->name = $name;
    // }

    // function getAge(){
    //     return $this->age;
    // }
    // function setAge($age){
    //     $this->age = $age;
    // }

    // function getRoll(){
    //     return $this->roll;
    // }
    // function setRoll($roll){
    //     $this->roll;
    // }
}


$student = new Student();

echo $student->name.PHP_EOL;
$student->name = "Abu Rayhan";
echo $student->name.PHP_EOL;

$student->age = 22;
echo $student->age.PHP_EOL;

$student->roll = 11;
echo $student->roll;