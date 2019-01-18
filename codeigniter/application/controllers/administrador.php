<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Administrador extends CI_Controller {
	public function _construct() {
		parent::_construct();
		$this->load->library('administrador_lib');
	}
	public function insertar() {
		$this->load->view('insertar_view');
	}
	public function cartelera() {
		$this->load->view('modificar_view');
	}
	public function horarios() {
		$this->load->view('eliminar_view');
	}
	
	public function validar() {
		if($this->input->post('submit')){
			//reglas de validacion
			$this->form_validation->set_rules('titulo','Título del artículo','required|max_length[100]');
			$this->form_validation->set_rules('duracion','Duración de la pelicula','required|max_length[100]');
			$this->form_validation->set_rules('edad','Edad','required|max_length[100]');
			$this->form_validation->set_rules('pais','País','required|max_length[100]');
			$this->form_validation->set_rules('genero','Genero','required|max_length[100]');
			$this->form_validation->set_rules('año','Año','required|max_length[100]');
			$this->form_validation->set_rules('distribuidor','Distribuidor','required|max_length[100]');
			$this->form_validation->set_rules('descripcion','Descripción de la película','required|max_length[200]');
			$this->form_validation->set_rules('trailer','Trailer de la película','required|max_length[200]');
			
			//mensaje de error de validacion
			$this->form_validation->set_message('required','El campo %s es
			obligatorio.');
			$this->form_validation->set_message('max_length','El campo %s tiene como
			máximo %s caracteres.');
		if ($this->form_validation->run() ==FALSE){
		$this->insertar();
		}else{
			$data = array('titulo' => 'Articulo' ,
			'titulo_pelicula' => $this->input->post('titulo') ,
			'duracion' => $this->input->post('duracion') ,
			'edad' => $this->input->post('edad'),
			'pais' => $this->input->post('pais'),
			'genero' => $this->input->post('genero'),
			'año' => $this->input->post('año'),
			'distribuidor' => $this->input->post('distribuidor'),
			'descripcion' => $this->input->post('descripcion'),
			'trailer' => $this->input->post('trailer'),
			);
		$this->peliculas_model->add_articulo();
		$this->load->view('una_pelicula_view',$data);
			}
		}
	}
	
	
	public function ver(){
		$data = array(
			'enlaces' => $this->cine->verTodo(),
			'dump' => 0);
		$this->load->view('ver',$data);
		
		
	}
		
	public function modificar(){
		
		$id = $this->uri->segment(3);
		$obtenerEnlace = $this->cine->obtenerEnlace($id);
		if($obtenerEnlace != FALSE){
		 foreach($obtenerEnlace->result() as $row){
		
			$titulo = $row->titulo;
			$duracion = $row->duracion;
			$edad = $row->edad;
			$pais = $row->pais;
			$genero = $row->genero;
			$año = $row->año;
			$distribuidor = $row->distribuidor;
			$descripcion = $row->descripcion;
			$trailer = $row->trailer;
		
		}
			$data = array(
				'id' => $id,
				'titulo' => $titulo,
				'duracion' => $duracion,
				'edad' => $edad,
				'pais' => $pais,
				'genero' => $genero,
				'año' => $año,
				'distribuidor' => $distribuidor,
				'descripcion' => $descripcion,
				'trailer' => $trailer
				);

		}else{
			
			return FALSE;
		}
		
		
		/*$result = $this->db->get('contenido');
		$data = array('result'=>$result);*/
		$this->load->view('modificar_view',$data);
	
	}
	
	public function eliminar(){
		
		$id = $this->uri->segment(3);
		$this->cine->eliminar($id);
		redirect('administrador/ver');
		
	
	}
	
	public function modificarEnlace(){
		
		$id = $this->uri->segment(3);
		$data = array(
			'titulo' => $this->input->post('titulo', true),
			'duracion' => $this->input->post('duracion',true),
			'edad' => $this->input->post('edad',true),
			'pais' => $this->input->post('edad',true),
			'genero' => $this->input->post('genero',true),
			'año' => $this->input->post('año',true),
			'distribuidor' => $this->input->post('distribuidor',true),
			'descripcion' => $this->input->post('descripcion',true),
			'trailer' => $this->input->post('trailer',true)
			);
			
			$this->cine->modificarEnlace($id,$data);
			redirect('administrador/ver');
		
	}
	
	
	
	
}
?>
