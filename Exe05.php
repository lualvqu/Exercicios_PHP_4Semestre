<!DOCTYPE html>
<html>
<head>
	<title>Exercício 05</title>
	<?php
		$qtde = $_POST["QTD"];
		$nome = $_POST["NOM"];
	?>
	<style type="text/css">
		h1{
			text-align: center;
		}
		h3{
			text-align: center;
		}
	</style>
</head>
<body>
<h1>Exercício 05 - Equipes com até 4 Alunos</h1>
<h3>Condicional com switch()</h3>
<hr>
<?php
	echo "<h3>Aviso ao representante $nome</h3>";

	switch ($qtde) {
		case 1: case 2: case 3: case 4:
			echo "<h3>A equipe com $qtde alunos foi aceita!</h3>";
			break;
		
		default:
			echo "<h3>A equipe com $qtde alunos nao foi aceita!</h3> ";
			break;
	}
?>
</body>
</html>