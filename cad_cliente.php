<?php
session_start();
include_once('conexao.php');

$nome_cliente = $_POST['nome'];
$nascimento_cliente = $_POST['dataNascimento'];
$cpf_cliente = $_POST['cpf'];
$rg_cliente = $_POST['rg'];
$emissor_cliente = $_POST['emissor'];
$uf_cliente = $_POST['uf'];
$cep_cliente = $_POST['cep'];
$endereco_cliente = $_POST['endereco'];
$cidade_cliente = $_POST['cidade'];
$email_cliente = $_POST['email'];
$telefone_cliente = $_POST['telefone'];

    $info_cliente = $conexao->prepare("INSERT INTO clientes (nome, dataNascimento,cpf, rg, emissor, uf, cep, endereco, cidade, email, telefone)
     VALUES ('$nome_cliente', '$nascimento_cliente', '$cpf_cliente', '$rg_cliente', '$emissor_cliente', '$uf_cliente', '$cep_cliente', '$endereco_cliente', '$cidade_cliente', '$email_cliente', '$telefone_cliente')");

    if ($info_cliente->execute()){
        echo "
		    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/softmotors/cadastro_sucess.php#'>
			<script type=\"text/javascript\">
				alert(\"Cadastro realizado com sucesso.\");
			</script>
			";
    }else{
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/softmotors/cadastro_fail.php#'>
            <script type=\"text/javascript\">
                alert(\"Erro ao Cadastrar.\");
            </script>
            ";
    }
?>    
