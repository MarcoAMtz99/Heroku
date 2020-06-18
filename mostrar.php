<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>API</title>
</head>
<body>
	<div id="BoxForm">
		<h1>Guitarras API</h1>

		
<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$url = "https://thawing-caverns-82463.herokuapp.com/guitarras/".$id ;
	/*  echo "$url"; */
	 
	 $json = file_get_contents($url);
	 $datos = json_decode($json,true);


	 $lat_1 = $datos["id"];
	 $lat_2 = $datos["modelo"];
	 $lat_3 = $datos["marca"];
	 $lat_4 = $datos["color"];
	 $lat_5 = $datos["largo"];
	 $lat_6 = $datos["ancho"];
	 $lat_7 = $datos["peso"];
	 $lat_8 = $datos["tipo"];
	 $lat_9 = $datos["numCuerdas"];
	 $lat_10 = $datos["imagen"];

	 
		   echo	"ID: ".$lat_1  ; 
		   echo "<br>";
		   echo	"modelo: ".$lat_2  ;
		   echo "<br>";
		   echo	"marca: ".$lat_3  ;
		   echo "<br>";
		   echo	"color: ".$lat_4  ;
		   echo "<br>";
		   echo	"largo: ".$lat_5  ;
		   echo "<br>";
		   echo	"ancho: ".$lat_6  ;
		   echo "<br>";
		   echo	"peso: ".$lat_7  ;
		   echo "<br>";
		   echo	"tipo: ".$lat_8  ;
		   echo "<br>";
		   echo	"numCuerdas: ".$lat_9  ;
		   echo "<br>";
		   echo	"imagen: ".$lat_10  ;
		   echo "<br>";
		   
	 
}


?>

		<!-- 
		<form method="get" action="">
		<input type="text" name="id"placeholder="id">
		<!-- <input type="text" name="phone"placeholder="Numero">
		<input type="text" name="adress" placeholder="Direccion">
		<input type="text" name="comment" placeholder="Comentario">
		<input type="submit" name="registrar" value="registrar"> -->

		<button type type="submit" name="registrar">Enviar</button>
		</form>	
	</div>
 -->
	<h2>Hola amigos bolita este es un cambio</h2>

	
	
</body>
</html>



