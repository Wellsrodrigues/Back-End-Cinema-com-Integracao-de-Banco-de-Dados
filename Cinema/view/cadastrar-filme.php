
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

    <div class="col d-flex justify-content-center">
        <form class="formulario" method="post" action="../database/inserir-filme.php">
            <div class="row mb-3">
                <label class="col-sm-0 col-form label"><strong>Titulo:</strong></label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="titulo"  id="titulo" maxlength="40" placeholder="Ex: Homem-Aranha" autocomplete="off">
                </div>
            </div>
            <div class="group1">
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Duração:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="duração" id="duração" placeholder="Ex: 120 min" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-z col-form label"><strong>Ano:</strong></label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="ano" id="ano" placeholder="Ex: 2022" autocomplete="off">
                    </div>
                </div>
                <div class="col-3">
                <label class="col-sm-0 col-form label"><strong>Classificação:</strong></label>
                    <select class="form-select" name="classificação">
                        <option value="Livre">Livre</option>
                        <option value="+10">+10</option>
                        <option value="+12">+12</option>
                        <option value="+14">+14</option>
                        <option value="+16">+16</option>
                        <option value="+18">+18</option>
                    </select>
                </div>
            </div>
            <div class="group1">
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Gênero:</strong></label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" name="genero" id="genero" placeholder="Ex: Ação" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-0 col-form label"><strong>Diretor:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="diretor" id="diretor" placeholder="Ex: James Gun" autocomplete="off">
                    </div>
                </div>
                <div class="col-3">
                <label class="col-sm-0 col-form label"><strong>Áudio:</strong></label>
                    <select class="form-select" name="audio">
                        <option value="Dublado">Dublado</option>
                        <option value="Legendado">Legendado</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-0 col-form label"><strong>Banner:</strong></label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="banner" id="banner" placeholder="Insira o link da imagem promocional" autocomplete="off">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-0 col-form label"><strong>Sinopse:</strong></label>
                <div class="col-sm-12">
                    <textarea class="form-control" name="sinopse" id="sinopse" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="buttons">
                    <input type="submit" name="enviar" class="btn btn-success" value="Cadastrar">
                    <a href="../view/listar-filmes.php" type="button" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    <div class="space"></div>
</body>