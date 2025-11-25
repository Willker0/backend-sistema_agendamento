<?php
require "config.php";
session_start();

if(!isset($_SESSION['id'])){
    echo json_encode([]);
    exit;
}

$id_usuario = $_SESSION['id'];

$res = $conn->prepare("SELECT * FROM agendamentos WHERE id_usuario=? ORDER BY data_agendamento, hora_agendamento");
$res->bind_param("i", $id_usuario);
$res->execute();

$result = $res->get_result();
$lista = [];

while($l = $result->fetch_assoc()){
    $lista[] = $l;
}

echo json_encode($lista);
?>