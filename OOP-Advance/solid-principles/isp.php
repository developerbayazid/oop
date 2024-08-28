<?php
//Interface Segregation Principle (ISP)

interface Vehicles {
    function getColor();
    function getPrice();
    function getMileage();
}

interface TwoWheelers {
    function twoWheelers();
}
interface FourWheelers {
    function fourWheelers();
}
interface SixWheelers {
    function sixWheelers();
}


class Motorcycle implements Vehicles, TwoWheelers {
    function getColor(){}
    function getPrice(){}
    function getMileage(){}
    function twoWheelers(){}
}
class Truck implements Vehicles, sixWheelers {
    function getColor(){}
    function getPrice(){}
    function getMileage(){}
    function sixWheelers(){}
}