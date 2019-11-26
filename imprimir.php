<?php
    // 1) Crea el archivo imprimir.php que imprima la variable $_GET a través de un var_dump y acceder al mismo con el siguiente Query String:    imprimir.php?nombre=montoto&email=montoto@digitalhouse.com //

    var_dump ($_GET);

    echo "<br>"; echo "<br>";
    echo $_GET ["nombre"];

    echo "<br>"; echo "<br>";

    foreach ($_GET as $valor) {
        echo $_GET;

    }
    

    
?>