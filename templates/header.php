<?php 

include_once("config/url.php");
include_once("config/processamento.php");

// Limpa a mensagem da sessão
if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Agenda de Contatos</title>
 	<!-- BOOTSTRAP -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 	<!-- FONT AWESOME -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 	<!-- CSS -->
 	<link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
 </head>
 <body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="<?= $BASE_URL ?>index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
              <img src="https://cdn-icons-png.flaticon.com/512/179/179871.png" width="40" height="40" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="<?= $BASE_URL ?>index.php" class="nav-link px-2 link-secondary">Agenda</a></li>
              <li><a href="<?= $BASE_URL ?>create.php" class="nav-link px-2 link-dark">Adicionar Contato</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
            </form>

            <div class="dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="img-user" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small" style="">
                <li><a class="dropdown-item" href="#">Opção 1</a></li>
                <li><a class="dropdown-item" href="#">Opção 2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>