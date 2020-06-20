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