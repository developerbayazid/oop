<?php

class RGB {
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = ''){
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    private function parseColor(){
        if($this->color){
            list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x%02x%02x");
        } else {
            list($this->red, $this->green, $this->blue) = array(0, 0, 0);
        }
    }
    public function setColor($colorCode = ''){
        $this->color = $colorCode;
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }
    public function readRGB(){
        echo "RGB: {$this->red}{$this->green}{$this->blue} \n";
    }
    public function getRed(){
        echo $this->red;
    }
    public function getGreen(){
        echo $this->green;
    }
    public function getBlue(){
        echo $this->blue;
    }

}

$color = new RGB("#ff3f34");


$color->readRGB();
$color->setColor("#eff000");
$color->readRGB();
// echo PHP_EOL;
// $color->getRed();
// echo PHP_EOL;
// $color->getGreen();
// echo PHP_EOL;
// $color->getBlue();