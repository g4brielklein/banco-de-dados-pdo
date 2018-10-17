<?php

$conn = new pdo("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root"); //Conecta com o banco de dados

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>