<?php

$conexao = new PDO("mysql:dbname=users;host=127.0.0.1","root");

// Declaração de uma query SQL
$statement = $conexao->prepare("INSERT INTO table_users(nameUser, emailUser) VALUES(:userName, :userEmail)");

$name = "Bruno Santos";
$email = "deltafid@gmail.com";

$statement->bindParam(':userName', $name); // Identificadores dos parâmetros
$statement->bindParam(':userEmail', $email);

$statement->execute();

echo "Dados inseridos!";

?>