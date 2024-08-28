<?php
namespace Astronomy;

include "planet.php";
include "mars.php";
include "earth.php";

$planet = new \Astronomy\Planet\Planet();
$mars = new \Astronomy\Planet\Mars();
$earth = new \Astronomy\Planet\Earth();

$planet->getName();
$mars->getName();
$earth->getName();
$earth->allPlanet();