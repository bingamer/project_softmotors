<?php
session_start();
include('conexao.php');

if (isset($_POST['pesquisar'])){
    
    $cli = mysqli_real_escape_string($conexao, $_POST['busca']);

    $sql_cliente = "SELECT * FROM clientes WHERE nome LIKE '%$cli%' OR cpf LIKE '%$cli%' OR email LIKE '%$cli%' OR rg LIKE '%$cli%'";
    $busca = mysqli_query($conexao, $sql_cliente) or die(mysqli_error($conexao));
    $row_Busca = mysqli_fetch_assoc($busca);
    $totalRows_busca = mysqli_num_rows($busca);

}else {

    $sql_cliente = "SELECT * FROM clientes";
    $busca = mysqli_query($conexao, $sql_cliente) or die(mysqli_error($conexao));
    $row_Busca = mysqli_fetch_assoc($busca);
    $totalRows_busca = mysqli_num_rows($busca);
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>SoftMotors - Painel do Cliente</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/sytle_cliente.css">
</head>

<body>
  <div class="principal">
    <div class="area_esquerda">
      <img src="./images/logosoftmotors.png" width="80" height="45" class="logo_softmotors" alt="">
      <h3>CADASTRO DE CLIENTES</h3>
    </div>

    <div class="form-rows">
    <form method="POST" action="cad_cliente.php" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-9 nome">
            Nome Completo: <input type="text" name="nome" class="form-control" placeholder="Informe Nome Completo" required>
          </div>
          <div class="form-group col-md-2 nascimento">
            Data de Nascimento: <input type="text" name="dataNascimento" class="form-control" placeholder="00/00/0000" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4 cpf">
            <label for="Cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="carteiracpf" placeholder="000.000.000-00" required>
          </div>
          <div class="form-group col-md-3 rg">
            <label for="rg">RG</label>
            <input type="text" class="form-control" name="rg" id="registro" placeholder="Informe RG" required>
          </div>
          <div class="form-group col-md-2 emissor">
            <label for="emissor">Org. Emissor</label>
            <input type="text" class="form-control" name="emissor" id="orgaoemissor" placeholder="Informe o OE" required>
          </div>
          <div class="form-group col-md-2 uf">
            <label for="inputUf">UF</label>
            <select id="inputUf" name="uf" class="form-control" required>
              <option selected>Selecione...</option>
              <option>AC</option>
              <option>AL</option>
              <option>AP</option>
              <option>AM</option>
              <option>BA</option>
              <option>CE</option>
              <option>DF</option>
              <option>ES</option>
              <option>GO</option>
              <option>MA</option>
              <option>MT</option>
              <option>MS</option>
              <option>MG</option>
              <option>PA</option>
              <option>PB</option>
              <option>PR</option>
              <option>PE</option>
              <option>PI</option>
              <option>RJ</option>
              <option>RN</option>
              <option>RS</option>
              <option>RO</option>
              <option>RR</option>
              <option>SC</option>
              <option>SP</option>
              <option>SE</option>
              <option>TO</option>
            </select>
          </div>
          <div class="form-group col-md-2 cep">
            <label for="cep">CEP</label>
            <input type="text" name="cep" class="form-control" id="codigopostal" placeholder="Informe CEP" required>
          </div>
          <div class="form-group col-md-5 endereco">
            <label for="inputEndereco">Endereco</label>
            <input type="text" name="endereco" class="form-control" id="inputEndereco" placeholder="Informe o Endereco" required>
          </div>
          <div class="form-group col-md-4 cidade">
            <label for="inputCidade">Cidade</label>
            <input type="text" name="cidade" class="form-control" id="inputCidade" placeholder="Informe sua cidade" required>
          </div>
          <div class="form-group col-md-9 email">
            <label for="inputEmail">E-mail</label>
            <input type="text" name="email" class="form-control" id="inputEmail" placeholder="exemplo@exemplo.com" required>
          </div>

          <div class="form-group col-md-2 telefone">
            <label for="inputTelefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="inputTelefone" placeholder="(000) 99999-9999" required>
          </div>
        </div> <br>

        <input class="btn btn-info buttons" type="submit" value="SALVAR">
        <input class="btn btn-info buttons" type="reset" value="LIMPAR">
        <a class="btn btn-info buttons" href="http://www.fanap.br/" target="preview-frame" role="button">SAIR</a>
    </form>
    </div>
          <div class="pesquisa">
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" method="POST" action="">
                        <input class="form-control mr-sm-2" type="search" name="busca" placeholder="Buscar Clientes pelo CPF" aria-label="Buscar Clientes">
                        <button class="btn btn-outline-success my-2 my-sm-0" name="pesquisar" type="submit">Buscar</button>
                    </form>
                </nav>
            </div>    
          <table class="tabela_busca"> <!--busca de clientes-->
                <tr>
                    <td>NOME</td>
                    <td>CPF</td>
                    <td>TELEFONE</td>
                    <td>E-MAIL</td>
                    <td>OPCOES</td>
                </tr>
            <?php 
              do {
            ?>  
                <tr>
                    <td><?php echo $row_Busca['nome']; ?></td>
                    <td><?php echo $row_Busca['cpf']; ?></td>
                    <td><?php echo $row_Busca['telefone']; ?></td>
                    <td><?php echo $row_Busca['email']; ?></td>
                    <td>
                        <a href="#"><img src="images/edit.png" width="20" height="18" alt="Editar"></a>
                        <a href="#"><img src="images/trash.png" width="20" height="18" alt="Excluir"></a>
                    </td>
                </tr>
            <?php } while($row_Busca = mysqli_fetch_assoc($busca)); ?>
          </table>
      </div>

  <!--Scripts Usados do Bootstrap-->
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
