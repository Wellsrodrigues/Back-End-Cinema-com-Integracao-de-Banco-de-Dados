
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
    <br><br><br><br><br>
    <div class="col d-flex justify-content-center">
    <?php
        require_once '../classes/autoload.inc.php';
        $id = $_GET['idSessão'];

        $sessao = new SessaoDAO();
        $value = $sessao->buscar($id);
    ?>
        <form class="formulario" method="post" action="../database/atualizar-sessao.php">
        <input type="hidden" name="idSessão" id="idSessão" value="<?php echo $value['idSessão']; ?>">
            <div class="group1">
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Data:</strong></label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" value="<?php echo $value['dataSessao']; ?>" name="dataSessao" placeholder="aa/mm/dd" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Horário:</strong></label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" value="<?php echo $value['Horário']; ?>" name="horário" placeholder="Ex: 16:45" autocomplete="off">
                    </div>
                </div>
                <div class="col-3">
                <label class="col-sm-0 col-form label"><strong>Tipo:</strong></label>
                    <select class="form-select" name="tipo">
                        <option value="2D">2D</option>
                        <option value="3D">3D</option>
                        <option value="IMAX">IMAX</option>
                    </select>
                </div>
            </div>
            <div class="group1">
                <div class="col-3">
                <label class="col-sm-0 col-form label"><strong>Qtd Lugares:</strong></label>
                    <select class="form-select" name="qtdeLugares">
                        <option value="30">30 Assentos</option>
                        <option value="45">45 Assentos</option>
                        <option value="60">60 Assentos</option>
                        <option value="100">100 Assentos</option>
                    </select>
                </div>
                <div class="col-5">
                    <label class="col-sm-0 col-form label"><strong>Filme:</strong></label>

                    <select class="form-select" name="idFilme">
                    <?php
                        require_once '../classes/autoload.inc.php';

                        $filme = new FilmeDAO();
                        $lista = $filme->listar();
                        $id;

                        foreach ($lista AS $key => $value) {
                            $id = $value['idFilme'];
                            $name = $value['Titulo'];
                    ?>
                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                    <?php
                        }
                    ?>
                     </select>

                </div>
                <div class="col-2">
                <label class="col-sm-0 col-form label"><strong>Sala:</strong></label>
                    <select class="form-select" name="sala">
                        <option value="Sala 01">Sala 01</option>
                        <option value="Sala 02">Sala 02</option>
                        <option value="Sala 03">Sala 03</option>
                    </select>
                </div>
            </div>
            </div>
            <br><br>
            <div class="col d-flex justify-content-center">
                <div class="buttons">
                    <input type="submit" name="enviar" class="btn btn-success" value="Atualizar">
                    <a href="../view/listar-sessoes.php" type="button" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    <div class="space"></div>
</body>