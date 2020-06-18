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
		
		<form method="get" action="">
		<input type="text" name="id"placeholder="id">
		<!-- <input type="text" name="phone"placeholder="Numero">
		<input type="text" name="adress" placeholder="Direccion">
		<input type="text" name="comment" placeholder="Comentario">
		<input type="submit" name="registrar" value="registrar"> -->

		<button type type="submit" name="registrar">Enviar</button>
		</form>	
	</div>
	<!-- <div id="BoxSerch">
		<form method="post" action="blank">
			<h2>buscar</h1>
			<input type="text" name="buscar">
			<input type="submit" name="buscar">
			
		</form>
		
	</div> -->
	
</body>
</html>


<?php

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$url = "https://thawing-caverns-82463.herokuapp.com/guitarras/".$id ;
		/*  echo "$url"; */
		 
		 $json = file_get_contents($url);
		 $datos = json_decode($json,true);


			$lat = $datos["modelo"];
			
		 		 echo	"ID:".$lat  ;
		 
	}


?>


