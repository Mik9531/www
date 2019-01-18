<html lang="es">
<html>



	<head>
		<style>
		body {background: url(http://www.zoomascota.com/wp-content/uploads/2018/01/Background-opera-speeddials-community-web-simple-backgrounds.jpg) ;  background-size: 100% 100%; background }
		</style>
		</head>
		
		
		<center><title>Registro</title><center>
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
			<center><h2>Registrar usuario</h2></center>
			<div>
		</header>
<?php if(isset($mensaje)):?>
<h2><?= $mensaje?></h2>
<?php endif;?>

<!--formulario-->
<!--@set_value en los inputs para que recuerde los datos introducidos-->
<center>
<?= form_open(base_url().'index.php/login/verify_registro',
array('name'=>'form_reg'));?>
<?= form_label('Nombre','Nombre'); ?><br>
<?= form_input('nombre',@set_value('nombre')) ?> <br /> <br />
<?= form_label('Correo','Correo'); ?><br>
<?= form_input('correo',@set_value('correo')) ?> <br /> <br />
<?= form_label('Usuario','Usuario'); ?><br>
<?= form_input('usuario',@set_value('usuario')) ?> <br /> <br />
<?= form_label('Contraseña','Contraseña'); ?><br>
<?= form_password('pass'); ?> <br /> <br />
<?= form_label('Repetir contraseña','Repetir_contraseña'); ?><br>
<?= form_password('pass2'); ?> <br /> <br />
<?= form_submit('submit_reg', 'Registrar');?><br><br><br><br><br><br>
<a href="<?= base_url().'index.php/login/'?>" <h2><title="Iniciar Sesión"><h2>
Iniciar Sesión</a>
<?= form_close(); ?>
</center><hr />
<?= validation_errors(); ?>
</body>
</html>