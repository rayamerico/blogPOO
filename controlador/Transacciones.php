<?php 

	//include("../modelo/Objeto_Blog.php");

	/*
	*/

	include("../modelo/Manejo_Objetos.php");

	echo $_FILES['file_imagen']['name'] . "<br>";

	try {
		
		$miconexion = new PDO('mysql:host=localhost; dbname=bbddblog','root','');
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		if ($_FILES['file_imagen']['error']) {
			# code...

			switch ($_FILES['file_imagen']['error']) {
				case 1:
					# code...
					echo "El tamaño del archivo excede lo permitido por el servidor";

					break;
				case 2:
					# code...
					echo "El tamaño del archivo excede los 2MB";
					
					break;
				case 3:
					# code...
					echo "El envío de archivo se interrumpió";
					
					break;
				case 4:
					# code...
					echo "No se ha enviado ningún archivo";
					
					break;
				
				default:
					# code...
					break;
			}


		}else{

			echo "el archivo se subio con exito <br>";

			if (isset($_FILES['file_imagen']['name']) && ($_FILES['file_imagen']['error'] == UPLOAD_ERR_OK)) {
				# code...
				$destino_de_ruta = "../imagenes/";

				move_uploaded_file($_FILES['file_imagen']['tmp_name'], $destino_de_ruta . $_FILES['file_imagen']['name']);

				echo "El archivo " . $_FILES['file_imagen']['name'] . " se ha copiado en el directiorio de imagenes";

			}else{

				echo "El archivo no se ha podido copiar al directorio de imagenes";
			}

		}

//------

		$Manejo_Objetos = new Manejo_Objetos($miconexion);

		$blog = new Objeto_Blog();


		$blog->setTitulo($_POST['txt_titulo']);
		$blog->setComentario($_POST['txt_comentario']);
		$blog->setFecha(Date("Y-m-d H:i:s"));
		$blog->setImagen($_FILES['file_imagen']['name']);

		$Manejo_Objetos->insertaContenido($blog);

		echo "<h4> SE CREÓ EL BLOG '" . $blog->getTitulo() . "'</h4>";

	} catch (Exception $e) {

		die("ERROR: " . $e->getMessage());
		
	}

	




 ?>