<?php
require_once 'Cinema.class.php';
require_once 'Conexao.class.php';
require_once 'IDatabase.php';
require_once 'autoload.inc.php';



class CinemaDAO extends Cinema implements IDatabase {

	function adicionar() {

        $nome = $this->getNome();
        $cnpj = $this->getCnpj();
        $estado = $this->getEstado();
        $cidade = $this->getCidade();
        $local = $this->getEndereco();
		

		$sql = "INSERT INTO cinema (Nome, CNPJ, Estado, Cidade, Endereco) 
        VALUES ('$nome', '$cnpj', '$estado', $cidade, '$local')";
		
		$stmt = Conexao::prepare($sql);

		$stmt->execute();
	}

	function listar() {
		$sql = "SELECT * FROM Cinema";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}


	function buscar($id) {
		$sql = "SELECT *FROM Cinema WHERE idCinema = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt->fetch();
	}

	function alterar($id) {

        $nome = $this->getNome();
        $cnpj = $this->getCnpj();
        $estado = $this->getEstado();
        $cidade = $this->getCidade();
        $local = $this->getEndereco();

		$sql = "UPDATE Cinema 
							SET Nome = '$nome', CNPJ = '$cnpj', Estado = '$estado', Cidade = $cidade, Endereco = '$local'
							WHERE idCinema = $id";
		
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
	}

	function remover($id) {
		$sql = "DELETE FROM cinema WHERE idCinema = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

	}
	
} 