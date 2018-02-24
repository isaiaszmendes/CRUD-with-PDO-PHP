<?php 
include './connection.php';
// chamada a função da conexão com o banco
$conn = getConnection();

$sql = "INSERT INTO produto (descricao,qtd,valor) VALUES ('Sal', '5', '1.50')";

if ($conn->exec($sql)){

	echo "Executado com sucesso!";

}else{

	echo "Erro ao executar!";
}

/**
 * Maneira não ultilizada por conta do SQL injection
 */
