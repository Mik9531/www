<?php
class Usuarios_model extends CI_Model{
public function _construct(){
parent::_construct();
}
//Comprueba si el usuario existe o no
public function verify_user($user){
$conexion =mysqli_connect("localhost", "root", "")
or die;
mysqli_select_db($conexion, "cinegestion")
or die;
$consulta=mysqli_query($conexion,"select * from usuarios where usuario='".$user."'");
$filas= mysqli_num_rows($consulta);
if($filas == 0){ //el usuario no existe
return false;
}else{ //el usuario existe
return true;
}
}
//añade un usuario
public function add_usuario(){
$this->db->insert('usuarios', array(
//el true es para que limpie este campo de inyecciones xss
'nombre'=>$this->input->post('nombre',TRUE),
'correo'=>$this->input->post('correo',TRUE),
'usuario'=>$this->input->post('usuario',TRUE),
'pass'=>$this->input->post('pass',TRUE),
'codigo'=>'123456',
'estado'=>'0'
));
}
//verificar sesion
public function verify_sesion(){
$consulta = $this->db->get_where('usuarios',array(
//el true es para que limpie este campo de inyecciones xss
'usuario'=>$this->input->post('user',TRUE),
'pass'=>$this->input->post('pass',TRUE)
));
if($consulta->num_rows() ==1){
return true;
}else{

return false;

}
}
}