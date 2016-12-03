<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		include("../modelo/Manejo_Objetos.php");

		try {
			
			$miconexion = new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');
			$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			$Manejo_Objetos = new Manejo_Objetos($miconexion);

			$tabla_blog = $Manejo_Objetos->getContenidoPorFecha();

			if (empty($tabla_blog)) {
				# code...
				echo "No hay entradas de blog";
			}else{

				foreach ($tabla_blog as $valor) {
						# code...
					echo "<h3>" . $valor->getTitulo() . "</h3>";
					echo "<h3>" . $valor->getFecha() . "</h3>";
					echo "<div style='width:400px'>";
					echo $valor->getComentario() . "</div>";
					
					if ($valor->getImagen() != "") {
						# code...
						echo "<img src='../imagenes/";
						echo $valor->getImagen() . "' width='300px' height='200px' />";
					}

					echo "<hr>";

				}	

			}



		} catch (Exception $e) {
			
			die("ERROR: " . $e->getMessage());

		}


	 ?>

	 <br>

	 <a href="formulario.php">CREAR BLOG NUEVO</a>

</body>
</html>