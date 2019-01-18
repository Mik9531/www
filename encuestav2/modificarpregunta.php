<?php 


/*ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);*/

include("conexion.php"); 
$consultaPreg = ConsultaPreguntas();
$fila = mysqli_fetch_array($consultaPreg);

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
			<h2>Modificar Preguntas</h2>
			<div>
		</header>
	</body>

<?php
if (isset($_POST['ok'])){
	
	
	$columna="$_POST[pregunta]";
	mysqli_query($conexion,"UPDATE preguntas SET pregunta$columna='$_POST[texto]'");
	

?>

<header>
		<br>
		<h2>Pregunta <?php echo $columna?> modificada correctamente<h2>
		<br>
		</header>

<?php } 

else {

?>



<?php

if ($result = mysqli_query($conexion,"SELECT * FROM preguntas")) {

    /* determinar el número de columnas del resultado */
    $row_cnt = $result->field_count;

printf("Result set has %d rows.\n", $row_cnt);
}

?>
 
 
 
 <?php 
 
 //Bucle de preguntas//
 
	$i=0;
	 
	   while ($i<$row_cnt-1){
		   
		   $i++;
		   $pregunta="pregunta$i";
		   
	 
	
	 ?>
	 
<form method=post >
<P><LABEL><?php echo $fila[$pregunta]; ?></LABEL>


<input type=radio name=pregunta value=<?php echo $i?>> Modificar<br>




<?php } ?>
<br>
<input name="texto" type="text" placeholder="Escribe aqui tu pregunta" ></input>
<button name="ok" type=submit">Aceptar</button>
<br>
</form>

<?php } ?>


<br>
<body>
        <?php
        $menu =  json_decode('
        [{"nombre":"Volver al submenu","url":"submenu.php","link":"/menu_inteligente/codeigniter.php"}]');  
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
		</body>
		
		



