<?php

include ('Animal.php');


$pez1= new Animal("rojo", 10);

$pez2= new Animal("blanco", 7);

$pez1->comer_animal($pez2);

echo "el peso del pez 1 es: ".$pez1->getPeso()." y el del pez 2 es: ".$pez2->getPeso();

echo "tenemos: " .Animal::getContador(). "animales";



?>