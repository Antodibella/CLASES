<?php
session_start();
$error = "";

if ($_POST) {
    
    $db = file_get_contents("usuario.json");
    $usuario = json_decode($db, true);
    $numero=0;
    if(strlen($_POST["username"]) > 6 && strlen($_POST["password"]) > 6 ) {
       $numero++;
       $usuario[] = [ "nombre" => $_POST ["name"],
                        "email" => $_POST ["email"],
                        "username" => $_POST ["username"],
                        "password" => $hash = password_hash($_POST["password"], PASSWORD_DEFAULT),
                        "contador" =>  $numero++, 
                     ];
       $db = json_encode ($usuario);

       file_put_contents("usuario.json", $db);
    }
    else {
        $error = "No completó el formulario";
    }

}

echo "<br>"; echo "<br>"; 


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>


                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
