<?php
session_start();
include('conexao.php');

$placa_moto = $_POST['placaMoto'];
$ano_fabricacao = $_POST['anoFab'];
$ano_modelo = $_POST['anoModelo'];
$modelo_moto = $_POST['modeloMoto'];
$cor_moto = $_POST['corMoto'];
$valor_venal = $_POST['valorVenal'];
$valor_entrada = $_POST['valorEntrada'];
$valor_saida = $_POST['valorSaida'];
$observacao = $_POST['observacao'];

    $estoque_info = $conexao->prepare("INSERT INTO estoque_motos (placa, ano_fab, ano_mod, modelo, cor, valor_moto, valor_entrada, valor_saida, observacao, data) 
    VALUES ('$placa_moto','$ano_fabricacao','$ano_modelo', '$modelo_moto','$cor_moto','$valor_venal', '$valor_entrada', '$valor_saida','$observacao', NOW())");

    if ($estoque_info->execute()){
        echo "
		    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/softmotors/painel.php#'>
			<script type=\"text/javascript\">
				alert(\"Cadastro realizado com sucesso.\");
			</script>
			";
    }else{
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/softmotors/painel.php#'>
            <script type=\"text/javascript\">
                alert(\"Erro ao Cadastrar.\");
            </script>
            ";
    }       

?>
