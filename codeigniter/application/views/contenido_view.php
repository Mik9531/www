<html lang="es">
<head>
		<style>
		body {background: url(http://www.zoomascota.com/wp-content/uploads/2018/01/Background-opera-speeddials-community-web-simple-backgrounds.jpg) ;  background-size: 100% 100%; background }
		</style>
		</head>
	<head>
		<center><title>Contenido</title><center>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Descripción de la película</h2>
			</div>
		</header>


<?php


foreach($consulta->result() as $datos){

	
	if($par1 == $datos->id){
	
		echo("<b>ID: </b>");
		echo $datos->id.'<br>';
		echo("<b>Titulo: </b>");
		echo $datos->titulo.'<br>';
		echo("<b>Duracion: </b>");
		echo $datos->duracion.'<br>';
		echo("<b>Edad: </b>");
		echo $datos->edad.'<br>';
   
		foreach($const->result() as $dat){
   
				if($datos->pais == $dat->id){
   
					echo("<b>Pais: </b>");
					echo $dat->nombre.'<br>';
   
				}
		}
   
		foreach($gen->result() as $dat){
   
				if($datos->genero == $dat->id){
   
					echo("<b>Genero: </b>");
					echo $dat->nombre.'<br>';
   
				}
		}	 
		echo("<b>Año: </b>");
		echo $datos->año.'<br>';
		
		foreach($dist->result() as $dat){
   
				if($datos->distribuidor == $dat->id){
   
					echo("<b>Distribuidor: </b>");
					echo $dat->nombre.'<br>';
   
				}
		}
		
		
		echo("<b>Descripcion: </b>");
		echo $datos->descripcion.'<br>';
		echo("<b>Trailer: </b>");
		echo $datos->trailer.'<br>';

		
	}
   
}
?><center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1><?php echo $this->menu_lib->menu_back();?><br>
<?php echo $this->menu_lib->menu_backtocartelera();?>
</center>
</body>
</html>