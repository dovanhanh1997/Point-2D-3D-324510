<?php
include_once 'Point2D.php';
include_once 'Point3D.php';

$point2D=new Point2D(5.4,6.7);
echo $point2D->getX().'<br>';
echo $point2D->getY().'<br>';
$point2D->setXY(7.5,9.2);
foreach ($point2D->getXY() as $value):
    echo $value.' ';
endforeach;
echo '<br>'.$point2D->toString();
?>

<br><br>

<?php

$point3D=new Point3D(8.4,7.6,1.5);
echo $point3D->getX().'<br>';
echo $point3D->getY().'<br>';
echo $point3D->getZ().'<br>';
$point3D->setXYZ(9.4,4.5,8.3);
foreach ($point3D->getXYZ() as $value):
    echo $value.' ';
endforeach;

echo '<br>'. $point3D->toString();

