<?php
include_once ("Point2D.php");
include_once ("Point3D.php");
$point2D = new Point2D(1, 1);
echo $point2D;
echo $point2D->getX();
echo "<br/>";
echo $point2D->getY();
echo "<br/>";
print_r($point2D->getXY());
echo "<br/>";
$point3D = new Point3D(2, 2, 2);
echo $point3D;
echo $point3D->getX();
echo "<br/>";
echo $point3D->getY();
echo "<br/>";
echo $point3D->getZ();
echo "<br/>";
print_r($point3D->getXY());
echo "<br/>";
print_r($point3D->getXYZ());
