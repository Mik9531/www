<?php

class Pez extends Animal{
	private vive_en_el_mar;
	
	if (this->vive_en_el_mar)
		return "vive_en_el_mar";
	else
		return "no_vive_en_el_mar";
	
	
	public function nadar(){
		
		echo "nado";
		
	}
	
}

?>