<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Articulos extends CI_Controller{
public function _construct(){
parent::_construct();
//cargo el modelo de artículos
$this->load->model('articulos_model');
}
public function index()
{
$datos = array('titulo_web' => 'Articulos',
'articulos' => $this->articulos_model->get_articulos()
);
$this->load->view('articulos_view',$datos);
}
}
?>