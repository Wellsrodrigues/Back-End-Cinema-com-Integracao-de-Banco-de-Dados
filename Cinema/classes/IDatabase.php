<?php
interface IDatabase {
	function adicionar();

	function listar();

	function buscar($id);

	function alterar($id);

	function remover($id);
}
?>