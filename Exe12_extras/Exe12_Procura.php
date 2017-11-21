<!DOCTYPE html>
<html>
<head>
	<title>Resultado da Procura</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			text-align:  center;
		}
		div{
			width: 50%;
			border: solid 2px;
		}
	</style>
	<?php
		$placa = $_GET['PLACA'];
	?>
</head>
<body>

	<h1>Resultado da Procura</h1>
	<br>
	<?php
		require 'connection.php';
		$placa = DBEscape($placa);
		$filtro = "WHERE PLACA='$placa'";
		$resultado = DBRead('tb_veiculos', $filtro);

		if($resultado==NULL){
			echo "
				<h3>Placa: $placa | Não encontrada.<br>Verifique o valor digitado e tente novamente.</h3>
				<button type='button' onclick=\"window.open('Exe12_Altera.php', '_self')\">Tentar Novamente!</button>
			";
		}
		else{
			$dados = $resultado[0];
			echo "
				<form name='form_5' method='GET' action='Exe12_Alterou.php'>
					<h3>
						Placa: $dados[PLACA]  Nome: $dados[NOME]<br>
						Ano/Modelo: $dados[ANO]  Cor: $dados[COR]<br>
						Preço Atual: R$ $dados[PRECO]
						<br><hr>
						Novo Preco:
						<input type='TEXT' name='PRECO' maxlength='8' size='10'>
						<input type='hidden' name='PLACA' value=\"$dados[PLACA]\">
					</h3>
					<br>
					<button type='button' onclick=\"window.open('../Exe12.htm', '_self')\">Não Alterar</button>
					<button type='submit'>Alterar</button>
				</form>
			";
		}
	?>
</body>
</html>