<?php
require_once 'head.php';
require_once 'menu.php';
?>
  
<div class='container-fluid texto'>
    <div class='row'>
        <div class='col-md-12 text-center'>
            <h2>Conheça nossa loja!</h2>
        </div>
    </div>
</div>

<div class="container-fluid imagens">
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/top.jpg" alt="Imagem de capa do card">
            <div class="card-body">
            <h2 class="card-text">Top Flex</h2>
            <h3>R$ 49,90</h3>
       <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#um">
            Comprar
            </button>
          </div>
      </div>
    </div>
        
    <div class="col-md-3">
        <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/leg.jpg" alt="Imagem de capa do card">
        <div class="card-body">
        <h2 class="card-text">Leg Sport</h2>
        <h3>R$ 50,00</h3>
            <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dois">
        Comprar
        </button>
     </div>
  </div>
</div>

<div class="col-md-3">
        <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/conj.jpg" alt="Imagem de capa do card">
        <div class="card-body">
        <h2 class="card-text">Conjunto Sport</h2>
        <h3>R$ 90,00</h3>
            <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tres">
        Comprar
        </button>
     </div>
  </div>
</div>

        <!-- Modal -->
<div class="modal fade" id="um" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Flex</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="imagens/top.jpg" class="img-fuid">
        <p> Top para esporte.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

        <!-- Modal -->
<div class="modal fade" id="dois" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Leg Sport</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="imagens/leg.jpg" class="img-fuid">
        <p> leg Confortável.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="tres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto Sport</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="imagens/conj.jpg" class="img-fuid">
        <p>Conjunto com custura reforcada.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

<?php
require_once 'footer.php';
?>