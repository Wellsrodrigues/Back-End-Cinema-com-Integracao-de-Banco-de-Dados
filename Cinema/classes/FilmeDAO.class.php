<?php
require_once 'Filme.class.php';
require_once 'Conexao.class.php';
require_once 'IDatabase.php';
require_once 'autoload.inc.php';



class FilmeDAO extends Filme implements IDatabase {

	function adicionar() {

		$titulo = $this->getTitulo();
		$duração = $this->getDuração();
		$classificação = $this->getclassificação();
		$ano = $this->getAno();
		$genero = $this->getGenero();
		$banner = $this->getBanner();
		$diretor = $this->getDiretor();
		$sinopse = $this->getSinopse();
		$audio = $this->getAudio();

		$sql = "INSERT INTO filme (Titulo, Duração, Classificação, Ano, Genero, Banner, Diretor, Sinopse, Audio) 
        VALUES ('$titulo', '$duração', '$classificação', $ano, '$genero', '$banner', '$diretor', '$sinopse', '$audio')";
		
		$stmt = Conexao::prepare($sql);

		$stmt->execute();
	}

	function listar() {
		$sql = "SELECT * FROM filme";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}


	function buscar($id) {
		$sql = "SELECT *FROM filme WHERE idFilme = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt->fetch();
	}

	function alterar($id) {

		$titulo = $this->getTitulo();
		$duração = $this->getDuração();
		$classificação = $this->getclassificação();
		$ano = $this->getAno();
		$genero = $this->getGenero();
		$banner = $this->getBanner();
		$diretor = $this->getDiretor();
		$sinopse = $this->getSinopse();
		$audio = $this->getAudio();

		$sql = "UPDATE filme 
							SET Titulo = '$titulo', Duração = '$duração', Classificação = '$classificação', Ano = $ano, Genero = '$genero', Banner =  '$banner', Diretor = '$diretor', Sinopse = '$sinopse',  Audio = '$audio' 
							WHERE idFilme = $id";
		
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
	}

	function remover($id) {
		$sql = "DELETE FROM Filme WHERE idFilme = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

	}
	
} 