<!-- Criando Menu -->
<nav class="navbar navbar-expand-lg" id="bg-header">

  <!-- Só uma imagem -->
  <a class="navbar" href="/ProjetoWeb/index.php">
    <img id="image-header" src="/ProjetoWeb/images/pizza.png" class="d-inline-block align-top" alt="">
  </a>

  <!-- Titulo -->
  <a class="navbar-brand" href="/ProjetoWeb/index.php" id="font-header"> 
    <h3>Pizzaria do Junin</h3>
  </a>

  <!-- Botões Menu -->
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <!-- Botão que redireciona para o Cardapio -->
      <li class="nav-item active" >
        <a class="nav-link" id="font-header" href="/ProjetoWeb/Menus/cardapio.php">Cardápio <span class="sr-only"></span></a>
      </li>

      <!-- Botão que redireciona para as informações do restaurante -->
      <li class="nav-item" id="font-header">
        <a class="nav-link" id="font-header" href="/ProjetoWeb/Menus/sobre.php">Sobre</a>
      </li>

    </ul>
  </div>
  
  <!-- Cria o botão com imagem para ser redirecionado a aba de Login -->
  <a class="navbar-brand" href="/ProjetoWeb/Conta/login.php">
    <img src="/ProjetoWeb/images/account2.png" width="50" height="50" class="d-inline-block align-top" >
  </a>


</nav>