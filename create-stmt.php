<?php 
include './connection.php';
// chamada a função da conexão com o banco
$conn = getConnection(); 

$sql = 'INSERT INTO produto (descricao,qtd, valor) VALUES (:dec,:qtd,:valor)';
// $sql = 'INSERT INTO produto (descricao,qtd, valor) VALUES (?,?,?)';

$stmt = $conn->prepare($sql);

$descricao = 'Açúcar';
$qtd = 2;
$valor =  2.80;
# Passagem por parametro
$stmt->bindParam(':dec',$descricao);
$stmt->bindParam(':qtd',$qtd);
$stmt->bindParam(':valor',$valor);

// $stmt->bindValue(1,'Feijão');
// $stmt->bindValue(2,5);
// $stmt->bindValue(3,5.50);

if($stmt->execute()){

	echo "Salvo com sucesso!";

}else{
	
	echo "Erro ao salvar!";
}

/**
 * Maneira recomendada pois trata os valores 
 */