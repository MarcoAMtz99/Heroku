<?php	

			echo <<<EOT
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


EOT;
?>






<?php 
					$lat_1 = $_POST['id'];
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