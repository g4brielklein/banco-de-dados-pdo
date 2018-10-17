<?php

$conn = new pdo("mysql:dbname=dbphp7;host=localhost","root",""); //Conecta com o banco de dados

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>