<?php
//src/AppBundle/Controller/AnticulosController.php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use SymFony\Component\HttpFoundation\Response;

use AppBundle\Entity\Articulos;

class ArticulosController extends Controller
{
	/**
	* @Route("/articulos", name="mostarArticulos")
	*/
	public function indexAction(){
		$doct = $this->getDoctrine()->getManager();
		$repository = $doct->getRepository('AppBundle:Articulos');
		$articulos = $repository->findAll();
		
		return $this->render ('AppBundle:Articulos:mostrarTodos.html.twig', 
		array('articulos' => $articulos));
		
	}
	
	/**
	* Route("/articulos/{id}", name="mostrar_un_articulo")
    */
	public function mostrarArticulos($id){
		$doct = $this->getDoctrine()->getManager();
		$repository = $doct->getRepository('AppBundle:Articulos');
		$articulos = $repository->find($id);
		
		return $this->render('AppBundle:Articulos:unArticulo.html.twig',
		array('art' => $articulo));
	}
}