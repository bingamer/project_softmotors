<?php
session_start();
include('conexao.php');

$nome_user = $_POST['nome'];
$cpf_user = $_POST['cpf'];
$cargo_user = $_POST['cargo'];
$senha_user = mysqli_real_escape_string($conexao, $_POST['senha']);
$conf_senha_user = mysqli_real_escape_string($conexao, $_POST['conf_senha']);

    $enviar_info = $conexao->prepare("INSERT INTO usuarios (nome, login, senha, conf_senha, funcao, dt) VALUES ('$nome_user','$cpf_user',md5('$senha_user'), md5('$conf_senha_user'),'$cargo_user', NOW())");

    if ($enviar_info->execute()){
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
