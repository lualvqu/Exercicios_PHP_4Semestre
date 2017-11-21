<!DOCTYPE html>
<html>
<head>
	<title>Exercício 03</title>
</head>

<body bgcolor="pink" text="red">
	<h1>Exercício 03 - Trabalhando com Datas</h1>
	<h2>Utilizando Funções de Data</h2>
	<h3>Lucas Alves - Thiago Bussolin</h3>
	<font face="arial" size="4" color="darkblue">
	<?php
	//utilizando date()
		echo "Data e Hora atual: ";
		echo date("F jS Y, h:iA");
		echo "<hr>";
	//utilizando o checkdate()
		$mes = 02;
		$dia = 16;
		$ano = 1970;
		$resp = checkdate($mes, $dia, $ano);
		if ($resp == 1){
			echo "A Data $dia/$mes/$ano é Válida !";
		}
		else{
			echo "A Data $dia/$mes/$ano é Inválda !";
		}

	//utilizando o mktime()
		echo "<hr>";
		$hora = 06;
		$min = 35;
		$seg = 55;
		$dt = mktime($hora, $min, $seg, $mes, $dia, $ano);
		echo "Data $dia/$mes/$ano às $hora:$min:$seg= $dt";

	//utilizando time() e microtime()
		echo "<hr>A hora atual é ";
		echo time();
		echo "<hr>A hora atual exata é ";
		echo microtime();

	//calculando diferenca entre duas datas
		$mes2 = 03;
		$dia2 = 07;
		$ano2 = 2008;
		$data_inicial = mktime(0,0,0, $mes, $dia, $ano);
		$data_final = mktime(0,0,0, $mes2, $dia2, $ano2);
		$dif_dias = ($data_final - $data_inicial)/86400;
		$dif_horas = ($data_final - $data_inicial)/3600;
		$dif_min = ($data_final - $data_inicial)/60;
		$dif_seg = ($data_final - $data_inicial);
		$dias = ceil ($dif_dias);
		echo "<hr>A diferença entre a data $dia/$mes/$ano até a data $dia2/$mes2/$ano2 é de $dias dias, <br>
			ou de $dif_horas horas, ou ainda de $dif_min minutos, 
			ou se preferir de $dif_seg segundos.";

?>

	</font>

</body>
</html>