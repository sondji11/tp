<?php

function second_degre($a,$b,$c,):void 
{
    $delta=pow($b,2)-4*$a*$c;
    echo "delta est agale = ".$delta .'<br><br>' ;
    if($delta==0)
    {
        $solution=(-$b/2*$a);
        echo"La solution est ".$solution;
    }
    elseif($delta>0)
        {
            $s1=-$b-sqrt($delta)/2*$a;
            $s2=-$b+sqrt($delta)/2*$a;
            echo "Les solutions sont :  ".$s1."  et  ".$s2;

        }
        else
        {
            echo"Pas de solutions !!!";
        }
    

}
function nombre($nbre,string $key,array &$error ){
    if (empty($nbre)){

        $error[$key]="veuillez entrer un nombre ";
    }
    else{
        if (!is_numeric($nbre)){

            $error[$key]="veuillez saisir un nombre";
        }
    }
}
?>