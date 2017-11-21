<!DOCTYPE html>
<html>
<head>
	<title>Consulta de Carros</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			font-family: arial;
			text-align: center;
		}
		table {
		    border-collapse: collapse;
		    width: 80%;
		    border: solid 1px;
		}

		th, td {
		    padding: 8px;
		    text-align: left;
		    border-bottom: 1px solid #ddd;
		}

		th{
			background-color: #f5f5f5;
			border-bottom: solid 1px;
		}

		tr:hover{background-color:#f5f5f5}
		hr{
			width: 80%;
		}

	</style>
</head>
<body>
	<h1>Consulta de Carros</h1>
	<h3>Lucas Alves - Thiago Alves</h3>
	<hr>
	<h2>
		<?php
			require 'connection.php';
			$filtro = null;
			if($_GET['TIPO']==1){
				echo "Apenas carros com combustivel flex";
				$filtro = "WHERE COMBUSTIVEL='FLEX'";
			}
			elseif($_GET['TIPO']==2){
				echo "Apenas carros modelo acima 2013";
				$filtro = "WHERE ANO > 2013";
			}
			else
				echo "ERRO - PARAMETRO INVALIDO";
			
			if($filtro != null){
				$dados = DBRead('tb_veiculos', $filtro, 'PLACA, NOME, ANO, PRECO, COMBUSTIVEL');
				echo " </h2>
					<HR> <br> 
					<table align='center'>
						<tr>
							<th>PLACA</th>
							<th>NOME</th>
							<th>ANO/MODELO</th>
							<th>PREÇO</th>
							<th>COMBUSTIVEL</th>
						</tr>	
				";
				if($dados != false){
					foreach ($dados as $dado) {
						echo "
							<tr>
								<td>$dado[PLACA]</td>
								<td>$dado[NOME]</td>
								<td>$dado[ANO]</td>
								<td>$dado[PRECO]</td>
								<td>$dado[COMBUSTIVEL]</td>
							</tr>
						";
					}
					echo "</table>";				}
				else{
					echo "
						<tr>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						</table>
						<br> <br>  <h3> Nenhum registro encontrado !</h3>
						";
				}
			}
		?>

		<br><center><button onclick="window.open('../Exe12.htm', '_self')">Voltar para o Menu</button></center>	
</body>
</html>