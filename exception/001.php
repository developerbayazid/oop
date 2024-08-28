<?php

class Student {
    function __construct($name, $age){
        $this->name = $name;
        if($age < 7){
            throw new Exception("Too Young", 1001);
        } elseif($age > 33){
            throw new Exception("Too Old", 1002);
        }
        $this->age = $age;
    }
}

try {
    $student = new Student("Abu Sayed", 5);
    echo $student->age.PHP_EOL;
    echo $student->name.PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage().":".$e->getCode();
} 

