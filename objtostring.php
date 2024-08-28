<?php

class Color {
    private $color;
    function __construct($color){
        $this->color = $color;
    }
    function setColor($color){
        $this->color = $color;
    }
    function __toString(){
        return "My favorite Color is {$this->color}";
    }
}

$color = new Color("Red");

echo $color;