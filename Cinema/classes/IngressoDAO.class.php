<?php
require_once 'Ingresso.class.php';
require_once 'Conexao.class.php';
require_once 'IDatabase.php';
require_once 'autoload.inc.php';



class IngressoDAO extends Ingresso implements IDatabase {

	function adicionar() {

        $cpf = $this->getCpfCliente();
        $tipo = $this->getTipo();
        $valor = $this->getValorIndividual();
        $qtd = $this->getQtd();
        $total = $this->getTotalVenda();
        $poltrona = $this->getPoltrona();
		$sessao = $this->getIdSessao();

		$sql = "INSERT INTO ingresso (CpfCliente, Tipo, ValorIndividual, Qtd, TotalVenda, Poltrona, idSessão) 
        VALUES ('$cpf', '$tipo', $valor, $qtd, $total, '$poltrona', $sessao)";
		
		$stmt = Conexao::prepare($sql);

		$stmt->execute();
	}

	function listar() {
		$sql = "SELECT * FROM ingresso";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}


	function buscar($id) {
		$sql = "SELECT *FROM ingresso WHERE idIngresso = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt->fetch();
	}

	function alterar($id) {

        $cpf = $this->getCpfCliente();
        $tipo = $this->getTipo();
        $valor = $this->getValorIndividual();
        $qtd = $this->getQtd();
        $total = $this->getTotalVenda();
        $poltrona = $this->getPoltrona();
		$sessao = $this->getIdSessao();

		$sql = "UPDATE ingresso 
							SET CpfCliente = '$cpf', Tipo = '$tipo', ValorIndividual = $valor, Qtd = $qtd, TotalVenda = $total, Poltrona =  '$poltrona', idSessão = $sessao
							WHERE idIngresso = $id";
		
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
	}

	function remover($id) {
		$sql = "DELETE FROM ingresso WHERE idIngresso = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

	}
	
} 