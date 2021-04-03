<?php
session_start();
include('verificar_login.php');
?>

<!doctype html>
<html lang="en">

<head>
  <title>SoftMotors - Painel Principal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <link href="css/style_painel.css" rel="stylesheet" type="text/css" />
  <link href="css/style_iframe.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <input type="checkbox" id="check">

  <!--JRGUALBERTO / DESCKTOP / INICIO -->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_botao"></i>
    </label>
    <div class="area_esquerda">
      <img src="./images/logosoftmotors.png" width="80" height="45" class="logo_softmotors" alt="">
      <h3>Soft<span>Motors</span></h3>
    </div>
    <div class="area_direita">
      <a href="#" class="botao_sair"> Deslogar </a>
    </div>
  </header>

  <!--JRGUALBERTO / MOBILE / INICIO -->
  <div class="navegar_mobile">
    <div class="nav_bar">
      <img src="./images/perfil.jpg" class="perfil_imagem_mobile" alt="">
      <h4>Rodrigo</h4>
      <i class="fas fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_itens">
      <a target="preview-frame" href="clientes.html"><i class="fas fa-users"></i><span>Cadastrar Clientes</span></a>
      <a target="preview-frame" href="cadastro_user.html"><i class="fas fa-users"></i><span> Cadastrar Usuário</span></a>
      <a href="#"><i class="fas fa-coins"></i><span> Calcular Parcelas</span></a>
      <a href="#"><i class="fas fa-money-check-alt"></i><span> Vendas</span></a>
      <a target="preview-frame" href="cadastro_moto.html"><i class="fas fa-warehouse"></i><span> Estoque</span></a>
      <a href="#"><i class="fas fa-file-signature"></i><span> Gerar Relátorios</span></a>
      <a href="#"><i class="fas fa-folder-open"></i><span> Documentos</span></a>

    </div>
  </div>

  <!--JRGUALBERTO / MOBILE / FIM-->

  <div class="sidebar">
    <div class="perfil_info">
      <img src="./images/perfil.jpg" class="imagem_profile" alt="">
      <h4>Rodrigo</h4>
    </div>
    <a target="preview-frame" href="clientes.html"><i class="fas fa-users"></i><span>Cadastrar Clientes</span></a>
    <a target="preview-frame" href="cadastro_user.html"><i class="fas fa-users"></i><span> Cadastrar Usuário</span></a>
    <a href="#"><i class="fas fa-coins"></i><span> Calcular Parcelas</span></a>
    <a href="#"><i class="fas fa-money-check-alt"></i><span> Vendas</span></a>
    <a target="preview-frame" href="cadastro_moto.html"><i class="fas fa-warehouse"></i><span> Estoque</span></a>
    <a href="#"><i class="fas fa-file-signature"></i><span> Gerar Relátorios</span></a>
    <a href="#"><i class="fas fa-folder-open"></i><span> Documentos</span></a>
  </div>
  <!--JRGUALBERTO / DESCKTOP / FIM -->

  <div class="final_page">
    <iframe id="preview-frame" src="#" name="preview-frame" frameborder="0" noresize="noresize"
      style="height: 720px;"></iframe>
  </div>

  <script type="text/javascript">
    $(document).ready(function () {
      $('.nav_btn').click(function () {
        $('.mobile_nav_itens').toggleClass('active');
      });
    });

    var calcHeight = function () {
      $('#preview-frame').height($(window).height());
    }

    $(document).ready(function () {
      calcHeight();
    });

    $(window).resize(function () {
      calcHeight();
    }).load(function () {
      calcHeight();
    });
  </script>

</body>

</html>