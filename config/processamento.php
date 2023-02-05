<?php 

session_start();

include_once("conexao.php");
include_once("url.php");

$data = $_POST;

// Modificações no banco de dados
if(!empty($data)) {

	// Criar contato no banco
	if($data["type"] === "create") {

	$nome = $data["nome"];
	$telefone = $data["telefone"];
	$observacoes = $data["observacoes"];

	$query = "INSERT INTO contatos (nome, telefone, observacoes) VALUES (:nome, :telefone, :observacoes)";

	$stmt = $conn->prepare($query);

	$stmt->bindParam(":nome", $nome);
	$stmt->bindParam(":telefone", $telefone);
	$stmt->bindParam(":observacoes", $observacoes);

	$stmt->execute();
	$_SESSION["msg"] = "Contato adicionado com sucesso!";

} //Alterar contato no banco
	else if($data["type"] === "edit") {

	$nome = $data["nome"];
	$telefone = $data["telefone"];
	$observacoes = $data["observacoes"];
	$id = $data["id"];

	$query = "UPDATE contatos
			  SET nome = :nome, telefone = :telefone, observacoes = :observacoes 
			  WHERE id = :id";
	
	$stmt = $conn->prepare($query);

	$stmt->bindParam(":nome", $nome);
	$stmt->bindParam(":telefone", $telefone);
	$stmt->bindParam(":observacoes", $observacoes);
	$stmt->bindParam(":id", $id);

	$stmt->execute();
	$_SESSION["msg"] = "Contato alterado com sucesso!";

} //Deletar contato no banco
	else if($data["type"] === "delete") {

	$id = $data["id"];

	$query = "DELETE FROM contatos WHERE id = :id";

	$stmt = $conn->prepare($query);

	$stmt->bindParam(":id", $id);
	$stmt->execute();
	$_SESSION["msg"] = "Contato excluído com sucesso!";

}


	// Redirecionar para página principal
	header("Location:" . $BASE_URL . "../index.php");

// Seleção dos dados
} else {

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

}

// Fechar a conexão
$conn = null;

?>