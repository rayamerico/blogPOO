<!DOCTYPE html>
<html>
<head>
	<title>Mi primer blog</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>
	<div class="principal">
		<div class="cabecera">
			<h1>CREAR BLOG</h1>
		</div>
		<form action="../controlador/Transacciones.php" method="POST" enctype="multipart/form-data" name="form1">
			<label>TÍTULO</label> <input type="text" name="txt_titulo">
			<div class="comentario">
				<span>COMENTARIOS</span><textarea rows="10" cols="50" name="txt_comentario"></textarea>
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