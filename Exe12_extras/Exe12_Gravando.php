<!DOCTYPE html>
<html>
<head>
	<title>Gravando Veiculo Novo</title>
	<?php
		require 'connection.php';
		$carro = $_POST;
	?>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			font-family: arial;
			text-align: center;
		}
	</style>
</head>
<body>
	<h3>
	<?php
		echo "O Carro $carro[NOME], PLACA $carro[PLACA]<br>";
		echo "Ano/Modelo $carro[ANO], PREÇO R$ $carro[PRECO]<br>";
		$result = DBCreate('tb_veiculos', $carro);
		if($result)
			echo "Foi Gravado Com sucesso";
		else
			echo "ERRO - NÃO FOI POSSIVEL GRAVAR";
	?>
	</h3>

	<button onclick="window.open('../Exe12.htm', '_self')">Voltar para o Menu</button>
</body>
</html>