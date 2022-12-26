<!DOCTYPE html>
<html lang="pt-br"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Tf=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Ingresso</title>
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
        <h2>Lista de Vendas Ingressos</h2>
        <a class="btn btn-primary" href="../view/cadastrar-ingressos.php" role="button">Nova Venda</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>CPF_Cliente</th>
                    <th>Tipo</th>
                    <th>Preço</th>
                    <th>Qtde</th>
                    <th>Poltrona</th>
                    <th>Sessão</th>
                    <th>Total</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>
    
            <?php
                require_once '../classes/autoload.inc.php';
    
                $passe = new IngressoDAO();
                $lista = $passe->listar();

                foreach ($lista AS $key => $value) {
               
            ?>
            <tr>
                <td><?php echo $value['idIngresso']; ?></td>
                <td><?php echo $value['CpfCliente']; ?></td>
                <td><?php echo $value['Tipo']; ?></td>
                <td>R$ <?php echo $value['ValorIndividual']; ?>.00</td>
                <td><?php echo $value['Qtd']; ?></td>
                <td>N° <?php echo $value['Poltrona']; ?></td>
                <td><?php echo $value['idSessão']; ?></td>
                <td>R$ <?php echo $value['TotalVenda']; ?>.00</td>
                <td><?php echo $value['Data']; ?></td>
                <td><?php echo $value['Hora']; ?></td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"><i class="fa-solid fa-print"></i></a>
                    <a href="../view/editar-ingresso.php?idIngresso=<?php echo $value['idIngresso']; ?>" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-pen"></i></a>
                    <a href="../database/remover-ingresso.php?idIngresso=<?php echo $value['idIngresso']; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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