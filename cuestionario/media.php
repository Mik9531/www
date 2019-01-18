<html lang="es">
	
	
	
	<head>
		<body style = "background: url(img/background1.jpg); background-size: 100%;">
		</body>
		<title>Media</title>
		<meta charset="utf-8">
		<meta name="viewport" content="with=device-width, initial-scale=1, maximum-scale=1"/>
		
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Media</h2>
			<div>
		</header>



<header>
<?php
error_reporting(0);
include ('conexion.php'); //incluimos el codigo de conexion.php


$consultaMediaRespuestas = "SELECT AVG(respuesta1) FROM respuestas";
$consultaModaRespuestas = "SELECT respuesta1, COUNT(respuesta1) FROM respuestas GROUP respuesta1 ORDER BY COUNT(respuesta1) DESC";
$resultadomedia = mysqli_query($conexion, $consultaMediaRespuestas);
$resultadomoda = mysqli_query($conexion, $consultaModaRespuestas);



while ($registro = mysqli_fetch_row($resultadomedia)){
	
	$media_respuesta1 = $registro[0];
	echo  "<br>La media de la pregunta 1 es: <br>";
	if (((int)$media_respuesta1-1) == 0)
		echo "NS";
	else
		echo (int) ($media_respuesta1-1);
}



$consultaRespuestas = "SELECT AVG(respuesta2) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 2 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta3) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 3 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta4) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 4 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta5) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 5 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta6) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 3 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta6) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 3 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta7) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 7 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta8) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 8 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta9) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 9 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta10) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 10 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta11) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 11 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta12) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 12 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta13) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 13 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta14) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 14 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta15) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 15 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta16) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 16 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta17) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 17 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta18) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 18 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta19) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 19 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta20) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 20 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta21) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 21 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta22) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 22 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);
	

}

$consultaRespuestas = "SELECT AVG(respuesta23) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 23 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}

$consultaRespuestas = "SELECT AVG(respuesta24) FROM respuestas";
$resultado = mysqli_query($conexion, $consultaRespuestas);

while ($registro = mysqli_fetch_row($resultado)){
	
	$media_respuesta2 = $registro[0];
	echo  "<br>La media de la pregunta 24 es: <br>";
	if (((int)$media_respuesta2-1) == 0)
		echo "NS";
	else
		echo (int)($media_respuesta2-1);


}



?>	

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
<br>
</br>
</header>




