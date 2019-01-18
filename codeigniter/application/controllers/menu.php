<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Menu extends CI_Controller {
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
	public function horarios($par2) {	
		$sala = $this->db->get('sala');
		$result = $this->db->get('contenido');
		$cin = $this->db->get('cine');
		$prov = $this->db->get('provincia');
		$ciud = $this->db->get('ciudad');
		$data = array('consulta'=>$result,'sala'=>$sala,'cin'=>$cin,'prov'=>$prov,'ciud'=>$ciud,'par2'=>$par2);
		$this->load->view('horarios_view',$data);
	}
	public function administrador() {
		$this->load->view('login_view');
	}
	public function contenido($par1) {
		$result = $this->db->get('contenido');
		$cons = $this->db->get('pais');
		$gen = $this->db->get('genero');
		$dist = $this->db->get('distribuidor');
		$data = array('consulta'=>$result,'par1'=>$par1,'const'=>$cons,'gen'=>$gen,'dist'=>$dist);
		$this->load->view('contenido_view',$data);

	}
	public function seleccionarhorario(){
		$this->load->view('selec_pel_hor_view');
	
	}
	
}
?>
