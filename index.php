<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Guitarras</title>
		<!-- Hola de estilos-->
		<link rel="stylesheet" href="css/styles.css">
							<script  type="text/javascript">	
								window.addEventListener("load",function(event){
									var template = document.getElementById("article-template");
								
										var articles = document.getElementById("articles");
								for(var i=0; i<=5;i++){
									var clonado = template.cloneNode(true);
									clonado.removeAttribute("id");
									var h2 = clonado.getElementsByTagName("h2")[0];
									h2.innerHTML = h2.textContent + ' '+i;
									articles.appendChild(clonado);

								}
								});
							</script>

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
								<a href="/">Inicio</a>
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
				</div>
				
			</header>
			<div id="slidder" class="slider-big">
				<h1>Hola Bienvenido </h1>
			</div>
			<div class="center">
				<section id="content">
					<h2 class="subheader">Ultimas guitarras</h2>
					<div id="articles">


					<?php   
						$url = "https://thawing-caverns-82463.herokuapp.com/guitarras/" ;
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
							
								 		print $datos ;
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
									  /*  echo	"imagen: ".$lat_10  ; */
									   echo "<br>";		   
					
					?>

					</div>
							

						<!-- Listado de guitarras-->
						<!-- 	
						
						
						<article class="article-item" id="article-template">
							<div class="image-wrap">
								<img src="https://m.media-amazon.com/images/I/31yGZ+lDZVL.jpg" alt="Guitarra">
							</div>
							<h2>Guitarra de prueba</h2>
							<span class="date">
								Hace 4 minutos
							</span>
							<a href="#">Leer mas</a>
							<div class="clearfix"></div>
						</article>	
						 -->
						
						
						

				</section>
							

				<aside id="sidebar">
					<div id="nav-blog" class="sidebar-item">
						<h3>Puedes hacer esto</h3>
						<a href="#" class="btn btn-success">Crear guitarra</a>	
					</div>

					<div id="serch" class="sidebar-item">
						<h3>Buscador</h3>
						<p>Encuentra la guitarra que quieres</p>
						<form action="mostrar.php" method="get">
							<!-- <input type="text" name="serch"> -->
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




