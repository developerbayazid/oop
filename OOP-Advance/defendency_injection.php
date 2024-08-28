<?php

interface BaseStudent {
    function displayName();
}
class StudentWithId implements BaseStudent {
    private $name;
    private $id;
    function __construct($name, $id){
        $this->name = $name;
        $this->id = $id;
    }
    function displayName(){
        echo "Hi, I am {$this->name} and My id {$this->id}";
    }
}
class Student implements BaseStudent {
    private $name;
    function __construct($name){
        $this->name = $name;
    }
    function displayName(){
        echo "Hello, I am {$this->name}";        
    }
}
// class StudentManager {
//     function studentInfo(){
//         $st = new Student("Mugdho");
//         $st->displayName();
//     }
// }

class StudentManager {
    function studentInfo(BaseStudent $student){
        $student->displayName();
    }
}

$st = new Student("Abu Sayed");
$dt = new DateTime();
$sti = new StudentWithId("Md Wasim", 1093);

$sm = new StudentManager();
$sm->studentInfo($st);
echo PHP_EOL;
$sm->studentInfo($sti);