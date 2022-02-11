<?php
function distance(int $a,int $b,int $c,int $d ):float{
    return sqrt((pow(($b-$a),2)+pow(($d-$c),2)));
}
?>