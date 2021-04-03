<?php
session_start();
include('conexao.php');

if(empty($_POST['cpf']) || empty($_POST['pass'])) {
    header('Location: index.html');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['cpf']);
$senha = mysqli_real_escape_string($conexao, $_POST['pass']);

$query = "SELECT id, login FROM usuarios WHERE login ='{$usuario}' AND senha = MD5('$senha')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['login'] = $usuario;
    header('Location: painel.php');
    exit();
}else{
    header('Location: index.html');
    exit();
}
