<html>
<head>
	
		<body style = "background: url(img/background1.jpg); background-size: 100%;">
		</body>
		<title>Encuesta</title>
		<meta charset="utf-8">
		<meta name="viewport" content="with=device-width, initial-scale=1, maximum-scale=1"/>
		
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
		
	
   
   <body>
		<header>
			<div class="alert alert-info">
			<h2>Perfil Alumno</h2>
			<div>
		</header>


<?php
include ('conexion.php'); //incluimos el codigo de conexion.php
$consultaPreg = ConsultaPreguntas();

$fila = mysqli_fetch_array($consultaPreg);
			 
?>

<?php
	 
	if(isset($_POST['insertar']))
	{   
		
		
		
		mysqli_query($conexion,"INSERT INTO perfilestudiante(edad,sexo,cursoalto,cursobajo,vecesmatriculado,vecesexaminado,interes,tutorias,dificultad,calificacion,asistencia)
											VALUES('$_POST[edad]','$_POST[sexo]','$_POST[cursoalto]','$_POST[cursobajo]','$_POST[vecesmatriculado]','$_POST[vecesexaminado]','$_POST[interes]','$_POST[tutorias]','$_POST[dificultad]','$_POST[calificacion]','$_POST[asistencia]')");
		
		mysqli_query($conexion,"INSERT INTO respuestas(respuesta1,respuesta2,respuesta3,respuesta4,respuesta5,respuesta6,respuesta7,respuesta8,respuesta9,respuesta10,respuesta11,respuesta12,respuesta13,respuesta14,respuesta15,respuesta16,respuesta17,respuesta18,respuesta19,respuesta20,respuesta21,respuesta22,respuesta23)
											VALUES('$_POST[preg1]','$_POST[preg2]','$_POST[preg3]','$_POST[preg4]','$_POST[preg5]','$_POST[preg6]','$_POST[preg7]','$_POST[preg8]','$_POST[preg9]','$_POST[preg10]','$_POST[preg11]','$_POST[preg12]','$_POST[preg13]','$_POST[preg14]','$_POST[preg15]','$_POST[preg16]','$_POST[preg17]','$_POST[preg18]','$_POST[preg19]','$_POST[preg20]','$_POST[preg21]','$_POST[preg22]','$_POST[preg23]')");
		echo("Tu encuesta ha sido enviada con exito");
?>
		
		
		
		<body>
        <?php
        $menu =  json_decode('
        [{"nombre":"Recargar","url":"index.php","link":"/menu_inteligente/index.php"},
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
		</body>
		
		
<?php
		
	}else{
		
	
?>

<head>

	<title> ENCUESTA DE OPINIÓN DE LOS/AS ESTUDIANTES SOBRE LA LABOR DOCENTE DEL PROFESORADO </title>
</head>


<!-- Formulario perfil alumno-->
<form action="index.php" method ="POST">

 
<P><LABEL>Edad(años) </LABEL> <!-- <Label> representa una etiqueta asociada a un control del formulario -->
<SELECT NAME="edad">
   <OPTION value="<19"> <19 </option>
   <OPTION value="19-21">19-21</option>
   <OPTION value="22-23">22-23</option>
   <OPTION value="24-25">24-25</option>
   <OPTION value=">25"> >25</option>
</SELECT></P>

<P><LABEL> Sexo </LABEL>
<SELECT NAME="sexo">
   <OPTION value="Hombre">Hombre</option>
   <OPTION value="Mujer">Mujer</option>
</SELECT></P>

<P><LABEL>Curso mas alto en el que estas matriculado </LABEL>
<SELECT NAME="cursoalto">
   <OPTION value="1">1º</option>
   <OPTION value="2">2º</option>
   <OPTION value="3">3º</option>
   <OPTION value="4">4º</option>
   <OPTION value="5">5º</option>
   <OPTION value="6">6º</option>
</SELECT></P>

<P><LABEL>Curso mas bajo en el que estas matriculado </LABEL>
<SELECT NAME="cursobajo">
   <OPTION value="1">1º</option>
   <OPTION value="2">2º</option>
   <OPTION value="3">3º</option>
   <OPTION value="4">4º</option>
   <OPTION value="5">5º</option>
   <OPTION value="6">6º</option>
</SELECT></P>

<P><LABEL>Veces que te has matriculado en esta asignatura</LABEL>
<SELECT NAME="vecesmatriculado">
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value=">3">>3</option>
</SELECT></P>

<P><LABEL>Veces que te has examinado en esta asignatura</LABEL> 
<SELECT NAME="vecesexaminado">
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value=">3">>3</option>
</SELECT></P>

<P><LABEL>La asignatura me interesa</LABEL>
<SELECT NAME="interes">
   <OPTION value="Nada">Nada</option>
   <OPTION value="Algo">Algo</option>
   <OPTION value="Bastante">Bastante</option>
   <OPTION value="Mucho">Mucho</option>
</SELECT></P>

<P><LABEL>Hago uso de las tutorias</LABEL>
<SELECT NAME="tutorias">
   <OPTION value="Nada">Nada</option>
   <OPTION value="Algo">Algo</option>
   <OPTION value="Bastante">Bastante</option>
   <OPTION value="Mucho">Mucho</option>
</SELECT></P>

<P><LABEL>Dificultad de esta asignatura</LABEL>
<SELECT NAME="dificultad">
   <OPTION value="Baja">Baja</option>
   <OPTION value="Media">Media</option>
   <OPTION value="Alta">Alta</option>
   <OPTION value="Muy Alta">Muy Alta</option>
</SELECT></P>

<P><LABEL>Calificacion esperada</LABEL>
<SELECT NAME="calificacion">
   <OPTION value="N.P.">N.P.</option>
   <OPTION value="Sus.">Sus.</option>
   <OPTION value="Apro.">Apro.</option>
   <OPTION value="Not.">Not.</option>
   <OPTION value="Sobr.">Sobr.</option>
   <OPTION value="Mat. Hon.">Mat. Hon.</option>
</SELECT></P>

<P><LABEL>Asistencia clase(% de horas lextivas)</LABEL>
<SELECT NAME="asistencia">
   <OPTION value="Menos 50%">Menos 50%</option>
   <OPTION value="Entre 50% y 80%">Entre 50% y 80%</option>
   <OPTION value="Mas de 80%">Mas de 80%</option>
</SELECT></P>


<!-- Preguntas -->

  <body>
		<header>
			<div class="alert alert-info">
			<h2>Preguntas Asignatura</h2>
			<div>
		</header>

 
<P><LABEL><?php echo $fila['pregunta1']; ?></LABEL>
<SELECT NAME="preg1">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta2']; ?> </LABEL>
<SELECT NAME="preg2">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta3']; ?> </LABEL>
<SELECT NAME="preg3">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta4']; ?></LABEL>
<SELECT NAME="preg4">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta5']; ?></LABEL>
<SELECT NAME="preg5">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta6']; ?></LABEL>
<SELECT NAME="preg6">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta7']; ?></LABEL>
<SELECT NAME="preg7">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta8']; ?></LABEL>
<SELECT NAME="preg8">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta9']; ?></LABEL>
<SELECT NAME="preg9">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta10']; ?></LABEL>
<SELECT NAME="preg10">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta11']; ?> </LABEL>
<SELECT NAME="preg11">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta12']; ?> </LABEL>
<SELECT NAME="preg12">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta13']; ?> </LABEL>
<SELECT NAME="preg13">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta14']; ?> </LABEL>
<SELECT NAME="preg14">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta15']; ?> </LABEL>
<SELECT NAME="preg15">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta16']; ?> </LABEL>
<SELECT NAME="preg16">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta17']; ?> </LABEL>
<SELECT NAME="preg17">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta18']; ?> </LABEL>
<SELECT NAME="preg18">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta19']; ?> </LABEL>
<SELECT NAME="preg19">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta20']; ?> </LABEL>
<SELECT NAME="preg20">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta21']; ?> </LABEL>
<SELECT NAME="preg21">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta22']; ?> </LABEL>
<SELECT NAME="preg22">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<P><LABEL><?php echo $fila['pregunta23']; ?> </LABEL>
<SELECT NAME="preg23">
   <OPTION value="NS">NS</option>
   <OPTION value="1">1</option>
   <OPTION value="2">2</option>
   <OPTION value="3">3</option>
   <OPTION value="4">4</option>
   <OPTION value="5">5</option>
</SELECT></P>

<input type="submit" name="insertar" value="Enviar">

</form>


</body>
</html>

<?php
	}
?>