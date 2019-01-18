<?php
//src/AppBundle/Controller/UsuariosController.php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Respones;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsuariosController extends Controller
{
	
	/**
	* @Route("/registro", name="registro_usuario")
	*/
	public function registerAction ()
						
	{
		// 1) build the form 
		$user = new User();
		$form = $this->createForm(UserType::class, $user);
		
		// 2) handle the submit (will only happen on POST)
		
		if ($form->isSubmitted() && $form->isValid()) {
			
			//3) Encode the passwordEncoder
			$password = $this->get('security.password_encoder')
							->encodePassword($user, $user->getPlainPassword());
			$user->setPassword($password);
			
			// 4) save the User!
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			
			return $this->render('AppBundle:Usuarios:userRegistrado.html.twig',	
							array('user' => $user));
		}
		
		return $this->render('AppBundle:Usuarios:registro.html.twig', 
						array('form' => $form->createView()) );
	}
	
	/**
	* @Route ("/usuarios", name="usuarios")
	*/
	public function usuariosAction()
	{
		return $this->render('AppBundle:Usuarios:login.html.twig', array(
											'last_username' => null,
											'error' => null,
											));
	}
	
	public function loginAction(Request $request)
	{
		$authenticationUtils = $this ->get('security.authentication_Utils');
		
		// get the login error if ther is one
		$error = $authenticationUtils->getLastAuthenticationError();
		
		//last username entered by the user
		$lastUsername = $authenticationUtils->getLastUsername();
		
		return $this->render('AppBundle:Usuarios:login.html.twig');
		
						
}
}