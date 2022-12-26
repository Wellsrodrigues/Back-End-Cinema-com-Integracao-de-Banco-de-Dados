<!DOCTYPE html>
<html lang="pt-br"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Tf=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Funcionários</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/456bbda4c6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
   
    <header id="topo">  
            <div class="logo">
                    <img src="../view/images/logo.png" alt="Logo da Cinetrix">
            </div>
    </header>

    <nav id="menu">
    <div id="optionsMenu">
            <a href="../view/index.php">Página Inicial</a>
            <a href="../view/listar-filmes.php">Filmes</a>
            <a href="../view/listar-sessoes.php">Sessões</a>
            <a href="../view/listar-ingressos.php">Ingressos</a>
            <a href="../view/listar-func.php">Funcionários</a>
            <a href="../view/listar-relatorio.php">Relatório Financeiro</a>
        </div>
    </nav>

    <div class="container">
        <br>
        <h2>Lista de Funcionários</h2>
        <a class="btn btn-primary" href="../view/cadastrar-func.php" role="button">Novo Funcionário</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Cargo</th>
                    <th>Salário</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Cinema</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>
    
            <?php
                require_once '../classes/autoload.inc.php';
                
                $cine = new CinemaDAO();

                $func = new FuncionarioDAO();
                $lista = $func->listar();

                foreach ($lista AS $key => $value) {
               
            ?>
            <tr>
                <td><?php echo $value['idFuncionário']; ?></td>
                <td><?php echo $value['Nome']; ?></td>
                <td><?php echo $value['CPF']; ?></td>
                <td><?php echo $value['Cargo']; ?></td>
                <td>R$ <?php echo $value['Salário']; ?>,00</td>
                <td><?php echo $value['Endereço']; ?></td>
                <td><?php echo $value['Telefone']; ?></td>
                <td>
                    <?php
                        $name = $cine->buscar($value['idCinema']);
                        echo $name['Nome']; 
                     ?>
                </td>
                <td>
                    <a href="../view/editar-func.php?idFuncionário=<?php echo $value['idFuncionário']; ?>" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-pen"></i></a>
                    <a href="../database/remover-func.php?idFuncionário=<?php echo $value['idFuncionário']; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>