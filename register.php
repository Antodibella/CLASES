<?php
session_start();
$error = "";


// chequear si el usuario envio el form


if ($_POST) {
    //cargp los usuarios de la db
    $db = file_get_contents("usuario.json");
    $usuarios = json_decode($db, true);

    // validar si el usuario lleno los campos usuario y pass
    if(strlen($_POST["username"]) > 6 && strlen($_POST["password"]) > 6 ) {
        
        if (isset($_POST ["email"])){
            $emails =array_column($usuarios, "email");
            $index = array_search($_POST["email"], $emails);
        
            if($index === false){

                if(count($usuarios)){
                    $id = end($usuarios)['id'] +1;
                } else {
                    $id = 1;
                }
                $usuarios[] = [ 
                    "id" => $id,
                    "nombre" => $_POST ["name"],
                    "email" => $_POST ["email"],
                    "username" => $_POST ["username"],
                    "password" => $hash = password_hash($_POST["password"], PASSWORD_DEFAULT)
                              ];
                $db = json_encode ($usuarios);
         
                file_put_contents("usuario.json", $db);
            } else {
                $error = "el email esta en uso"; 
            }
        } else {
            $error = "debe ingresar email";
        }
     
      
    }
    else {
        $error = "No completó el formulario";
    } 

}





?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
     <?php if(strlen($error)>0){
          echo "<p>$error</p>";
        }
          ?>
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
