<?php
	require_once '../classes/autoload.inc.php';

	if(isset($_GET['idSessão'])){
		$id = $_GET['idSessão'];

		$sessao = new SessaoDAO();
		$sessao->remover($id);
	}
	header("Location: ../view/listar-sessoes.php");
?>