<?php
session_start();
include_once('fonction.php');

if((isset($_POST['valide'])))
{
    $a=$_POST['A'];

    $error=[];

    $_SESSION['post']=$_POST;

    valider($a,'A',$error);

    if(count($error)==0)
    {
        nombre($a);

    }
    else
    {
        $_SESSION["error"]=$error;
        
        header('location:index.php');
        exit();

    }
    
}
else{
    header('location:index.php');
    exit();
}
