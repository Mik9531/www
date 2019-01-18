<?php

	class Administrador_lib{
		
		public function __construct(){
			
			$this->CI =& get_instance();
			
		}
		
		public function menu_navigation(){
			
			$menu = array(
				array('text' => 'Insertar película' , 'url' => 'administrador/insertar'),
				array('text' => 'Modificar o Eliminar', 'url' => 'administrador/ver'),
				array('text' => 'Menu Principal', 'url' => 'menu/index')
			);
			
		
			$html = '<ul>';
			foreach($menu as $data){
			
				$html .= '<h1><ul class=""><br><br>';
				$html .= anchor($data['url'], $data['text']);
				$html .= '</ul></h1>';

			}
			$html .= '</ul>';
			return $html;
		}
		
		public function menu_back(){
			
			$menu = array(
				array('text' => 'Menu Principal' , 'url' => 'administrador/index')
			);
			
		
			$html = '<ul>';
			foreach($menu as $data){
			
				$html .= '<li class="">';
				$html .= anchor($data['url'], $data['text']);
				$html .= '</li>';

			}
			$html .= '</ul>';
			return $html;
		}
		
		
	}
	
?>