<!DOCTYPE html>
<html>
<head>
	<title>Exercio 06</title>
	<style type="text/css">
		body{
			background-color: green;
			color: yellow;
		}
	</style>
	<?php
		$inicial = $_GET["NUM_INI"];
		$final = $_GET["NUM_FIM"];
		$tipo = $_GET["TIPO"];
	?>
</head>
<body>
	<center>
	<?php
		if($tipo  == 1){
			echo "<h1>Exercicio 06 - Numeros Impares</h1>";
		}
		else{
			echo "<h1>Exercicio 06 - Numeros Pares</h1>";	
		}
	?>
	<h3>Utilizando Loop com for()</h3>
	<hr>
	<h3>
	<?php
	if($tipo == 1){
		if($inicial%2 == 0){
			$inicial++;
		}
		for($aux = $inicial;$aux<=$final;$aux = $aux+2){
			echo "$aux - ";
		}
	}
	else{

		if($inicial%2!=0){
			$inicial++;
		}
		for($aux=$inicial;$aux<=$final;$aux = $aux+2){
			echo "$aux - ";
		}	
	}
	echo "fim !";
	?>
	</h3>
	</center>
</body>
</html>