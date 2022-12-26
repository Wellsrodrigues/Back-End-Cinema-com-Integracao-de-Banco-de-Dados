<?php 
class Cinema{
	private $nome;
    private $cnpj;
	private $estado;
	private $cidade;
    private $endereco;

    

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @return mixed
	 */
	public function getCnpj() {
		return $this->cnpj;
	}
	
	/**
	 * @return mixed
	 */
	public function getEstado() {
		return $this->estado;
	}
	
	/**
	 * @return mixed
	 */
	public function getCidade() {
		return $this->cidade;
	}
	
	/**
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
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
	 * @param mixed $cnpj 
	 * @return self
	 */
	public function setCnpj($cnpj): self {
		$this->cnpj = $cnpj;
		return $this;
	}
	
	/**
	 * @param mixed $estado 
	 * @return self
	 */
	public function setEstado($estado): self {
		$this->estado = $estado;
		return $this;
	}
	
	/**
	 * @param mixed $cidade 
	 * @return self
	 */
	public function setCidade($cidade): self {
		$this->cidade = $cidade;
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
}
?>