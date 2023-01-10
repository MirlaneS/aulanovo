<?php
         include_once 'conexao.php';
?>
 
 <?php 

      $dados = filter_input_array(input_post, filter_default);

?>
 
 <div class="containes">
    <div class="row">
     <div class="col-md-4"> </div>
    <div class="col-md-4">
 
      
<form id="login-form" class="form" action="" method="post"> 

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">E-mail</label>
    <input type="email"  name="usuario id="form2Example1" class="form-control"/>
   
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Senha</label>
    <input type="password" name="senha" id="form2Example2" class="form-control"/>
    
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Lembrar-me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Esqueceu a senha?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Não e Membro? <a href="#!">Registrar</a></p>
    
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>

</div>
<div class="col-md-4"> </div>

</div>
</div>

 