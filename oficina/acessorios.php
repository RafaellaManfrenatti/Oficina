<?php
require_once 'head.php';
 require_once 'menu.php';
?>

<h2 class="text-center">Acessórios</h2>

<div class="container-fluid">
        <div class="row acessorios">
            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagens/marcha.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Câmbio de marcha</h5>
    <p class="card-text">Câmbio de marcha</p>
    <p>R$50,00</p>
    <!-- Botão para acionar modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#marcha">
Comprar
</button>
  </div>
</div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagens/retrovisor.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Retrovisores</h5>
    <p class="card-text">Retrovisor veicular</p>
    <p>R$65,74</p>
        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#retrovisor">
Comprar
</button>
  </div>
</div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagens/volante.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Volante</h5>
    <p class="card-text">Volante esportivo</p>
    <p>R$338,00</p>
          <!-- Botão para acionar modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#volante">
Comprar
</button>
  </div>
</div>
            </div>
            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagens/pneu.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Pneus</h5>
    <p class="card-text">Pneu aro 15</p>
    <p>R$398,00</p>
       <!-- Botão para acionar modal -->
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pneu">
Comprar
</button>
  </div>
</div>
            </div>
            
        </div>
    </div>


    <!-- Modal marcha-->
<div class="modal fade" id="marcha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Marcha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/marcha.jpg">
                <p>R$50,00</p>
                <p> Câmbio de Marcha (unidade)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>
    <!-- Modal Retrovisor-->
    <div class="modal fade" id="retrovisor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Retrovisor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/retrovisor.jpg">
                <p>R$68,74</p>
                <p> Retrovisor (unidade)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Volante-->
    <div class="modal fade" id="volante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Volante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/volante.jpg">
                <p>R$338,00</p>
                <p> Volante (unidade)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>

   <!-- Modal Pneu-->
   <div class="modal fade" id="pneu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pneu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/pneu.jpg">
                <p>R$398,00</p>
                <p> Pneu (unidade)</p>
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


