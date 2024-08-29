  <!-- Chama os arquivos de CSS, JS e Menu Topo -->
<?php include "../css.php" ?>
<?php include "headerConta.php" ?>

  <!-- Cria a tela Login -->
<div class="mx-auto" style="width: 300px;">
    <body class="text-center">
        <form class="form-signin">

                    <!-- Coloca a Imagem de Conta -->
                <img class="mb-4" src="/ProjetoWeb/images/account.png" alt="" width="72" height="72">

                    <!-- Texto Login -->
                <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>

                    <!-- Criando o campo de Email -->
                <label for="inputEmail" class="sr-only">Endereço de email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required="" autofocus="">
                <br>

                    <!-- Criando o campo de Senha -->
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
                <br>

                    <!-- Criando o botão para a tela de Cadastro de Conta -->
                <a href="cadastro.php">Cadastras-se </a>

                    <!-- Criando o Botão para Logar -->
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                <p class="mt-5 mb-3 text-muted">© 2024-2024</p>   
        </form>
    </body>
</div>

<?php include "../footer.php" ?>