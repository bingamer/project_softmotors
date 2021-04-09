<?php
session_start();
include('conexao.php');
?>

<!doctype html>
<html lang="en">

<head>
  <title>SoftMotors - Cadastro de Motos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style_cadmotos.css">
</head>

<body>

  <div class="principal">
    <div class="area_esquerda">
      <img src="./images/logosoftmotors.png" width="80" height="45" class="logo_softmotors" alt="">
      <h3>CADASTRO DE MOTOS</h3>
    </div>

    
      <form method="POST" action="cad_estoque.php" enctype="multipart/form-data">
      <div class="form-row">
        <div class="col-md-2 placamoto">
          Placa da Moto <input type="text" name="placaMoto" class="form-control" placeholder="Placa" required>
        </div>
        <div class="col-md-6 modelo">
          Modelo da Moto <input type="text" name="modeloMoto" class="form-control" placeholder="Modelo" required>
        </div>
      </div><br>
      <div class="form-row">
        <div class="col-md-2 anofab">
          Ano de Fabricação <input type="text" name="anoFab" class="form-control" placeholder="00/00/0000" required>
        </div>
        <div class="col-md-2 cor">
          Cor <input type="text" name="corMoto" class="form-control" placeholder="Cor" required>
        </div>
        <div class="col-md-2 anomodelo">
          Ano Modelo <input type="text" name="anoModelo" class="form-control" placeholder="Informe o ano" required>
        </div>
        <div class="col-md-2 valorvenal">
          Valor Venal R$ <input type="text" name="valorVenal" class="form-control" placeholder="R$" required>
        </div>
      </div><br>
      <div class="form-row">
        <div class="col-md-2 valorentrada ">
          Valor de Entrada <input type="text" name="valorEntrada" class="form-control" placeholder="R$" required>
        </div>
        <div class="col-md-2 valorsaida">
          Valor de Saida <input type="text" name="valorSaida" class="form-control" placeholder="R$" required>
        </div>
      </div><br>
      <div class="form-row">
        <div class="col-md-8 obs">
            <label for="observacao">Observação</label>
            <textarea class="form-control" name="observacao" id="inputObs" rows="5"></textarea>
          </div><br>
      </div>    
      <div class="button">
        <input class="btn btn-primary buttons" type="submit" value="SALVAR">
        <input class="btn btn-primary buttons" type="reset" value="LIMPAR">
        <a class="btn btn-primary buttons" href="#" role="button">SAIR</a>
      </div>
    </form> 

    <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar Placa" aria-label="Buscar Placa">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </nav>

    <div class="busca_iframe">
      <iframe id="preview-frame" src="busca_estoque.html" name="preview-frame" frameborder="0" noresize="noresize"
      style="height: 300px; width: 100%;"></iframe>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
</body>

</html>
