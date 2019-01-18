
<?php 
include "conexion.php";
$consultaSubmen = ConsultaSubmenu();
$menu = mysqli_fetch_array($consultaSubmen);

?>
		
	<head>
	<style>
	</style>
	
		<body style = "background: url(img/background1.jpg); background-size: 100%;">
		</body>
		<title>Menú Administrador</title>
		<meta charset="utf-8">
		<meta name="viewport" content="with=device-width, initial-scale=1, maximum-scale=1"/>
		
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
		
		

	
   
   <body>
		<header>
			<div class="alert alert-info">
			<h2>Menú Administrador</h2>
			<div>
		</header>
	</body>
		

    <body>
	<center>
        <?php
        $menu =  json_decode('
        [{"nombre":"Modificar Pregunta","url":"modificarpregunta.php","link":"/menu_inteligente/index.php"},
        {"nombre":"Eliminar Pregunta","url":"eliminar.php","link":"/menu_inteligente/codeigniter.php"},
		{"nombre":"Media","url":"media.php","link":"/menu_inteligente/codeigniter.php"},
		{"nombre":"Registro/Búsqueda","url":"mostrar.php","link":"/menu_inteligente/codeigniter.php"},
		{"nombre":"Volver al menú principal","url":"menu.php","link":"/menu_inteligente/codeigniter.php"}]');  
        ?>
        <ul>
		
        <?php
        foreach($menu as $botones){
        $clase = ($botones->link == $_SERVER['REQUEST_URI'] ? 'ventana_actual' : 'resto_ventanas');
        ?>        
            <header>
		
			<h2><a class="<?=$clase?>" href="<?=$botones->url?>"><?=$botones->nombre?></a><h2/>
			</header>
        <?php       
        } 
        ?>

        </ul>
		</center>
		</body>