<?php
class Color {
    public $color;
    function __construct($color){
        $this->color = $color;
    }
    function setColor($color){
        $this->color = $color;
    }
}
class FavColor {
    public $data;
    public $color;
    function __construct ($data) {
        $this->data = $data;
        $this->color = new Color("Red");
    }
    function setData($data){
        $this->data = $data;
    }
    function updateColor($color){
        $this->color->setColor($color);
    }
    function __clone(){
        $this->color = clone $this->color;
    }
}

$obj1 = new FavColor("Some Data");
$obj2 = clone $obj1;
print_r($obj1);


$obj2->setData("Change Data");
$obj2->updateColor("Green");
print_r($obj1);
print_r($obj2);
