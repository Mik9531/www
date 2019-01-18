<?php

	class Menu_lib{
		
		public function __construct(){
			
			$this->CI =& get_instance();
			
		}
		
		public function menu_navigation(){
			
			$menu = array(
				array('text' => 'Menu Principal' , 'url' => 'menu/index'),
				array('text' => 'Cartelera' , 'url' => 'menu/cartelera'),
				array('text' => 'Horarios', 'url' => 'menu/seleccionarhorario'),
				array('text' => 'Administrador', 'url' => 'menu/administrador')
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
				array('text' => 'Menu Principal' , 'url' => 'menu/index')
			);
			
		
			$html = '<ul>';
			foreach($menu as $data){
			
				$html .= '<ul class="">';
				$html .= anchor($data['url'], $data['text']);
				$html .= '</ul>';

			}
			$html .= '</ul>';
			return $html;
		}
		
		public function menu_backtoback(){
			
			$menu = array(
				array('text' => 'Volver atras' , 'url' => 'menu/seleccionarhorario')
			);
			
		
			$html = '<ul>';
			foreach($menu as $data){
			
				$html .= '<ul class="">';
				$html .= anchor($data['url'], $data['text']);
				$html .= '</ul>';

			}
			$html .= '</ul>';
			return $html;
		}
		
		public function menu_backtocartelera(){
			
			$menu = array(
				array('text' => 'Volver atras' , 'url' => 'menu/cartelera')
			);
			
		
			$html = '<ul>';
			foreach($menu as $data){
			
				$html .= '<ul class="">';
				$html .= anchor($data['url'], $data['text']);
				$html .= '</ul>';

			}
			$html .= '</ul>';
			return $html;
		}
		
		
	}
	
?>