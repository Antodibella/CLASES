<?php
$persona = [
    "Nombre" => "Jon",
    "Apellido" => "Snow",
    "Edad" => 27,
    "Hobbies" => ["Netflix","Futbol","Programar"]
];

    echo "<pre>";
    var_dump($persona);
    $persona["Edad"] = 25;
    $persona["Direccion"] = "Winterfell";
    $persona["Hobbies"][]= "Leer";
    var_dump($persona);
    echo "<br>"; echo "<br>";
    /* 1.  Definir dos variable con números y compararlos con un if para decidir cuál número
        es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que
        resultó ser mayor, y un else para cubrir el caso inverso.
 */
$numero1= 10;
$numero2= 20;
if($numero1> $numero2){
    echo $numero1 . " " . "Es mayor";
}
else{
    echo $numero2 . " " . "Es mayor";
};
echo "<br>"; echo "<br>";
/* 2.    Utilizando la función propia de PHP rand(x,y), donde “x” es el número mínimo e “y” el número
 máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e imprimir la variable 
 si y sólo si el número generado es 3 o 5. */

 $numero3 = rand(1,5);
 if($numero3 == 3|| $numero3 ==5){
     echo $numero3;
 }
  echo "<br>"; echo "<br>";
/*  3.    Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso que sea verdad
 esa premisa. En el caso que sí lo sea que simplemente se imprima el número 3. */
 $numero3 = rand(1,5);
 if($numero3 == 3){
     echo $numero3;
 }
 else{
     echo "El número NO es 3";
 } 
 echo "<br>"; echo "<br>";
 /* 4.    Generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea verdadero, devolver 
 “El número es mayor a 50”, en el caso que sea falso: “El número es menor a 50”.
¿Qué pasa si el número es 50? */
$numero4 = rand(0,100);
 if($numero4 > 50){
     echo "El número" . " " .$numero4 . " " ."mayor a 50";
 }
 else{
     echo "El número" . " " .$numero4 . " " ."es menor a 50";
 }
 echo "<br>"; echo "<br>";
/*  5.    Generar dos variables, una $nombreDeUsuario y $ContraseniaDeUsuario, ambos strings. Validar que el 
 usuario corresponda a "admin" y la contraseña a "1234". De ser asi, que imprima "Bienvenido!", sino, que
  imprima que hay un error en el login. */


  echo "<br>";
  $nombreDeUsuario="admin";
  $ContraseniaDeUsuario= 1234;
  if($nombreDeUsuario == "admin" &&  $ContraseniaDeUsuario == 1234){
    echo "Bienvenido!";
  }
  echo "<br>"; echo "<br>";
  /* Modificar al ejercicio anterior, y agregar los "else" necesarios para poder identificar si el error 
  esta en el usuario, la contraseña, o si alguno de los campos está vacío aún. */
  $nombreDeUsuario="admin";
  $ContraseniaDeUsuario= 1234;
  if($nombreDeUsuario == "admin"){
      if($ContraseniaDeUsuario == 1234){
      echo "Bienvenido!";   
      }
      else{
          echo "Contraseña Incorrecta";
      }
  }
  else{
    echo "Usuario Incorrecta";

  }

  echo "<br>"; echo "<br>";
  
 /*  6.Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que puede ser “Masculino”,
   “Femenino” u “Otro”). Si la persona es mayor a 18 años y no está casado se imprimirá el mensaje “Bienvenido”. */

$edad=19;
$casado=false;
$sexo="Masculino";
if($edad>18 && $casado == false){
    echo "Bienvenido";
}
echo "<br>"; echo "<br>";
/* a.    Modificaremos al ejercicio anterior para que también imprima bienvenido si el sexo es “Otro” 
sin importar el resto de las condiciones. */
$edad=19;
$casado=false;
$sexo="otro";
if($sexo== "otro"){
    echo "Bienvenido";
}
echo "<br>"; echo "<br>";
/* 7.    Definir una variable que se llame cantidadDeAlumnos que contenga un número. Luego, escribir el siguiente 
código: (sin copiar y pegar!!) */
$cantidadDeAlumnos=-10;
if ($cantidadDeAlumnos) {

    echo "Existe";
    
    }
    
    else {
    
    echo "no existe";
    
    }
    echo "<br>"; echo "<br>";

    /* 8.   Definir una variable $numero con un número. Imprimir “El número es par” si lo es o 
    “El número es impar” si no lo es. Se pide resolver este ejercicio con un if ternario (operadores  ?   */
    $numero5=69;
    if($numero5%2 == 0){
        echo "El número es par";
    }
    else{
        echo "El número es impar";
    }
    echo "<br>"; echo "<br>";

    /* 9. Crear una variable $nota con un valor del 0 al 10. Utilizando un switch generar la siguiente lógica:
        Si la nota es menor a 4 imprimir “desaprobado”
        Si la nota es 4 o 5 imprimir “zafamos”
        Si la nota este entre 6 y 8 imprimir “Bien!!!”
        Si la nota es un 9 imprimir “MUY bien!!”
        Si la nota es un 10 imprimir “Excelente!!!!!” */
        $nota=11;
        switch ($nota) {
            case $nota<4:
                echo "desaprobado";
                break;
            case $nota == 4 || $nota ==5 :
                echo "zafamos";
                break;
            case $nota>6 && $nota<8:
                echo "Bieen!!";
                break;
            case $nota==9:
                echo "Muy Bieen!!";
                break;
            case $nota==10:
                echo "Excelentee!!!!";
                break;
            default:
                echo "No lo corregimos todavia";
                break;           
        }
        echo "<br>"; echo "<br>";

       /*  10. Agregar al switch anterior un mensaje en caso de que la nota no sea un número del 1 al 10 
        diciendo “El número no es válido”. Punto extra: ¿Probaste con números negativos? */

        
?>  