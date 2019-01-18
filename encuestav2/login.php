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
			<h2>Login</h2>
			<div>
		</header>

<?php

ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

include('conexion.php');
$consultaLogin = consultaLogin();

?>

<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Menú para acceder administrador</title>
        
    </head>
    
    <body>
    
        <form action="login.php" method="POST">
        
            <p>
              <label>Usuario:
                <input type="text" name="username">
              </label>
              <br>
			  <br>
              <label>Contraseña: 
                <input type="password" name="password">
              </label>
            </p>
            <p>
              <input type="submit" name="enviando" value="Login">
            </p>
        
        </form>
		
		
		
		<?php
		
		if(isset($_POST['enviando'])){
		
		while($result = mysqli_fetch_array($consultaLogin)){
		
			if($_POST['username']==$result[1] && $_POST['password']==$result[2]){
				$valido=1;
				break;
			}else{
				$valido=0;
			}
		}
		
		if($valido == 1){
				echo("La clave y contraseña introducidas son correctas");
				header("Location: submenu.php");
				
			}else{
				echo("La clave y contraseña introducidas no son correctas");
			}
			
		}

		 ?>
		
		<body>
        <?php
        $menu =  json_decode('
        [{"nombre":"Volver al menú principal","url":"menu.php","link":"/menu_inteligente/codeigniter.php"}]');  
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
    
    </body>
    
</html>