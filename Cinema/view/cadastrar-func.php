
<!DOCTYPE html>
<html lang="pt-br"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Tf=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Funcionário</title>
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
    <br><br><br><br>
    <div class="col d-flex justify-content-center">
        <form class="formulario" method="post" action="../database/inserir-func.php">
            <div class="row mb-3">
                <label class="col-sm-0 col-form label"><strong>Nome:</strong></label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nome" maxlength="40" placeholder="Ex: José Paulo Costa" autocomplete="off">
                </div>
            </div>
            <div class="group1">
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>CPF:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cpf" placeholder="123.456.789-00" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Cargo:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cargo" placeholder="Ex: Atendente" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Salário:</strong></label>
                    <div class="col-sm-12">
                        <input type="number" class="form-control" name="salario" placeholder="Ex: 1.200" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="group1">
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Endereço:</strong></label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" name="endereco" placeholder="Ex: Vila Paraiso, Q12, N 45" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Telefone:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telefone" placeholder="Ex: (99) 98888-8888" autocomplete="off">
                    </div>
                </div>
                <div class="col-5">
                    <label class="col-sm-0 col-form label"><strong>Cinema:</strong></label>

                    <select class="form-select" name="idCinema">
                    <?php
                        require_once '../classes/autoload.inc.php';

                        $cine = new CinemaDAO();
                        $lista = $cine->listar();
                        $id;

                        foreach ($lista AS $key => $value) {
                            $id = $value['idCinema'];
                            $name = $value['Nome'];
                    ?>
                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                    <?php
                        }
                    ?>
                     </select>

                </div>
            </div>
            <br><br>
            <div class="col d-flex justify-content-center">
                <div class="buttons">
                    <input type="submit" name="enviar" class="btn btn-success" value="Cadastrar">
                    <a href="../view/listar-func.php" type="button" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    <div class="space"></div>
</body>