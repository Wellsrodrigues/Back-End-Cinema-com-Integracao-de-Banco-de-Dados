<?php
require_once '../classes/autoload.inc.php';

$id = $_POST['idSessão'];
$dataSessao = $_POST['dataSessao'];
$horario = $_POST['horário'];
$tipo = $_POST['tipo'];
$sala = $_POST['sala'];
$QtdeLugares = $_POST['qtdeLugares'];
$idFilme = $_POST['idFilme'];

$sessao = new SessaoDAO();
$sessao->setDataSessao($dataSessao);
$sessao->setHorario($horario);
$sessao->setTipo($tipo);
$sessao->setSala($sala);
$sessao->setQtdLugares($QtdeLugares);
$sessao->setIdFilme($idFilme);

$sessao->alterar($id);

header("Location: ../view/listar-sessoes.php");
?>
