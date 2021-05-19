<?php
include_once ('Circle.php');
include_once ('Cylinder.php');


$circle = new Circle(3, "red");
echo $circle;
$cylinder = new Cylinder(3, "red", 4);
echo $cylinder;
echo $circle->calculateArea();
echo "<br/>";
echo $cylinder->calculateArea();
