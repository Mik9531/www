<?php

error_reporting(E_ALL ^ E_NOTICE);


include "conexion.php";


//Variables de consulta//

$where="";
$sexo=$_POST['xsexo'];
$edad=$_POST ['xedad'];





//Botón buscar //


if (isset($_POST['buscar']))
{


	if (empty($_POST['xedad']))
	{
		
		$where="where sexo like '".$sexo."'";
	}
	else if (empty($_POST['xsexo']))
	{
		
		$where="where edad like '".$edad."'";
	}
	
	else 
	{
		
			$where="where edad like '".$edad."' and sexo like '".$sexo."'";
			
	}
}



//Consulta//

$alumnos = "SELECT * FROM perfilestudiante $where"; 
$Perf=$conexion->query($alumnos);


if(mysqli_num_rows($Perf)==0)
{
	$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
}



?>


<html lang="es">
	
	
	
	<head>
		<body style = "background: url(img/background1.jpg); background-size: 100%;">
		</body>
		<title>Mostrar Registros Perfil Estudiante</title>
		<meta charset="utf-8">
		<meta name="viewport" content="with=device-width, initial-scale=1, maximum-scale=1"/>
		
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Mostrar Registros de la BD de Perfil Estudiante</h2>
			<div>
		</header>
	
		<section>
			<form method="post">
					

				<select name="xedad">
					<option value="">Edad</option>
					<option value="<19">Menos de 19 años</option>
					<option value="19-21">19-21 años</option>
					<option value="22-23">22-23 años</option>
					<option value="24-25">24-25 años</option>
					<option value=">25">Más de 25 años</option>
				</select>
				
				<select name="xsexo">
					<option value="">Sexo</option>
					<option value="Hombre">Hombre</option>
					<option value="Mujer">Mujer</option>
				</select>
				
				<button name="buscar" type=submit">Buscar</button>
				<button name="volver" type=submit">Volver a cargar registro</button>
		
		</form>
			<table class = "table">
			<tr>
				<th>ID</th>
				<th>Edad (años)</th>
				<th>Sexo</th>
				<th>Curso más alto matriculado</th>
				<th>Curso más bajo matriculado</th>
				<th>Veces que se ha matriculado</th>
				<th>Interes por la asignatura</th>
				<th>Uso de las tutorías</th>
				<th>Dificultad</th>
				<th>Calificación esperada</th>
				<th>Asistencia</th>
				
			</tr>
			
			
		<?php
		
		//Visualizado//
		
		while ($registroPerfil = $Perf->fetch_array(MYSQLI_BOTH)){
		
			{	
			echo '<tr>
				<td>'.$registroPerfil['ID'].'</td>
				<td>'.$registroPerfil['edad'].'</td>
				<td>'.$registroPerfil['sexo'].'</td>
				<td>'.$registroPerfil['cursoalto'].'</td>
				<td>'.$registroPerfil['cursobajo'].'</td>
				<td>'.$registroPerfil['vecesmatriculado'].'</td>
				<td>'.$registroPerfil['interes'].'</td>
				<td>'.$registroPerfil['tutorias'].'</td>
				<td>'.$registroPerfil['dificultad'].'</td>
				<td>'.$registroPerfil['calificacion'].'</td>
				<td>'.$registroPerfil['asistencia'].'</td>
				</tr>';
			}	
		}
		
		?>
		
		</table>
			<?php
				
				echo $mensaje;
				
			?>
		</section>
		</body>
		
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
</html>
		