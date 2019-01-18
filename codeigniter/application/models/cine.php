<?php

class Cine extends CI_Model{
	
	public function _construct() {
		parent::_construct();
	}
	
	public function verTodo(){
		$query = $this->db->get('contenido');
		if($query->num_rows() > 0){
			
			return $query;
		
		}else{
			
			return FALSE;
		}	
	}
	
	public function eliminar($id){
	
		$this->db->where('id' , $id);
		$this->db->delete('contenido');
	
	}
	
	public function obtenerEnlace($id){
	
		$this->db->where('id',$id);
		$query = $this->db->get('contenido');
		
		if($query->num_rows() > 0){
			
			return $query;
			
		}else{
			
			return false;
		}
	}		
}

?>