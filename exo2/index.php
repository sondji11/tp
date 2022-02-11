<?php
include_once "fonction.php";
$l=rand(5,20);
$L=rand(25,60);
echo "la longueur est ".$L."<br>";
echo "la largeur est ".$l."<br>";

$p=peri($L,$l);
$s=surf($L,$l);
$d=diag($L,$l);

echo 'le perimetre est  '.$p .'<br> <br>';


echo 'la surface est  '.$s .'<br> <br>';


echo 'la  diagonale est ' .$d .'<br> <br>';

?>