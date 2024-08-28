<?php

class MotorCycle {
    private $parameters;
    function __construct($displacements, $capacity, $mileage){
        $this->parameters = [];
        $this->parameters['displacements'] = $displacements;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    function __isset($name){
        if(!isset($this->parameters[$name])){
            return false;
        }
        return true;
    }

    function __unset($name){
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }

    function __get($name){
        return $this->parameters[$name];
    }

    function __set($name, $value){
        $this->parameters[$name] = $value;
    }
    function __call($name, $arguments){
        if('run' == $name){
            if($arguments){
                echo "I am Running at {$arguments[0]}";
            }else {
                echo "I am Running";
            }
        } else {
            echo "Please! call a valid method";
        }
    }

    static function __callStatic($name, $arguments){
        echo "Please! Call a valid static method";
    }
    static function tierSize(){
        echo "We don't know about tier size";
    }
   
}

$pulsar = new MotorCycle("150cc", "20ltr", "60kmph");


echo $pulsar->capacity.PHP_EOL;
if(isset($pulsar->displacements)){
    echo "Method Found\n";
} else {
    echo "Method Not Found\n";
}

unset($pulsar->capacity);

echo $pulsar->run("160kmps").PHP_EOL;
echo $pulsar->doSomething("doing something").PHP_EOL;
echo $pulsar::wash().PHP_EOL;
$pulsar::tierSize();