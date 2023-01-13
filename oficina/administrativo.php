<?php
require_once 'head.php';
session_start();
	ob_start();

//include_once 'conexao.php';
?>

<?php
echo "Bem vindo(a)" . $_SESSION['nome'];

?>





<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
                    <a class="navbar-brand" href="administrador.php">Área do Administrador</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado"
                      aria-expanded="false" aria-label="Alterna navegação">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
                        </li>
                        
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Menu do Administrador
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cadastrar Clientes</a>
                            <a class="dropdown-item" href="#">Cadastrar Veículos</a>
                            <a class="dropdown-item" href="#">Pesquisar Clientes</a>
                            <a class="dropdown-item" href="#">Cadastrar Serviços</a>                           
                            <a class="dropdown-item" href="#">Cadastrar Peças</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Relatórios
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="pecas.php">Clientes e Veículos</a>
                            <a class="dropdown-item" href="acessorios.php">Funcionários</a>
                            <a class="dropdown-item" href="acessorios.php">Serviços por Período</a>
                            <a class="dropdown-item" href="acessorios.php">Serviços por OS</a>
                            <a class="dropdown-item" href="acessorios.php">Estoque</a>
                       </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="faleconosco.php"></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="loginadm.php">Login</a>
                        </li>
                     
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                      </form>
                    </div>
                  </nav>
            </div>
            
        </div>
    </div>
    <h1 class="text-center"> Área Administrativa</h1>

    <?php
          require_once 'footer.php';
          ?>