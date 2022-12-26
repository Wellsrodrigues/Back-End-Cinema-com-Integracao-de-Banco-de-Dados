<!DOCTYPE html>
<html lang="pt-br"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Tf=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Filmes</title>
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
        <h2>Tabela de Filmes</h2>
        <a class="btn btn-primary" href="../view/cadastrar-filme.php" role="button">Novo Filme</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Duração</th>
                    <th>Classif.</th>
                    <th>Ano</th>
                    <th>Gênero</th>
                    <th>Diretor</th>
                    <th>Áudio</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once '../classes/autoload.inc.php';

                $filme = new FilmeDAO();
                $lista = $filme->listar();

                foreach ($lista AS $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['idFilme']; ?></td>
                <td><?php echo $value['Titulo']; ?></td>
                <td><?php echo $value['Duração']; ?></td>
                <td><?php echo $value['Classificação']; ?></td>
                <td><?php echo $value['Ano']; ?></td>
                <td><?php echo $value['Genero']; ?></td>
                <td><?php echo $value['Diretor']; ?></td>
                <td><?php echo $value['Audio']; ?></td>
                <td>
                    <a href="../view/info-filme.php?idFilme=<?php echo $value['idFilme']; ?>" class="btn btn-info btn-sm"><i class="fa-sharp fa-solid fa-circle-info"></i></a>
                    <a href="../view/editar-filme.php?idFilme=<?php echo $value['idFilme']; ?>" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-pen"></i></a>
                    <a href="../database/remover-filme.php?idFilme=<?php echo $value['idFilme']; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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