<html lang="es">
<html>



	<head>
		<style>
		body {background: url(http://www.zoomascota.com/wp-content/uploads/2018/01/Background-opera-speeddials-community-web-simple-backgrounds.jpg) ;  background-size: 100% 100%; background }
		</style>
		</head>
		
		
		<center><title>Login</title><center>
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
			<center><h2>Login</h2></center>
			</div>
		</header>
		<center>
<?php if(isset($mensaje)):?>
<h2><?= $mensaje?></h2>
<?php endif;?>
<!--formulario-->
 <form action="<?php echo base_url();?>login/verify_sesion" method="post">
<form>
<br/><br><br><br>
<center><h3><div id="mem" style="margin-left:7px"><label for="Usuario"> Usuario</label></div>
<input type="text" name="user" /> <br/><br><br><br>
<div id="mem" style="margin-left:7px"><label for="contraseña"> Contraseña</label></div>
<input type="password" name="pass" /> <br/><br/><br><br><br>
<input type="submit" value="Entrar" name="submit" /> <br/><br/><br><br><br>
<a href="<?= base_url().'usuarios/registro'?>" title="Deseo
registrarme">Registrarme</a> <br><br><br><br><br><br>
<a href="<?= base_url().'menu/index'?>" title="Deseo
registrarme">Volver al menú principal</a></center>
</form>
</body>
</html>