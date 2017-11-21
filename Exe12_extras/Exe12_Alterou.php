<!DOCTYPE html>
<html>
<head>
	<title>Preço Alterado</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		require 'connection.php';
		$novo_valor = array_slice($_GET, 0, 1);
		$novo_valor = DBEscape($novo_valor);
		$placa = $_GET['PLACA'];
		DBUpdate('tb_veiculos', $novo_valor, "PLACA='$placa'");
		$dados = DBRead('tb_veiculos', "WHERE PLACA='$placa'");
		$dados = $dados[0];
		echo "
			<h3>
				Placa: $dados[PLACA]  Nome: $dados[NOME]<br>
				Ano/Modelo: $dados[ANO]  Cor: $dados[COR]<br>
				Preço Atual: R$ $dados[PRECO]
			</h3>
			<br>
			<button type='button' onclick=\"window.open('../Exe12.htm', '_self')\">Voltar Para o Menu</button>
			";

	?>
</body>
</html>