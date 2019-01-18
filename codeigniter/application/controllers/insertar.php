<?php

error_reporting(E_ALL ^ E_DEPRECATED);
class Administrador extends CI_Controller {
	public function _construct() {
		parent::_construct();
		$this->load->library('menu_lib');
	}
	public function index() {
		$this->load->view('menu_view');
	}
	public function cartelera() {
		$this->load->view('cartelera_view');
	}
	public function horarios() {
		$this->load->view('horarios_view');
	}
	public function administrador() {
		$this->load->view('administrador_view');
	}
	
	public function validar() {
echo ("hola");
$this->form_validation->set_rules('titulo','Título del
artículo','required|max_length[100]');
$this->form_validation->set_rules('descripcion','Descripción del
artículo','required|max_length[200]');
$this->form_validation->set_rules('cuerpo','Cuerpo del
artículo','required');

$this->form_validation->set_message('required','El campo %s es
obligatorio.');

$this->form_validation->set_message('max_length','El campo %s tiene como
máximo %s caracteres.');
if ($this->form_validation->run() ==FALSE){
$this->index();
}else{
$data = array('titulo' => 'Articulo' ,
'titulo_articulo' => $this->input->post('titulo') ,
'descripcion' => $this->input->post('descripcion') ,
'cuerpo' => $this->input->post('cuerpo')
);
$this->load->view('un_articulo_view',$data);
}
}
}
?>