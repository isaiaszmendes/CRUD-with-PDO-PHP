<?php 
/**
 * [getConnection description]
 * @return PDO
 */
function getConnection(){	
	$dsn  = 'mysql:host=localhost;dbname=mercadophp;charset=utf8'; // Banco, Host nomeDoBanco
	$user = 'root'; // user
	$pass = ''; // password

	try { 

		$pdo = new PDO($dsn, $user, $pass);	

		return $pdo;

	} catch (PDOException $e) {

		echo 'Erro: '. $e->getMessage();

	}
}

/**
 * $dns = É o nome da fonte de dados, ou seja é o nome do SGBD que nesse caso é o MySQL
 */