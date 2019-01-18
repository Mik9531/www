<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Redireccion extends CI_Controller {
	public function _construct() {
		parent::_construct();
		$this->load->library('menu_lib');
	}
	public function index() {
		$this->load->view('administrador_view');
	}
	
}
?>
