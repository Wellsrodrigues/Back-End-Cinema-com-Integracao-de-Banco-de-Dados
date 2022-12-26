<?php
class Ingresso{
    private $idIngresso;
	private $cpfCliente;
	private $tipo;
	private $valorIndividual;
	private $qtd;
	private $totalVenda;
	private $poltrona;
	private $idSessao;
	private $idRelatório;
     

	

	/**
	 * @return mixed
	 */
	public function getIdIngresso() {
		return $this->idIngresso;
	}
	
	/**
	 * @return mixed
	 */
	public function getCpfCliente() {
		return $this->cpfCliente;
	}
	
	/**
	 * @return mixed
	 */
	public function getTipo() {
		return $this->tipo;
	}
	
	/**
	 * @return mixed
	 */
	public function getValorIndividual() {
		return $this->valorIndividual;
	}
	
	/**
	 * @return mixed
	 */
	public function getQtd() {
		return $this->qtd;
	}
	
	/**
	 * @return mixed
	 */
	public function getTotalVenda() {
		return $this->totalVenda;
	}
	
	/**
	 * @return mixed
	 */
	public function getPoltrona() {
		return $this->poltrona;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdSessao() {
		return $this->idSessao;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdRelatório() {
		return $this->idRelatório;
	}

	/**
	 * @param mixed $idIngresso 
	 * @return self
	 */
	public function setIdIngresso($idIngresso): self {
		$this->idIngresso = $idIngresso;
		return $this;
	}
	
	/**
	 * @param mixed $cpfCliente 
	 * @return self
	 */
	public function setCpfCliente($cpfCliente): self {
		$this->cpfCliente = $cpfCliente;
		return $this;
	}
	
	/**
	 * @param mixed $tipo 
	 * @return self
	 */
	public function setTipo($tipo): self {
		$this->tipo = $tipo;
		return $this;
	}
	
	/**
	 * @param mixed $valorIndividual 
	 * @return self
	 */
	public function setValorIndividual($valorIndividual): self {
		$this->valorIndividual = $valorIndividual;
		return $this;
	}
	
	/**
	 * @param mixed $qtd 
	 * @return self
	 */
	public function setQtd($qtd): self {
		$this->qtd = $qtd;
		return $this;
	}
	
	/**
	 * @param mixed $totalVenda 
	 * @return self
	 */
	public function setTotalVenda($totalVenda): self {
		$this->totalVenda = $totalVenda;
		return $this;
	}
	
	/**
	 * @param mixed $poltrona 
	 * @return self
	 */
	public function setPoltrona($poltrona): self {
		$this->poltrona = $poltrona;
		return $this;
	}
	
	/**
	 * @param mixed $idSessao 
	 * @return self
	 */
	public function setIdSessao($idSessao): self {
		$this->idSessao = $idSessao;
		return $this;
	}
	
	/**
	 * @param mixed $idRelatório 
	 * @return self
	 */
	public function setIdRelatório($idRelatório): self {
		$this->idRelatório = $idRelatório;
		return $this;
	}
}
?>