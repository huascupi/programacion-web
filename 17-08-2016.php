<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <?php
     $esEstudiante=false;
     $edad=18;
     $valor_pi=3.1416;
     $nombre="Jose Carlos";
     $semestre=null;
     echo '<p> El tipo de $esEstudiante es:'. gettype($esEstudiante).'</p>';
     echo "<p style='color:blue'>El tipo de $esEstudiante es:". gettype($esEstudiante)."</p>";
         
         

     echo '<p> El tipo de  edad es:'. gettype($edad).'</p>';
     
     echo '<p> El tipo de  valor_pi es:'. gettype($valor_pi).'</p>';
             
     echo '<p> El tipo de  nombre es:'. gettype($nombre).'</p>';
         
    echo '<p> El tipo de  semestre es:'. gettype($semestre).'</p>';

    /******operador ternario*****/
    echo ($esEstudiante?"Hola Estudiante":"Quien eres");

    echo "<br>";

    echo (3>4?"correcto":"incorrecto");

    /*CONSTANTES*/
    //Una constante en PHP se define usando la 
    //funcion define()
     define("MI_NUMERO_TELEFONICO",999626262);
     echo "<p> Mi numero telefonico es:", MI_NUMERO_TELEFONICO,"</p>";
     echo '<p> Mi numero telefonico es: '. MI_NUMERO_TELEFONICO.'</p>';

    define("MI_NUMERO_TELEFONICO",951334455);
     echo "<p> Mi numero telefonico es:", MI_NUMERO_TELEFONICO,"</p>";

     /*CONSTANTES PREDEFINIDAS*/

     echo __FILE__;"<br>";
     
     echo __DIR__;"<br>";
   ?>
</body>
</html>