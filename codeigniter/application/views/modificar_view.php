<html lang="es">
<head>
		<style>
		body {background: url(http://www.zoomascota.com/wp-content/uploads/2018/01/Background-opera-speeddials-community-web-simple-backgrounds.jpg) ;  background-size: 100% 100%; background }
		</style>
		</head>
	<head>
		<center><title>Modificar</title><center>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Modificar película</h2>
			</div>
		</header>


<form id="form" name="form" action="<?=base_url()?>administrador/modificarEnlace/<?=$id?>" method="POST">
		<label for="titulo">Titulo</label><br>
		<input type="text" size="40" name="titulo" id="titulo" value="<?=$titulo?>"/><br>
		<br />
		<p><label for="titulo">Duracion</label><br>
		<input type="text" size="30" name="duracion" id="duracion" value="<?=$duracion?>"/><br>
		<p><label for="titulo">Edad</label><br>
		<input type="text" size="30" name="edad" id="edad" value="<?=$edad?>"/><br>
		<p><label for="titulo">Pais</label><br>
		<input type="text" size="30" name="pais" id="pais" value="<?=$pais?>"/><br>
		<p><label for="titulo">Genero</label><br>
		<input type="text" size="30" name="genero" id="genero" value="<?=$genero?>"/><br>
		<p><label for="titulo">Año</label><br>
		<input type="text" size="30" name="año" id="año" value="<?=$año?>"/><br>
		<p><label for="titulo">Distribuidor</label><br>
		<input type="text" size="30" name="distribuidor" id="distribuidor" value="<?=$distribuidor?>"/><br>
		<p><label for="titulo">Descripcion</label><br>
		<input type="text" size="100" name="descripcion" id="descripcion" value="<?=$descripcion?>"/><br>
		<p><label for="titulo">Trailer</label><br>
		<input type="text" size="60" name="trailer" id="trailer" value="<?=$trailer?>"/>
		<p><input type="submit" name="modificar" id="modificar" value="Modificar película" /></p>
</form>
<h1>
<p><a href="<?= base_url().'administrador/ver'?>" title="Volver">Volver a los identificadores</a></p><br>
<a href="<?= base_url().'index.php/redireccion'?>" title="Volver">Volver al menu administrador</a>