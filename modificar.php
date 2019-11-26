<?php
session_start();
$errores = [];

if(!isset($_SESSION["contador"])){
    $_SESSION["contador"]=0;
}


if(isset($_POST["resetear"])){
    $_SESSION["contador"] =0; 
};
if(isset($_POST["incrementar"])){
    $_SESSION["contador"]++; 
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar</title>
</head>
<body>
    <br><br>
<form action="modificar.php" method="post">
<input type="hidden" value="true" name="resetear">
<button type="submit">RESETEAR</button>
</form>
<br><br>
<form action="modificar.php" method="post">
<input type="hidden" value="true" name="incrementar">
<button type="submit">INCREMENTAR</button>
</form>
<h2> El contador por session es <?= $_SESSION["contador"] ?></h2>
</body>
</html>