<?php 

session_start();

include_once("conexao.php");
include_once("url.php");

$id;

if(!empty($_GET)) {
	$id = $_GET["id"];
}

// Retorna o dado de um contato
if(!empty($id)) {

	$query = "SELECT * FROM contatos WHERE id = :id";

	$stmt = $conn->prepare($query);

	$stmt->bindParam(":id", $id);

	$stmt->execute();

	$contato = $stmt->fetch();

} else { 

	// Retorna todos os contatos
	$contatos = [];

	$query = "SELECT * FROM contatos";

	$stmt = $conn->prepare($query);

	$stmt->execute();

	$contatos = $stmt->fetchAll();

}




?>