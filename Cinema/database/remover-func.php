<?php
	require_once '../classes/autoload.inc.php';

	if(isset($_GET['idFuncionário'])){
		$id = $_GET['idFuncionário'];

		$func = new FuncionarioDAO();
		$func->remover($id);
	}
	header("Location: ../view/listar-func.php");
?>