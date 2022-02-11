<?php
include_once'fonction.php';

$c=rand(50,100);
$d=rand(10,45);

echo 'si la valeur  de A est '.$c.'<br><br>';
echo 'et la valeur de B est '.$d.'<br><br>';


echo'la somme est '.somme($c,$d).'<br><br>';
echo'expotentiel est '.expo($c,$d).'<br><br>';
echo'difference est '.diff($c,$d).'<br><br>';
echo'le produit est '.produit($c,$d).'<br><br>';
echo'la division est '.divise($c,$d).'<br><br>';
echo'le modulo est '.modulo($c,$d).'<br><br>';
?>