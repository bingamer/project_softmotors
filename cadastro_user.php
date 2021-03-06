<?php
session_start();
include('conexao.php');

if (isset($_POST['pesquisar'])){
    
    $user = mysqli_real_escape_string($conexao, $_POST['busca']);
  
    $sql_user = "SELECT * FROM usuarios WHERE nome LIKE '%$user%' OR login LIKE '%$user%'";
    $busca = mysqli_query($conexao, $sql_user) or die(mysqli_error($conexao));
    $row_Busca = mysqli_fetch_assoc($busca);
    $totalRows_busca = mysqli_num_rows($busca);
  
  }else {
  
    $sql_user = "SELECT * FROM usuarios";
    $busca = mysqli_query($conexao, $sql_user) or die(mysqli_error($conexao));
    $row_Busca = mysqli_fetch_assoc($busca);
    $totalRows_busca = mysqli_num_rows($busca);
  }
?>

<!doctype html>
<html lang="en">

<head>
    <title>SoftMotors - Painel de Cadastro de Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_perfil.css">
</head>

<body>
    <div class="principal">
        <div class="area_esquerda">
            <img src="./images/logosoftmotors.png" width="80" height="45" class="logo_softmotors" alt="">
            <h3>CADASTRO DE USUÁRIO</h3>
        </div>
        <div class="form-rows">
            
            <form method="POST" action="cad_user.php" enctype="multipart/form-data">
                <div class="form-row tp1">
                    <div class="col-lg-6">
                        Nome <input type="text" name="nome" class="form-control" placeholder="Informe o Nome">
                    </div>
                    <div class="col-lg-6">
                        CPF <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00">
                    </div>
                    <div class="col-lg-6 cargo">
                        <label for="inputUf">Cargo</label>
                        <select id="inputUf" name="cargo" class="form-control">
                          <option selected>Selecione...</option>
                          <option>Vendedor</option>
                          <option>Administrador</option>
                        </select>
                      </div>
                </div>
                <div class="form-row tp1">
                    <div class="col-lg-6">
                        Senha <input type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>
                    <div class="col-lg-6">
                        Repetir Senha <input type="password" name="conf_senha" class="form-control" placeholder="Repetir Senha">
                    </div>
                </div>
                
                <!--<div class="form-row upimg">
                    <label class="form-label" for="customFile">Envie sua foto para perfil</label>
                    <input type="file" queried name="arquivo" class="form-control" id="customFile" />
                </div>-->
                <div class="button">
                    <input class="btn btn-info buttons" type="submit" value="SALVAR">
                    <input class="btn btn-info buttons" type="reset" value="LIMPAR">
                    <a class="btn btn-info buttons" href="http://www.fanap.br/" target="preview-frame"
                        role="button">SAIR</a>
                </div>
            </form>

            

    </div>
    <div class="form-row">
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
                            <td>NOME</td>
                            <td>LOGIN</td>
                            <td>FUNCAO</td>
                            <td>OPCOES</td>
                        </tr>
                    <?php 
                        do {
                    ?>  
                        <tr>
                            <td><?php echo $row_Busca['nome']; ?></td>
                            <td><?php echo $row_Busca['login']; ?></td>
                            <td><?php echo $row_Busca['funcao']; ?></td>
                            <td>
                                <a href="#"><img src="images/edit.png" width="20" height="18" alt="Editar"></a>
                                <a href="#"><img src="images/trash.png" width="20" height="18" alt="Excluir"></a>
                            </td>
                        </tr>
                    <?php } while($row_Busca = mysqli_fetch_assoc($busca)); ?>
                    </table>
                </div>
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
