<?php
include_once'fonction.php';
$a=rand(10,40);
$b=rand(50,70);
$c=rand(10,40);
$d=rand(60,100);

echo 'le point A de coordonne '.$a.';'.$b.'<br><br>';

echo 'le point B de coordonne '.$a.';'.$b.'<br><br>';

echo 'la distance AB est '.distance($a,$b,$c,$d);



?>