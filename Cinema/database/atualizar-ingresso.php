<?php
require_once '../classes/autoload.inc.php';

$id = $_POST['idIngresso'];
$cpf = $_POST['cpf'];
$tipo = $_POST['tipo'];
$preco = $_POST['valor'];
$qtd = $_POST['qtd'];
$total = $qtd * $preco;
$poltrona = $_POST['poltrona'];
$idSessao = $_POST['sessao'];

$pass = new IngressoDAO();
$pass->setCpfCliente($cpf);
$pass->setTipo($tipo);
$pass->setValorIndividual($preco);
$pass->setQtd($qtd);
$pass->setTotalVenda($total);
$pass->setPoltrona($poltrona);
$pass->setIdSessao($idSessao);

$pass->alterar($id);

header("Location: ../view/listar-ingressos.php");
?>
