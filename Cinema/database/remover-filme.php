<?php
	require_once '../classes/autoload.inc.php';

	if(isset($_GET['idFilme'])){
		$id = $_GET['idFilme'];

		$filme = new FilmeDAO();
		$filme->remover($id);
	}
	header("Location: ../view/listar-filmes.php");
?>