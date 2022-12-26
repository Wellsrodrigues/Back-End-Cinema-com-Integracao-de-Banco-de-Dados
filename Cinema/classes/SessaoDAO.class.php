<?php
require_once 'Sessao.class.php';
require_once 'Conexao.class.php';
require_once 'IDatabase.php';
require_once 'autoload.inc.php';



class SessaoDAO extends Sessao implements IDatabase {

	function adicionar() {

		$dataSessao = $this->getDataSessao();
		$horario = $this->getHorario();
		$tipo = $this->getTipo();
		$sala = $this->getSala();
		$qtdLugares = $this->getQtdLugares();
		$idFilme = $this->getIdFilme();

		$sql = "INSERT INTO sessão (DataSessao, Horário, Tipo, Sala, QtdeLugares, idFilme) 
        VALUES ('$dataSessao', '$horario', '$tipo', '$sala', $qtdLugares, $idFilme)";
		
		$stmt = Conexao::prepare($sql);

		$stmt->execute();
	}

	function listar() {
		$sql = "SELECT * FROM sessão";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}


	function buscar($id) {
		$sql = "SELECT *FROM sessão WHERE idSessão = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt->fetch();
	}

	function alterar($id) {

		$dataSessao = $this->getDataSessao();
		$horario = $this->getHorario();
		$tipo = $this->getTipo();
		$sala = $this->getSala();
		$qtdLugares = $this->getQtdLugares();
		$idFilme = $this->getIdFilme();

		$sql = "UPDATE sessão 
							SET dataSessao = '$dataSessao', Horário = '$horario', Tipo = '$tipo', Sala ='$sala', QtdeLugares = $qtdLugares, idFilme =  $idFilme 
							WHERE idSessão = $id";
		
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
	}

	function remover($id) {
		$sql = "DELETE FROM sessão WHERE idSessão = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

	}
	
} 