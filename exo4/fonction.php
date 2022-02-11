<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

function nombre(int $a,int $b):void
{$c=$a;
    $a=$b;
    $b=$c;
    echo 'apres echange  le premier element A est '.$a.' <br><br>';
    echo '  le second  element B est '.$b.' <br><br>';




}


?>