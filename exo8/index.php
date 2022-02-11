
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 8</title>
</head>
<body>
<?php
session_start();
?>
    <form action="controleur.php" method='post'>
    
    <label for="name">nombre</label>
    
       <input  type="text" placeholder="veuillez entrez un nombre svp "name="A"><br><br><br>
       
       <input type="submit" name= "valide" value="valide">
       </form>
       
</body>
</html>
<style>
    
</style>