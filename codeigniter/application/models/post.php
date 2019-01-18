<?php

class Post extends CI_Model{
	public function getPost(){
		return $this->db->get('contenido');
	}
	
	public function getById($id=''){
		
		$this->db->query("SELECT * FROM contenido WHERE contenido = '".$id."' LIMIT 1");
		return $result->row();
	}
	
	public function getPais(){
		return $this->db->get('pais');
	}
	
	public function getByPais(){
		
		$this->db->query("SELECT * FROM pais");
		return $cons->row();
	}
		
}

?>