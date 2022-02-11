<?php 
include_once("fonction.php");
if(isset($_POST["valider"])){
$A=$_POST['A'];
$B=$_POST['B'];
$C=$_POST['C'];
$error=[];
$_SESSION['post']=$_POST;

nombre($A,'A',$error);

nombre($B,'B',$error);

nombre($C,'C',$error);

if(count($error)==0){
    second_degre($A,$B,$C);


}else{
    $_SESSION['error']=$error;
    header('location:index.php');
    exit();
}

}else{
    header('location:index.php');
    exit();
}








