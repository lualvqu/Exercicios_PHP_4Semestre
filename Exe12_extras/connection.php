<?php
	
	require 'config_bd.php';

	//Abre uma conexao com o banco
	function DBConnect(){
		$link = @mysqli_connect(DB_HOSTNAME, DB_USER, DB_PASS, DB_DATABASE) or die(mysqli_connect_error());
		mysqli_set_charset($link, 'utf8') or die(mysqli_error($link));

		return $link;
	}

	//Fechar a conxao com o banco
	function DBClose($link){
		@mysqli_close($link) or die(mysqli_error($link));
	}

	//Proteger contra sqlinjection
	function DBEscape($dados){
		$link = DBConnect();
		
		if(!is_array($dados)){
			$dados = mysqli_real_escape_string($link, $dados);
		}
		else{
			$arr = $dados;

			foreach ($arr as $key => $value) {
				$key = mysqli_real_escape_string($link, $key);
				$value = mysqli_real_escape_string($link, $value);
				$dados[$key] = $value;
			}
		}
		DBClose($link);
		return $dados;
	}

	//Exercutar querys no banco de dados
	function DBExecute($query){
		$link = DBConnect();
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		
		DBClose($link);
		return $result;
	}

	//Inserir uinformações em tabelas no banco de dados
	function DBCreate($table, array $data){
		$data = DBEscape($data);

		$fields = implode(', ', array_keys($data));
		$values	= "'".implode("', '", $data)."'";

		$query = "INSERT INTO {$table} ({$fields}) values ({$values}) ";

		return DBExecute($query);
	}

	//Ler registros de tabelas no banco
	function DBRead($table, $params = null, $fields = "*"){

		$params = ($params) ? " {$params}" : null;

		$query = "SELECT {$fields} FROM {$table}{$params}";

		$result = DBExecute($query);

		if(!mysqli_num_rows($result))
			return false;
		else{
			while ($res = mysqli_fetch_assoc($result)) {
				$data[] = $res;
			}
			return $data;
		}

	}

	//Atualizando dados no banco
	function DBUpdate($table, array $data, $where = null){

		foreach ($data as $key => $value) {
			$fields[] = "{$key} = '{$value}'";
		}
		
		$fields = implode(', ', $fields);
		
		$where = ($where) ? " WHERE {$where}" : null; 

		$query = "UPDATE {$table} SET {$fields}{$where}";

		return DBExecute($query);
	}
?>