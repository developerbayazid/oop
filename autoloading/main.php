<?php

function autoload($name){
    if(strpos($name, 'Planet_') !== false){
        $filename = str_replace('Planet_', '', $name);
        include strtolower("planets/{$filename}.php");
    } else {
        include strtolower("{$name}.php");
    }
}
spl_autoload_register('autoload');


(new Spaceship)->lunch();
(new Bike)->getType();
(new Planet)->getName();
(new Planet_Mars)->getName();
