<?php
require_once 'Relatorio.class.php';
require_once 'Conexao.class.php';
require_once 'IDatabase.php';
require_once 'autoload.inc.php';



class RelatorioDAO extends Relatorio implements IDatabase {

	function adicionar() {

        $dataVendas = $this->getDataRelatorio();
        $qtd = $this->getQtdIngressos();
        $receita = $this->getReceita();
        $idIngresso = $this->getIdIngresso();

		$sql = "INSERT INTO relatório (dataVendas, QtdeIngressos, Receita, idIngresso) 
        VALUES ('$dataVendas', $qtd, $receita, $idIngresso)";
		
		$stmt = Conexao::prepare($sql);

		$stmt->execute();
	}

	function listar() {
		$sql = "SELECT * FROM relatório";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}


	function buscar($id) {
		$sql = "SELECT *FROM relatório WHERE idRelatório = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt->fetch();
	}

	function alterar($id) {

        $dataVendas = $this->getDataRelatorio();
        $qtd = $this->getQtdIngressos();
        $receita = $this->getReceita();
        $idIngresso = $this->getIdIngresso();

		$sql = "UPDATE relatório 
							SET dataVendas = '$dataVendas', QtdeIngressos = $qtd, Receita = $receita, idIngresso = $idIngresso
							WHERE idRelatório = $id";
		
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
	}

	function remover($id) {
		$sql = "DELETE FROM relatório WHERE idRelatório = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

	}
	
} 