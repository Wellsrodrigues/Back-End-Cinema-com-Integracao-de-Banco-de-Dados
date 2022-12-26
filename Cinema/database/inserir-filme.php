<?php
require_once '../classes/autoload.inc.php';

$titulo = $_POST['titulo'];
$duracao = $_POST['duração'];
$classificação = $_POST['classificação'];
$ano = $_POST['ano'];
$genero = $_POST['genero'];
$diretor = $_POST['diretor'];
$banner = $_POST['banner'];
$audio = $_POST['audio'];
$sinopse = $_POST['sinopse'];

$filme = new filmeDAO();
$filme->setTitulo($titulo);
$filme->setDuração($duracao);
$filme->setClassificação($classificação);
$filme->setAno($ano);
$filme->setGenero($genero);
$filme->setDiretor($diretor);
$filme->setBanner($banner);
$filme->setAudio($audio);
$filme->setSinopse($sinopse);

$filme->adicionar();

header("Location: ../view/listar-filmes.php");
?>
