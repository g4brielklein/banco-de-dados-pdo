<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root",""); //Conecta com o banco de dados

$conn->beginTransaction(); //Inicia uma transação

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?"); // Deleta no banco

$id = 1;

$stmt->execute(array($id));

//$conn->rollback(); //Cancela transação
$conn->commit(); //Confirma transação

echo "Delete OK!";

?>