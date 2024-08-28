<?php

class DistrictCollection implements IteratorAggregate, Countable {
    private $districts;

    function __construct(){
        $this->districts = array();
    }
    function add($district){
        array_push($this->districts, $district);
    }

    function getIterator():Traversable {
        return new ArrayIterator($this->districts);
    }
    function count(): int {
        return count($this->districts);
    }
}

$districts = new DistrictCollection();

$districts->add("Kishoreganj");
$districts->add("Rangpur");
$districts->add("Rajshahi");
$districts->add("Sylhet");
$districts->add("Comilla");
$districts->add("ChandPur");
$districts->add("Barishal");
$districts->add("Memenshingh");
$districts->add("Bhula");

echo count($districts);

echo PHP_EOL;

foreach ($districts as $district) {
    echo $district."\n";
}