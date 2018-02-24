<?php 
include './connection.php';
// chamada a função da conexão com o banco
$conn = getConnection();

$sql = "SELECT * FROM produto WHERE id = :id ";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id','1');
$stmt->execute();

$result = $stmt->fetchAll();

foreach ($result as $value) {
	echo 'Desc: '.$value['descricao'].' Quant: '.$value['qtd']. ' Valor: '.$value['valor']. '<br>';
}