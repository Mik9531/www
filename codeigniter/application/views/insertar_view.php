<html lang="es">
<html>



	<head>
		<style>
		body {background: url(http://www.zoomascota.com/wp-content/uploads/2018/01/Background-opera-speeddials-community-web-simple-backgrounds.jpg) ;  background-size: 100% 100%; background }
		</style>
		</head>
		
		
		<center><title>Insertar</title><center>
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
			<center><h2>Insertar película</h2></center>
			<div>
		</header>
</head>
<body>
<center>


<?= form_open(base_url().'index.php/administrador/validar',
array('name'=>'mi_form','id'=>'form'));?>
<?= form_label('Titulo','Titulo',array('class'=>'label')); ?><div id="mem" style="margin-left:7px"><label>Título</label><br></div>
<?= form_input('titulo','','class="input"') ?> <br />
<br />
<?= form_label('Duración','Duración',array('class'=>'label')); ?><div id="mem" style="margin-left:7px"><label>Duración</label><br></div>
<?= form_input('duracion','','class="input"') ?> <br />
<br />
<?= form_label('Edad','Edad',array('class'=>'label')); ?><div id="mem" style="margin-left:7px"><label>Edad</label><br></div>
<?= form_input('edad','','class="input"') ?> <br />
<br />
<?= form_label('País','País',array('class'=>'label')); ?><div id="mem" style="margin-left:7px"><label>Pais</label></div>1.- ESP 2.- ENG 3.- GER<br><br>
<?= form_input('pais','','class="input"') ?> <br />
<br />

<?= form_label('Género','Género',array('class'=>'label')); ?><div id="mem" style="margin-left:7px"><label>Pais</label></div>1.- Terror 2.- Ciencia Ficción 3.- Comedia 4.- Aventuras 5.- Romance<br><br>
<?= form_input('genero','','class="input"') ?> <br />
<br />
<?= form_label('Año','Año',array('class'=>'label')); ?><div id="mem" style="margin-left:7px"><label>Edad</label><br></div>
<?= form_input('año','','class="input"') ?> <br />
<br />
<?= form_label('Distribuidor','Distribuidor',array('class'=>'label')); ?><div id="mem" style="margin-left:7px"><label>Distribuidor</label></div>1.- Universal Pictures 2.- Warner Bros 3.- Sony Pictures 4.- Paramount Pictures 5.- 20TH Century 6.- Walt Disney<br><br>
<?= form_input('distribuidor','','class="input"') ?> <br />
<br />
<?= form_label('Descripción','Descripción',array('class'=>'label')); ?> <br/><div id="mem" style="margin-left:7px"><label>Descripción</label><br></div>
<?= form_textarea('descripcion','','class="textarea" row="25px"'); ?> <br />
<br />
<?= form_label('Trailer','Trailer',array('class'=>'label')); ?> <br /><div id="mem" style="margin-left:7px"><label>Trailer</label><br></div>
<?= form_textarea('trailer','','class="textarea" row="50px"'); ?> <br />
<?= form_submit('submit', 'Enviar datos','class="submit"');?>
<?= form_close(); ?>
<hr />
<h3>Posibles errores</h3>
<?= validation_errors(); ?><br><br><br><br>
<a href="<?= base_url().'index.php/redireccion'?>"
<html><h1><title="Volver">Volver al menú</a></h1>
</center>
</body>
</html>