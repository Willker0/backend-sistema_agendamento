<?php
require "config.php";

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if(!$nome || !$email || !$senha){
    echo "erro";
    exit;
}

$hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome,email,senha) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $hash);

if($stmt->execute()){
    echo "ok";
} else {
    echo "erro";
}
?>