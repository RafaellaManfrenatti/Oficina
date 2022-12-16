<?php
require_once 'head.php';
 require_once 'menu.php';
?>

<h2 class="text-center">Peças</h2>

<div class="container-fluid">
        <div class="row pecas">
            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagens/bateria.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Baterias</h5>
    <p class="card-text">Baterias para carros</p>
    <p>R$240,00</p>
    <!-- Botão para acionar modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bateria">
Comprar
</button>
  </div>
</div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagens/bobina.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Bobinas</h5>
    <p class="card-text">Bobinas veiculares</p>
    <p>R$284,74</p>
        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bobina">
Comprar
</button>
  </div>
</div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagens/filtro.jfif" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Filtros</h5>
    <p class="card-text">Filtros veiculares</p>
    <p>R$38,00</p>
          <!-- Botão para acionar modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filtro">
Comprar
</button>
  </div>
</div>
            </div>
            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagens/radiador.jpeg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Radiadores</h5>
    <p class="card-text">Radiadores veiculares</p>
    <p>R$98,00</p>
       <!-- Botão para acionar modal -->
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#radiador">
Comprar
</button>
  </div>
</div>
            </div>
            
        </div>
    </div>


    <!-- Modal Bateria-->
<div class="modal fade" id="bateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bateria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/bateria.jpg">
                <p>R$240,00</p>
                <p> Bateria Delfor (unidade)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>
    <!-- Modal Bobina-->
    <div class="modal fade" id="bobina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bobina</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/bobina.jpg">
                <p>R$284,74</p>
                <p> Bobina de Ignição (unidade)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Filtro-->
    <div class="modal fade" id="filtro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filtro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/filtro.jfif">
                <p>R$38,00</p>
                <p> Filtro de ar (unidade)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>

   <!-- Modal radiador-->
   <div class="modal fade" id="radiador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Radiador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/radiador.jpeg">
                <p>R$98,00</p>
                <p> Radiadores (unidade)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>

    <?php
             require_once 'footer.php';
             ?>