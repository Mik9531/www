
<?php
// Si los datos son correctos, procesar formulario
   //if (isset($_POST['submit'])) //isset la variable enviar y error es falso entonces...
   //{

   // Insertar los datos en la Base de Datos
      $conexion = mysqli_connect ("localhost", "root", "","formularioprofesorado");
         
		 if(!$conexion){
			 echo 'Error al conectar a la base de datos';
		 }
		 else{
			 //echo 'Conectado a la base de datos';
		 }
		 
		 function ConsultaPreguntas(){
			 global $conexion;
			 $sql = 'SELECT * FROM preguntas'; //consulta la cual nos devolvera las preguntas
			 return $conexion->query($sql);
			 
		 }
		 
		 function ConsultaPerf(){
			 global $conexion;
			 $sql = 'SELECT * FROM perfilestudiante'; //consulta la cual nos devolvera las preguntas
			 return $conexion->query($sql);
			 
		 }
		 
		 function ConsultaMenu(){
			 global $conexion;
			 $sql = 'SELECT * FROM menu'; //consulta la cual nos devolvera las preguntas
			 return $conexion->query($sql);
			 
		 }
		 
		 function ConsultaSubmenu(){
			 global $conexion;
			 $sql = 'SELECT * FROM submenu'; //consulta la cual nos devolvera las preguntas
			 return $conexion->query($sql);
			 
		 }
		 
		 function ConsultaLogin(){
			 global $conexion;
			 $sql = "SELECT * FROM login"; //consulta la cual nos devolvera las preguntas
			 return $conexion->query($sql);
			 
		 }
   //}
?>