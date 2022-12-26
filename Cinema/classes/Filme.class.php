<?php 

class Filme{
    private $idFilme;
    private $titulo;
    private $duração;
    private $classificação;
    private $ano;
    private $genero;
    private $banner;
    private $diretor;
    private $sinopse;
    private $audio;


    
	function getIdFilme() {
		return $this->idFilme;
	}

	function setIdFilme($idFilme) {
		$this->idFilme = $idFilme;
		return $this;
	}

    
	function getTitulo() {
		return $this->titulo;
	}

	
	function setTitulo($titulo){
		$this->titulo = $titulo;
		return $this;
	}
	

    function getDuração() {
		return $this->duração;
	}

	function setDuração($duração){
		$this->duração = $duração;
		return $this;
	}


	function getclassificação() {
		return $this->classificação;
	}

	function setClassificação($classificação){
		$this->classificação = $classificação;
		return $this;
	}

	
	function getAno() {
		return $this->ano;
	}

	function setAno($ano) {
		$this->ano = $ano;
		return $this;
	}

	
	function getGenero() {
		return $this->genero;
	}

	
	function setGenero($genero){
		$this->genero = $genero;
		return $this;
	}

	function getBanner() {
		return $this->banner;
	}

	function setBanner($banner){
		$this->banner = $banner;
		return $this;
	}


	function getDiretor() {
		return $this->diretor;
	}

	function setDiretor($diretor) {
		$this->diretor = $diretor;
		return $this;
	}

	
	function getSinopse() {
		return $this->sinopse;
	}

	function setSinopse($sinopse) {
		$this->sinopse = $sinopse;
		return $this;
	}

	
	function getAudio() {
		return $this->audio;
	}

	
	function setAudio($audio){
		$this->audio = $audio;
		return $this;
	}
}

?>