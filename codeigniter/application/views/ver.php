<html lang="es">
<html lang="es">
<html>



	<head>
		<style>
		body {background: url(http://www.zoomascota.com/wp-content/uploads/2018/01/Background-opera-speeddials-community-web-simple-backgrounds.jpg) ;  background-size: 100% 100%; background }
		</style>
		</head>
	<head>
		<center><title>Ver Películas</title><center>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Películas</h2>
			</div>
		</header>
<center>

	
			<table class="table">
			<center>
				<tr>
					<th><center>ID_Película</th>
					<th><center>Título</th>
					
				
	<?php
		foreach($enlaces->result() as $datos){
			
			echo "<center><tr>";
				echo "<td><center>".$datos->id;
				echo "<td><center>".$datos->titulo;
				echo "<td><a href=".base_url()."administrador/modificar/".$datos->id.">Modificar</a> | ";
				echo "<a href=".base_url()."administrador/eliminar/".$datos->id.">Eliminar</a></td>";
			echo "</tr>";
			
		}
	?>
	</tr>
</table>
<br><br><br>
<h1>
<a href="<?= base_url().'index.php/redireccion'?>" title="Volver">Volver al menú administrador</a>