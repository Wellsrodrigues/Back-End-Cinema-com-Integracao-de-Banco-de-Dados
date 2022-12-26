<!DOCTYPE html>
<html lang="pt-br"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Tf=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Relatório</title>
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
        <br><br><br>
        <h2>Relatório Financeiro</h2>
        <br><br>
        <a class="btn btn-primary" href="#" role="button">Enviar Relatório</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Data Relatório</th>
                    <th>Qtd_Ingressos</th>
                    <th>Meia Entrada</th>
                    <th>Normal</th>
                    <th>Receita Bruta</th>
                </tr>
            </thead>
            <tbody>
    
            <?php
                require_once '../classes/autoload.inc.php';

                $passes = new IngressoDAO();
                $lista = $passes->listar();
                
                $meia = 0;
                $normal = 0;

                $qtd = 0;
                $receita = 0;

                foreach ($lista AS $key => $value) {
                    $qtd += $value['Qtd'];
                    $receita += $value['TotalVenda'];

                    if($value['Tipo'] == 'Normal'){
                        $normal+=$value['Qtd'];
                    }

                    if($value['Tipo'] == 'Meia'){
                        $meia+= $value['Qtd'];
                    }
            ?>
            <?php
                }
                if($qtd == 0){
                    echo "
                    <div class='container'>
                        <div class='row'>
                            <div class='span4'>
                                <div class='alert alert-danger' role='alert'>
                                    Não há registros no Sistema!
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>
             <tr>
                <td>
                    <?php 
                         echo date('d/m/Y');
                    ?>
                </td>
                <td><?php echo $qtd ?></td>
                <td><?php echo $meia ?></td>
                <td><?php echo $normal ?></td>
                <td>R$ <?php echo $receita ?>.00</td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>