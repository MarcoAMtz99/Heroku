<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Guitarras</title>
		<!-- Hola de estilos-->
		<link rel="stylesheet" href="css/styles.css">
							
	</head>
		<body>
			<header id="header">
				<div class="center">
					<!-- Logo-->
						<img src="assets/images/logo.png" class="app-logo" alt="Logotipo"/>
						<span id="brand">
							<strong>Guitarras</strong>API
						</span>
					<!-- Menu-->

					<nav id="menu">
						<ul>
							<li>
								<a href="index.php">Inicio</a>
							</li>
							<li>
								<a href="crear.html">Crear</a>
							</li>
							<li>
								<a href="articles.html">Modificar</a>
							</li>
						
						</ul>
					</nav>
					<!-- Limpiar floats-->
					<div class="clearfix"></div>
				
			</header>
			
			<div class="center">
				<section id="content">

						<!-- Listado de guitarras-->
							<h1 class="subheader">Formulario</h1>


							<form class="mid-form" method="post" action="articles.php"> 
							<div class="form-group">
									<label for="Modelo">ID</label>
									<input type="text" name="id">
								</div>
								<div class="form-group">
									<label for="Modelo">Modelo</label>
									<input type="text" name="Modelo">
								</div>
								<div class="form-group">
									<label for="Marca">Marca</label>
									<input type="text" name="Marca">
								</div>
								<div class="form-group">
									<label for="Color">Color</label>
									<input type="text" name="Color">
								</div>
								<div class="form-group">
									<label for="Largo">Largo</label>
									<input type="text" name="Largo">
								</div>
								<div class="form-group">
									<label for="Ancho">Ancho</label>
									<input type="text" name="Ancho">
								</div>
								<div class="form-group">
									<label for="Peso">Peso</label>
									<input type="text" name="Peso">
								</div>
								<div class="form-group radiobuttons">
									
									<input type="radio" name="Tipo" value="Acustica">Acustica 
									<input type="radio" name="Tipo" value="Electrica">Electrica 
									<input type="radio" name="Tipo" value="Electroacustica">Electroacustica 

								</div>
								<div class="clearfix"></div>
								
								<div class="form-group">
									<label for="NumCuerdas">Numero de cuerdas</label>
									<input type="text" name="NumCuerdas">
									<label for="NumCuerdas">Imagen url</label>
									<input type="text" name="imagen">
								</div>
								<input type="submit" value="Enviar" class="btn btn-success">
							</form>
				</section>

				</div>
					<?php 
					$lat_1 = $_POST["id"];
					$lat_2 = $_POST["modelo"];
						$lat_3 = $_POST["marca"];
							$lat_4 = $_POST["color"];
								$lat_5 = $_POST["largo"];
									$lat_6 = $_POST["ancho"];
										$lat_7 = $_POST["peso"];
											$lat_8 = $_POST["tipo"];
												$lat_9 = $_POST["numCuerdas"];
													$lat_10 = $_POST["imagen"];

				   $postData = array(
				   '$id' => $lat_1 ,
				   'marca' =>$lat_3 ,
				   'modelo' => $lat_2,
				   'color' => $lat_4 ,
				   'peso' => $lat_7,
				   'largo' => $lat_5 ,
				   'ancho' => $lat_6,
				   'numCuerdas' => $lat_9,
				   'imagen' => $lat_10
				   ); 


					if(isset($_POST['Enviar'])){
					/* 	$id = $_GET['id']; */
						$url = "https://thawing-caverns-82463.herokuapp.com/guitarras/" ;
						/*  echo "$url"; */
	 
	 				/* 	$json = file_get_contents($url);
	 					$datos = json_decode($json,true); */

						echo "Estoy guardadndo los datos dentro";
						  

							
						
					}	
						var_dump($postData);	
						
						echo "Estoy guardadndo los datos fuera";
					?>
							

				<aside id="sidebar">
					<div id="nav-blog" class="sidebar-item">
						<h3>Puedes hacer esto</h3>
						<a href="crear.php" class="btn btn-success">Crear guitarra</a>	
					</div>

					<div id="serch" class="sidebar-item">
						<h3>Buscador</h3>
						<p>Encuentra la guitarra que quieres</p>
						<form action="">
							<input type="text" name="serch">
							<input type="submit" name="submit" value="Buscar">
						</form>
						
					</div>

				</aside>
				<div class="clearfix"></div>
			</div>
			<footer id="footer" class="center">
				<p>
					&copy; API de guitarras de Doctores Desadaptados
				</p>
			</footer>
		</body>
							
          <!-- Marcooooooooo  esta es la prueba  -->
</html>