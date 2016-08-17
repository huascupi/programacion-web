<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
  <body>
  <? php
	/*******************************variables*************************/
	//asignar valores a variables 
	$nombre="juan";
	//las variables en php inician con el simbolo"$"
	echo "<p>Hola "$nombre."</p>";
	echo "<p>Hola $nombre</p>";//el contenido entre " "
	echo '<p>Hola $nombre</p>';//el contenido entre ' '
	unset($nombre);
	echo "<p>Hola "$nombre."</p>";
	echo "<p>Hola $nombre</p>";//el contenido entre " "
	echo '<p>Hola $nombre</p>';//el contenido entre ' '


	$nombre="brayan"
	echo "<p>Hola $nombre</p>";
	$nombre="null";//null es un valor especial nulo
	echo "<p>Hola $nombre</p>";

	$nombre="juan"
	var_dump ($nombre);
	$edad=18;
	var_dump ($edad);
	$edad="18";
	var_dump ($edad);
	var_dump (null);

	/*************************tipos de variables******************/
	//BOOLEANO
	$esEstudiante=TRUE;
	$esVaron=FALSE;
	//ENTERO
	$edad=20;
	//punto flotante
	$valor_pi=3.1416;
	//cadena de texto
	$nombre="Jose Carlos";
	//NULO
	$Semestre=null;

  ?>
 </body>
</html>