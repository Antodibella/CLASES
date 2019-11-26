<?php
session_start();
$errores = [];
if (isset($_SESSION["contador"])){
    echo $_SESSION["contador"];
}
?>