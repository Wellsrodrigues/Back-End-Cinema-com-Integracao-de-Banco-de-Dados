<?php
require_once '../classes/autoload.inc.php';

$id = $_POST['idFuncionário'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$idCinema = $_POST['idCinema'];

$func = new FuncionarioDAO();
$func->setNome($nome);
$func->setCpf($cpf);
$func->setCargo($cargo);
$func->setSalario($salario);
$func->setEndereco($endereco);
$func->setTelefone($telefone);
$func->setIdCinema($idCinema);

$func->alterar($id);

header("Location: ../view/listar-func.php");
?>
