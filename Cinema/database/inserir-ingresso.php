<?php
require_once '../classes/autoload.inc.php';

$cpf = $_POST['cpf'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$qtd = $_POST['qtd'];
$poltrona = $_POST['poltrona'];
$total = $qtd * $valor;
$idSessao = $_POST['sessao'];
$idRelatorio = $_POST['relatorio'];

$passe = new IngressoDAO();
$passe->setCpfCliente($cpf);
$passe->setTipo($tipo);
$passe->setValorIndividual($valor);
$passe->setQtd($qtd);
$passe->setPoltrona($poltrona);
$passe->setTotalVenda($total);
$passe->setIdSessao($idSessao);
$passe->setIdRelatório($idRelatorio);

$passe->adicionar();

header("Location: ../view/listar-ingressos.php");
?>
