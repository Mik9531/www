<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Usuarios extends CI_Controller {
public function _construct() {
parent::_construct();

$this->load->model('post');
}
public function index() {
$this->load->view('usuarios_view');
}
public function contenido($par1) {
$result = $this->db->get('contenido');
$cons = $this->db->get('pais');
$gen = $this->db->get('genero');
$dist = $this->db->get('distribuidor');
$data = array('consulta'=>$result,'par1'=>$par1,'const'=>$cons,'gen'=>$gen,'dist'=>$dist);
$this->load->view('contenido_view',$data);


}
public function registro() {
$this->load->view('registro_view');
}
}
?>