<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 07</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background-color: silver;
			color: darkgreen;
		}
	</style>
	<?php
		$dep = $_POST["DEPOSITOS"];
		$qtd = $_POST["qtdDEP"];
		$anos = $_POST["ANOS"];
		$taxa = $_POST["TAXA"];
	?>
</head>
<body>
	<center>
	<h1>Exercício 07 - Valor Futuro com Depósitos Mensais</h1>
	<hr>
	<?php

		/* Variavel para armazenar o primeiro deposito */
		$total = 0;

		/* Dividindo a taxa por 100 */
		$taxa = $taxa/100;
		/* Taxa anual sendo dividida por 12 para descobrir a taxa mensal */
		$taxa = $taxa/12;

		/*calcular numero de depositos a ser realizado */
		$numdep = $qtd * $anos;

		/*Calcular tempo do rendimento */
		$tempo = ($anos * 12);
		$cont = 1;
		
		/* Loop para Calcular rendimentos */
		while($cont<=$tempo){
			if($cont>1){
				$total+= $total * $taxa;	
			}
			if($cont<=$numdep){
				$total+=$dep;
			}
			$cont++;
		}

		/*
		$total += $dep;
		while ($cont<$tempo){
			$total += $total * $taxa;
			$total = $total + $dep;
			$cont++;
		} 
		*/

		/* Mostrando informações para o usuario */
		
		$taxaprint = number_format($taxa*100, 3, ',', '.');
		$totalF = number_format($total, 2, ',', '.');
		$depF = number_format($dep, 2, ',', '.');

		echo "<h3>Fazendo $numdep depósitos mensais de R$ $depF </h3>";
		echo "<h3>a uma taxa de juros mensal de $taxaprint %,</h3>";
		echo "<h3>você terá guardado um total de R$ $totalF .</h3>";
	?>
	</center>
</body>
</html>