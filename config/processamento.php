<?php 

session_start();

include_once("conexao.php");
include_once("url.php");

$query = "SELECT * FROM contatos";

$stmt = $conn->prepare($query);
$stmt->execute();

$contatos = $stmt->fetchAll();

?>