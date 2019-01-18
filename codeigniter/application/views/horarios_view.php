
<html lang="es">

<head>
		<style>
		body {background: url(http://www.zoomascota.com/wp-content/uploads/2018/01/Background-opera-speeddials-community-web-simple-backgrounds.jpg) ;  background-size: 100% 100%; background }
		</style>
		</head>
	<head>
		<center><title>Horarios</title><center>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<center><h2>Horarios</h2></center>
			</div>
		</header>


<?php




		foreach($sala->result() as $datos){
			
			if($par2 == $datos->id){
				
				foreach($consulta->result() as $dat){
   
					if($par2 == $dat->id){
   
						echo("<b>Titulo: </b>");
						echo $dat->titulo.'<br>';
   
					}
				}
	
			echo("<b>ID: </b>");
			echo $datos->id.'<br>';
			echo("<b>Nombre: </b>");
			echo $datos->nombre.'<br>';
			echo("<b>Capacidad: </b>");
			echo $datos->capacidad.'<br>';
			echo("<b>Soporte Digital: </b>");
			echo $datos->soporte_digital.'<br>';
			echo("<b>soporte_3D: </b>");
			echo $datos->soporte_3D.'<br>';
			echo("<b>Hora Apertura: </b>");
			echo $datos->hora_apertura.'<br>';
			}
		}
   
   
		foreach($cin->result() as $dat){
			
			if($par2 == $dat->id){
   
				echo("<b>Cine: </b>");
				echo $dat->nombre.'<br>';
				echo("<b>Direccion: </b>");
				echo $dat->direccion.'<br>';
			}
   
		}
   
   
   
?>


<center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1><?php echo $this->menu_lib->menu_back();?><br>
<?php echo $this->menu_lib->menu_backtoback();?>
</center>

</body>
</html>