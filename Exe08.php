<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 08</title>
	<meta charset="utf-8">
	<?php
		$ini = $_GET['INICIAL'];
		$fim = $_GET['FINAL'];
		$titulo = $_GET['TITULO'];
		$passo = $_GET['INCR'];
		$cor1 = $_GET['BG'];
		$cor2 = $_GET['FONT'];
	?>
</head>
<body bgcolor="<?php echo $cor1;?>" text="<?php echo $cor2;?>">
	<center>
	<h1>Exercicio 08 - Sequência Diferentes</h1>
	<h3>Lucas Alves - Thiago Bussolin</h3>
	<hr>
	<?php echo "<h3>$titulo - Exibir a sequência de $ini até $fim com passo $passo</h3>";?>
	<hr>
	<h3>
	<?php 
		$cont=0;
		for($ini;$ini<=$fim;$ini+=$passo){
			if($cont==10){
				echo "<br>";
				$cont=0;
			}
			echo "$ini ";
			$cont++;
		}
		if($cont==10){
			echo "<br>";
		}
		echo "fim !";
	?>
	</h3>
	</center>
</body>
</html>