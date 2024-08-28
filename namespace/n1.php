<?php
namespace Project;

include "c1.php";
include "c2.php";

use \Project\Motorcycles\Bike as Yamaha;
use \Project\Bike as Kawasaki;

$k = new Bike();
$y = new \Project\Motorcycles\Bike();
$y2 = new Yamaha();
$k2 = new Kawasaki();

echo $k->getModel();
echo $y->getModel();
echo $y2->getModel();
echo $k2->getModel();