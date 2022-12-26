<?php
require_once 'Funcionario.class.php';
require_once 'Conexao.class.php';
require_once 'IDatabase.php';
require_once 'autoload.inc.php';



class FuncionarioDAO extends Funcionario implements IDatabase {

	function adicionar() {

		$nome = $this->getNome();
		$cpf = $this->getCpf();
		$cargo = $this->getCargo();
		$salario = $this->getSalario();
		$endereco = $this->getEndereco();
		$telefone = $this->getTelefone();
		$idCinema = $this->getIdCinema();

		$sql = "INSERT INTO funcionário (Nome, CPF, Cargo, Salário, Endereço, Telefone, idCinema) 
        VALUES ('$nome', '$cpf', '$cargo', $salario, '$endereco', '$telefone', $idCinema)";
		
		$stmt = Conexao::prepare($sql);

		$stmt->execute();
	}

	function listar() {
		$sql = "SELECT * FROM funcionário";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}


	function buscar($id) {
		$sql = "SELECT *FROM funcionário WHERE idFuncionário = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt->fetch();
	}

	function alterar($id) {

		$nome = $this->getNome();
		$cpf = $this->getCpf();
		$cargo = $this->getCargo();
		$salario = $this->getSalario();
		$endereco = $this->getEndereco();
		$telefone = $this->getTelefone();
		$idCinema = $this->getIdCinema();

		$sql = "UPDATE funcionário 
							SET Nome = '$nome', CPF = '$cpf', Cargo = '$cargo', Salário = $salario, Endereço = '$endereco', Telefone =  '$telefone', idCinema = $idCinema
							WHERE idFuncionário = $id";
		
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
	}

	function remover($id) {
		$sql = "DELETE FROM funcionário WHERE idFuncionário = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

	}
	
} 