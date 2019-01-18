<?php
class peliculas_model extends CI_Model{
public function _construct(){
parent::_construct();
}

public function add_articulo(){
$this->db->query('Insert into contenido values(null,"'.$this->input->post
('titulo').'","'.$this->input->post('duracion').'","'.$this->input->post('edad').'
","'.$this->input->post('pais').'","'.$this->input->post('genero').'","'.$this->input->post('año').'","'.$this->input->post('distribuidor').'","'.$this->input->post('descripcion').'","'.$this->input->
post('trailer').'","null")');
}
}
