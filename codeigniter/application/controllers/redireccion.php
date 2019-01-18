
<html lang="es">

	<head>
		<center><title>Menú Cine</title><center>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Menú Cine</h2>
			</div>
		</header>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Redireccion extends CI_Controller {
	public function _construct() {
		parent::_construct();
		$this->load->library('menu_lib');
	}
	public function index() {
		$this->load->view('administrador_view');
	}
	
}
?>
