<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 09</title>
	<meta charset="utf-8">
	<?php
		$preco = $_POST['PGTO'];
		$qtde = $_POST['QTDE'];
		$cid = $_POST['CIDADE'];
	?>
	<style type="text/css">
		body{
			background-color: lightgreen;
			color: green;
		}
	</style>
</head>
<body>
	<center>
		<h1>Exercicio 09 - Compra de Livro</h1>
		<h3>Lucas Alves - Thiago Bussolin</h3>
		<hr>
		<h4>
			<?php
				$total = $preco*$qtde;
				echo "Você comprou $qtde livros por R$ ". number_format($preco, 2, ',', '.') ." cada um, totalizando R$ ". number_format($preco*$qtde, 2, ',', '.'). ". <p>";
				echo "As taxas e impostos de 8,25%, totalizando R$ ". number_format($total*0.0825, 2, ',', '.').".<p>";
				switch ($cid) {
					case 'SA':
						$frete = 1;
						$cidade = 'Santo André';
						break;
					case 'SB':
						$frete = 2;
						$cidade = 'Santo Bernardo';
						break;
					case 'SC':
						$frete = 5;
						$cidade = 'São Caetano';
						break;
					case 'OU':
						$frete = 10;
						$cidade = 'Outras';
						break;		
				}
				echo "O frete para a $cidade é de ". number_format($frete, 2, ',', '.') ."%, totalizando R$ ". number_format(($frete/100)*$total, 2, ',', '.').".</h4>";

				if($preco==10){
					$forma = "à vista";
				}
				elseif($preco==12){
					$forma = "em 2 vezes";	
				}
				elseif($preco==15){
					$forma = "em 3 vezes";	
				}

				echo "<h3>O valor total de seu pedido é de R$ ". number_format(($total*1.0825)+($total*($frete/100)), 2, ',', '.') .", para pagar $forma.</h3>";

			?>
		
	</center>
</body>
</html>