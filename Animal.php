<?php 

class Animal{
	
	private $color;
	private $peso;
	private static $contador=0;
	
	public function __construct($color,$peso){
		$this->color=$color;
		$this->peso=$peso;
		self::$contador=self::$contador+1;
	}
	public function getColor(){
		return $this->color;
	}
	
	public function getPeso(){
		return $this->peso;
	}

	public static function getContador(){
		
		return self::$contador;
		
	}
	
	public function comer_animal(Animal $animal_comido){
		$this->peso=$this->peso+$animal_comido->peso;
		$animal_comido->peso=0;
	}
	
}

?>
	