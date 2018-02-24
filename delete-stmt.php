<?php 
include './connection.php';
// chamada a função da conexão com o banco
$conn = getConnection();

$sql = 'DELETE FROM produto WHERE id = :id';

$stmt = $conn->prepare($sql);

$id = 4;

$stmt->bindParam(':id',$id);

if($stmt->execute()){
	echo "Excluido com sucesso!";
}else{
	echo "Erro ao excluir!";
}