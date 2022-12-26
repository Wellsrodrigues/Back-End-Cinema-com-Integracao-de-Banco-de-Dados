<?php
class Sessao{
    private $idSessao;
    private $dataSessao;
    private $horario;
    private $tipo;
    private $sala;
    private $qtdLugares;

	private $idFilme;

    

	/**
	 * @return mixed
	 */
	public function getIdSessao() {
		return $this->idSessao;
	}
	
	/**
	 * @return mixed
	 */
	public function getDataSessao() {
		return $this->dataSessao;
	}
	
	/**
	 * @return mixed
	 */
	public function getHorario() {
		return $this->horario;
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
	public function getSala() {
		return $this->sala;
	}
	
	/**
	 * @return mixed
	 */
	public function getQtdLugares() {
		return $this->qtdLugares;
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
	 * @param mixed $data 
	 * @return self
	 */
	public function setDataSessao($dataSessao): self {
		$this->dataSessao = $dataSessao;
		return $this;
	}
	
	/**
	 * @param mixed $horario 
	 * @return self
	 */
	public function setHorario($horario): self {
		$this->horario = $horario;
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
	 * @param mixed $sala 
	 * @return self
	 */
	public function setSala($sala): self {
		$this->sala = $sala;
		return $this;
	}
	
	/**
	 * @param mixed $qtdLugares 
	 * @return self
	 */
	public function setQtdLugares($qtdLugares): self {
		$this->qtdLugares = $qtdLugares;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdFilme() {
		return $this->idFilme;
	}
	
	/**
	 * @param mixed $idFilme 
	 * @return self
	 */
	public function setIdFilme($idFilme): self {
		$this->idFilme = $idFilme;
		return $this;
	}
}
?>