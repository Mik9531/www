<html lang="es">
<html>



	<head>
		<style>
		body {background: url(http://www.zoomascota.com/wp-content/uploads/2018/01/Background-opera-speeddials-community-web-simple-backgrounds.jpg) ;  background-size: 100% 100%; background }
		</style>
		</head>
		
		
		<center><title>Confirmación</title><center>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<body style = "">
</body>
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	
	<body>
		<header>
			<div class="alert alert-info">
			<center><h2>Película registrada con éxito</h2></center>
			<div>
		</header>
<body>

<center>
Título:<h1><?= $titulo_pelicula;?></h1>
Duración:<h3><?= $duracion;?></h1>
Edad:<h3><?= $edad;?></h3>
Año:<h3><?= $año;?></h3>
Descripción:<p><?= $descripcion;?></p>
Trailer: <p><?= $trailer;?></p>
<center>
<h1><br><br><br><br><br><br><br>
<a href="<?= base_url().'index.php/redireccion'?>" title="Ver todas las
peliculas">Volver al menú administrador</a>
</center>
</body>
</html>