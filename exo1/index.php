<?php
include_once ('fonction.php');

$c=rand(10,100);

echo 'le cote est '.$c.'<br> <br>' ;

$p=perimetre($c);
echo'le perimetre est '. $p.'<br> <br>' ;

$s=surface($c);
echo 'la surface est '. $s.'<br> <br>';

$d=diagonale($c);
echo'la diagonale est ' . $d.'<br> <br>';


?>