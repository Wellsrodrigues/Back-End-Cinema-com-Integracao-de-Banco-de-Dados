<?php
	require_once '../classes/autoload.inc.php';

	if(isset($_GET['idIngresso'])){
		$id = $_GET['idIngresso'];

		$pass = new IngressoDAO();
		$pass->remover($id);
	}
	header("Location: ../view/listar-ingressos.php");
?>