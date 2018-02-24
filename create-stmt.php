<?php 
include './connection.php';
// chamada a função da conexão com o banco
$conn = getConnection(); 

$sql = 'INSERT INTO tbl_name (campo1,campo2, campo3) VALUES (:cmp1,:cmp2,:cmp3)';
// $sql = 'INSERT INTO produto (campo1,campo2, campo3) VALUES (?,?,?)';

$stmt = $conn->prepare($sql);

$campo1 = 'Valor';
$campo2 = 2;
$campo3 =  2.80;
# Passagem por parametro
$stmt->bindParam(':cmp1',$campo1);
$stmt->bindParam(':cmp1',$campo2);
$stmt->bindParam(':cmp1',$campo3);

// $stmt->bindValue(1,'Valor');
// $stmt->bindValue(2,2);
// $stmt->bindValue(3,2.80);

if($stmt->execute()){

	echo "Salvo com sucesso!";

}else{
	
	echo "Ops! Erro ao salvar!";
}

/**
 * Maneira recomendada pois trata os valores 
 */
