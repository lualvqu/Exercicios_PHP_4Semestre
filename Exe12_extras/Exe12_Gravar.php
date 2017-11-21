<!DOCTYPE html>
<html>
<head>
	<title>Gravar Carros no Banco</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			font-family: arial;
		}
		.field-left{
			float: left;
			text-align: center;
			width: 50%;
			margin: auto;

		}
		fieldset{
			width: 60%;
			margin: auto;

		}
		hr{
			width: 80%;
		}
	</style>
</head>
<body>
	<center>
	<h1>Gravar Novo Carro</h1>
	<h3>Lucas Alves - Thiago Alves</h3>
	</center>
	<hr>
	<br>
	<form name="Form_Grava" method="POST" action="Exe12_Gravando.php">
		
		<fieldset>
			<div class="field-left">
				<h3>Placa: <input type="text" name="PLACA" id="input1" size="8" maxlength="8"> 
				Cor: <input type="text" name="COR" size="10" maxlength="20"></h3>
				<h3>Nome: <input type="text" name="NOME" size="27">
				<p>
				Marca: <input type="tex" name="MARCA" size="27"></h3>
				<h3>Ano: <input type="text" name="ANO" size="8" maxlength="4">
				Preço: <input type="text" name="PRECO" size="9"></h3>
			</div>
			<div class="field-left">
				<h3>Combustivel:</h3>
				<div style="padding-left: 35%; text-align: left;">
				<input type="radio" name="COMBUSTIVEL" value="GASOLINA" checked>GASOLINA	<br>	
				<input type="radio" name="COMBUSTIVEL" value="ALCOOL">			Alcool 		<br>
				<input type="radio" name="COMBUSTIVEL" value="DIESEL">			Diesel 		<br>
				<input type="radio" name="COMBUSTIVEL" value="GAS">				Gas 		<br>
				<input type="radio" name="COMBUSTIVEL" value="FLEX">			Flex 		<br>
				</div>
			</div>	
		</fieldset>
			<br>
			<hr>
		<div style="text-align: center;">
			<button class="btn btn-info btn-lg" type="reset" onclick="document.getElementById('input1').focus()">Limpar</button>
			<button class="btn btn-success btn-lg" type="submit">Cadastrar</button>
		</div>

	</form>
		<br><center><button onclick="window.open('../Exe12.htm', '_self')">Voltar para o Menu</button></center>
</body>
</html>