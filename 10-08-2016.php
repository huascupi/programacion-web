<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>10-08-2016</title>
    </head>
   <body>
       <?php date_default_timezone_set('America/Lima');
         echo date("H:i:s");
       ?>
     <?php
       echo"hola";
       ?>
       <?php
       date_default_timezone_set('America/Lima');
        $hora_Lima=date("H:i:s");
       
      date_default_timezone_set('Europe/Paris');
      $hora_Paris=date("H:i:s");
       echo "<p> la hora en Lima es: ".$hora_Lima."</p>";
       echo "<p> la hora en Paris es: ".$hora_Paris."</p>";
      ?>

    </body>
</html>