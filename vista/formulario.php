<!DOCTYPE html>
<html>
<head>
	<title>Mi primer blog</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<style type="text/css">

		body{
			background-color: rgba(20%,50%,16%,.4); 
		}
		
		span,label{
			margin-top: 50px;
			padding: 5px;
			color: #444;
			position: absolute;
			font-size: 1em;

		}
		label{
			margin-top: 0px;
		}
		textarea,input{
			margin-left: 140px;
			font-size: 1.2em;
		}

		.comentario{
			position: relative;
			margin: 4px 0px 4px 0px;
			font-family: Arial, verdana, sans-serif;
			
		}
		.principal{
			padding: 4px;
			width: 800px;
			background-color: rgba(200,200,100,.2);
			margin:auto;
			font-family: verdana, sans-serif;
			font-weight: bold;
			border-radius: 4px;
			padding-bottom: 20px;
		}
		h1{
			text-align: center;
			text-shadow: 4px 4px 2px transparent;
			color: grey;
		}
		h5{
			text-align: center;
		}
		.cabecera{
			height: 100px;
			background-color: rgba(200,200,100,.8); 
			box-shadow: 4px 4px 4px grey;
			margin-bottom: 30px;
			padding-top: 30px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="principal">
		<div class="cabecera">
			<h1>CREAR BLOG</h1>
		</div>
		<form action="../controlador/Transacciones.php" method="POST" enctype="multipart/form-data" name="form1">
			<label>Título</label> <input type="text" name="txt_titulo">
			<div class="comentario">
				<span>Comentarios</span><textarea rows="10" cols="50" name="txt_comentario"></textarea>
			</div>

			<p>Seleccione un imagen con tamaño inferior a 2MB</p>
			<input type="hidden" name="MAX_TAM" value="2097152">
			<input type="file" name="file_imagen" id="imagen">	<hr style="margin: 30px">

			<input type="submit" name="bt_submit">

		</form>

		<h5><a href="mostrar_blog.php">Página de visualización del blog</a></h5>
	</div>
</body>
</html>