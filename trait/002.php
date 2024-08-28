<?php

trait NumberSeriesOne {
    function numberSeriesA(){
        echo "Number series A\n";
        parent::numberSeriesA();
    } 
}

class NumberSeriesTwo{
    function numberSeriesA(){
        echo "Number series from A+B\n";
    }
}

class NumberSeries extends NumberSeriesTwo {
    use NumberSeriesOne;
    // function numberSeriesA(){
    //     echo "Number series from A+A";
    // }
}

$ns = new NumberSeries();
$ns->numberSeriesA();