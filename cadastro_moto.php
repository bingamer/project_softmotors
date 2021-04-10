<?php
session_start();
include('conexao.php');

if (isset($_POST['pesquisar'])){
    
  $mot = mysqli_real_escape_string($conexao, $_POST['busca']);

  $sql_motos = "SELECT * FROM estoque_motos WHERE placa LIKE '%$mot%' OR ano_fab LIKE '%$mot%' OR modelo LIKE '%$mot%' OR cor LIKE '%$mot%' OR ano_mod LIKE '%$mot%'";
  $busca = mysqli_query($conexao, $sql_motos) or die(mysqli_error($conexao));
  $row_Busca = mysqli_fetch_assoc($busca);
  $totalRows_busca = mysqli_num_rows($busca);

}else {

  $sql_motos = "SELECT * FROM estoque_motos";
  $busca = mysqli_query($conexao, $sql_motos) or die(mysqli_error($conexao));
  $row_Busca = mysqli_fetch_assoc($busca);
  $totalRows_busca = mysqli_num_rows($busca);
}

?>
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
          Ano de Fabricação <input type="text" name="anoFab" class="form-control" placeholder="0000" required>
        </div>
        <div class="col-md-2 cor">
          Cor <input type="text" name="corMoto" class="form-control" placeholder="Cor" required>
        </div>
        <div class="col-md-2 anomodelo">
          Ano Modelo <input type="text" name="anoModelo" class="form-control" placeholder="0000" required>
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
    <div class="col-md-10">
    <div class="pesquisa">
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" method="POST" action="">
                        <input class="form-control mr-sm-2" type="search" name="busca" placeholder="Buscar" aria-label="Buscar motentes">
                        <button class="btn btn-outline-success my-2 my-sm-0" name="pesquisar" type="submit">Buscar</button>
                    </form>
                </nav>
            </div>    
          <table class="tabela_busca"> <!--busca de motentes-->
                <tr>
                    <td>PLACA</td>
                    <td>ANO FABRICACAO</td>
                    <td>ANO MODELO</td>
                    <td>MODELO</td>
                    <td>VALOR VENAL</td>
                    <td>OPCOES</td>
                </tr>
            <?php 
              do {
            ?>  
                <tr>
                    <td><?php echo $row_Busca['placa']; ?></td>
                    <td><?php echo $row_Busca['ano_fab']; ?></td>
                    <td><?php echo $row_Busca['ano_mod']; ?></td>
                    <td><?php echo $row_Busca['modelo']; ?></td>
                    <td><?php echo $row_Busca['valor_moto']; ?></td>
                    <td>
                        <a href="#"><img src="images/edit.png" width="20" height="18" alt="Editar"></a>
                        <a href="#"><img src="images/trash.png" width="20" height="18" alt="Excluir"></a>
                    </td>
                </tr>
            <?php } while($row_Busca = mysqli_fetch_assoc($busca)); ?>
          </table>
      </div>
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
