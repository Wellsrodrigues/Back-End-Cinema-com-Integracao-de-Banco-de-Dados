<?php
class Funcionario{
    private $idFuncionario;
    private $nome;
    private $cpf;
    private $cargo;
    private $salario;
    private $endereco;
    private $telefone;
	private $idCinema;
    

	/**
	 * @return mixed
	 */
	public function getIdFuncionario() {
		return $this->idFuncionario;
	}
	
	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @return mixed
	 */
	public function getCpf() {
		return $this->cpf;
	}
	
	/**
	 * @return mixed
	 */
	public function getCargo() {
		return $this->cargo;
	}
	
	/**
	 * @return mixed
	 */
	public function getSalario() {
		return $this->salario;
	}
	
	/**
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}
	
	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}

	/**
	 * @param mixed $idFuncionario 
	 * @return self
	 */
	public function setIdFuncionario($idFuncionario): self {
		$this->idFuncionario = $idFuncionario;
		return $this;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @param mixed $cpf 
	 * @return self
	 */
	public function setCpf($cpf): self {
		$this->cpf = $cpf;
		return $this;
	}
	
	/**
	 * @param mixed $cargo 
	 * @return self
	 */
	public function setCargo($cargo): self {
		$this->cargo = $cargo;
		return $this;
	}
	
	/**
	 * @param mixed $salario 
	 * @return self
	 */
	public function setSalario($salario): self {
		$this->salario = $salario;
		return $this;
	}
	
	/**
	 * @param mixed $endereco 
	 * @return self
	 */
	public function setEndereco($endereco): self {
		$this->endereco = $endereco;
		return $this;
	}
	
	/**
	 * @param mixed $telefone 
	 * @return self
	 */
	public function setTelefone($telefone): self {
		$this->telefone = $telefone;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdCinema() {
		return $this->idCinema;
	}
	
	/**
	 * @param mixed $idCinema 
	 * @return self
	 */
	public function setIdCinema($idCinema): self {
		$this->idCinema = $idCinema;
		return $this;
	}
}
?>