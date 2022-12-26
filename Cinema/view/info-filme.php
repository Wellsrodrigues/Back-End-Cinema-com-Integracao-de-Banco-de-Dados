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
    <br>
    <div class="backButton">
        <a href="../view/listar-filmes.php"><i class="fa-solid fa-chevron-left"></i></a>
    </div>
    
    <div class="BoxMaster">
    <?php
                require_once '../classes/autoload.inc.php';
                $id = $_GET['idFilme'];

                $filme = new FilmeDAO();
                $value = $filme->buscar($id);
    ?>
        <div class="box1">
            <img src="<?php echo $value['Banner']; ?>" alt="Arte Promocional">
        </div>
    
        <div class="box2">
            <table>
                <tr>
                    <td>
                        <h5>Titulo: <?php echo $value['Titulo']; ?></h5>
                        <h5>Duração: <?php echo $value['Duração']; ?></h5>
                        <h5>Classificação: <?php echo $value['Classificação']; ?></h5>
                        <h5>Gênero: <?php echo $value['Genero']; ?></h5>
                        <h5>Diretor: <?php echo $value['Diretor']; ?></h5>
                        <h5>Ano: <?php echo $value['Ano']; ?></h5>
                        <h5>Áudio: <?php echo $value['Audio']; ?></h5>
                        <div style="width: 500px; text-align: justify;">
                            <h5>
                                <p>
                                    Sinopse: <?php echo $value['Sinopse']; ?>
                                </p>
                            </h5>
                        </div>
                    </td>
                </tr>
            </table>
        </div>   
    </div>

</body>
</html>