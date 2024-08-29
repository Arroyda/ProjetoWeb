<?php include "../css.php" ?>
<?php include "headerConta.php" ?>

<!-- Crian Tela Cadastro -->
<form class="container">
  <div class="form-row">

      <!-- Cria coluna para Nome -->
    <div class="col">
        <label for="exampleInputEmail1">Nome</label>
      <input type="text" class="form-control" placeholder="Nome">
    </div>

      <!-- Cria coluna para Sobrenome -->
    <div class="col">
        <label for="exampleInputEmail1">Sobrenome</label>
      <input type="text" class="form-control" placeholder="Sobrenome">
    </div>

  </div>
  
  <div class="form-group">
    <!-- Cria couna para Email-->
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>

  <!-- Cria coluna para Senha-->
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>

</form>

<?php include "../footer.php" ?>