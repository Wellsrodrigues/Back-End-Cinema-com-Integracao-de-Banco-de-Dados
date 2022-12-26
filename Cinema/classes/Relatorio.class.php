<?php
class Relatorio{
    private $idRelatorio;
	private $dataRelatorio;
	private $qtdIngressos;
	private $receita;
	private $idIngresso;

	

	/**
	 * @return mixed
	 */
	public function getIdRelatorio() {
		return $this->idRelatorio;
	}
	
	/**
	 * @return mixed
	 */
	public function getDataRelatorio() {
		return $this->dataRelatorio;
	}
	
	/**
	 * @return mixed
	 */
	public function getQtdIngressos() {
		return $this->qtdIngressos;
	}
	
	/**
	 * @return mixed
	 */
	public function getReceita() {
		return $this->receita;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdIngresso() {
		return $this->idIngresso;
	}

	/**
	 * @param mixed $idRelatorio 
	 * @return self
	 */
	public function setIdRelatorio($idRelatorio): self {
		$this->idRelatorio = $idRelatorio;
		return $this;
	}
	
	/**
	 * @param mixed $dataRelatorio 
	 * @return self
	 */
	public function setDataRelatorio($dataRelatorio): self {
		$this->dataRelatorio = $dataRelatorio;
		return $this;
	}
	
	/**
	 * @param mixed $qtdIngressos 
	 * @return self
	 */
	public function setQtdIngressos($qtdIngressos): self {
		$this->qtdIngressos = $qtdIngressos;
		return $this;
	}
	
	/**
	 * @param mixed $receita 
	 * @return self
	 */
	public function setReceita($receita): self {
		$this->receita = $receita;
		return $this;
	}
	
	/**
	 * @param mixed $idIngresso 
	 * @return self
	 */
	public function setIdIngresso($idIngresso): self {
		$this->idIngresso = $idIngresso;
		return $this;
	}
}
?>