<?php 
    include_once("templates/header.php");
?>

  	<div class="container">
        <?php include_once("templates/back.html"); ?>
        <h1 id="main-title">Novo contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/processamento.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="nome">Nome do contato:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone do contato:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
            </div>
            <div class="form-group">
                <label for="observacoes">Observações:</label>
                <textarea type="text" class="form-control" id="observacoes" name="observacoes" placeholder="Insira as observações do contato"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" id="bt-cadastro">Cadastrar</button>
        </form>
    </div>
<?php 
    include_once("templates/footer.php");
?>