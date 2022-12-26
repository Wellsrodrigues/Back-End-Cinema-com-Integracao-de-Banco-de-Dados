<!DOCTYPE html>
<html lang="pt-br"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Tf=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Sessão</title>
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
        <h2>Sessões de Filmes</h2>
        <a class="btn btn-primary" href="../view/cadastrar-sessao.php" role="button">Nova Sessão</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Tipo</th>
                    <th>Sala</th>
                    <th>Assentos</th>
                    <th>Filme</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>
    
            <?php
                require_once '../classes/autoload.inc.php';
    
                $sessao = new SessaoDAO();
                $lista = $sessao->listar();

                $filme = new FilmeDAO();
                foreach ($lista AS $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['idSessão']; ?></td>
                <td><?php echo $value['dataSessao']; ?></td>
                <td><?php echo $value['Horário']; ?></td>
                <td><?php echo $value['Tipo']; ?></td>
                <td><?php echo $value['Sala']; ?></td>
                <td><?php echo $value['QtdeLugares']; ?></td>
                <td>
                    <?php
                        $name = $filme->buscar($value['idFilme']);
                        echo $name['Titulo']; 
                     ?>
                </td>
                <td>
                    <a href="../view/editar-sessoes.php?idSessão=<?php echo $value['idSessão']; ?>" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-pen"></i></a>
                    <a href="../database/remover-sessao.php?idSessão=<?php echo $value['idSessão']; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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