<?php include "../css.php" ?>
<?php include "headerConta.php" ?>

<div id="page-container">
        <div id="content-wrap">
            <!-- Conteúdo da página -->
            
            <div class="gap-conta">
              <!-- Crian Tela Cadastro -->
              <form class="container">
                <h3 id="cadastre-se">Cadastre-se </h3>
                <div class="form-row" style="width: 622px;" id="child">
                  
                  <!-- Cria coluna para Nome -->
                  <div class="col" id="child">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome">
                  </div>
                  
                  <!-- Cria coluna para Sobrenome -->
              <div class="col" id="child">
                <label for="exampleInputEmail1">Sobrenome</label>
                <input type="text" class="form-control" placeholder="Sobrenome">
              </div>
              
            </div>
            <div class="form-group" style="width: 610px;" id="child">
              <!-- Cria couna para Email-->
              <label for="exampleInputEmail1">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
              <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
            
            <!-- Cria coluna para Senha-->
            <div class="form-group" style="width: 610px;" id="child">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            
            <div class="form-group" style="width: 610px;" id="child">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
            </div>
            <div class="form-group" style="width: 610px;" id="child">
              <label for="inputAddress2">Endereço 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
            </div>
            <div class="form-row" style="width: 610px;" id="child">
              <div class="form-group col-md-6" id="child">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4" style="width: 610px;" id="child">
                <label for="inputEstado">Estado</label>
                <select id="inputEstado" class="form-control" placeholder="Escolher...">
                  <option></option>
                  <option value="AC">AC</option>
                  <option value="AL">AL</option>
                  <option value="AP">AP</option>
                  <option value="AM">AM</option>
                  <option value="BA">BA</option>
                  <option value="CE">CE</option>
                  <option value="DF">DF</option>
                  <option value="ES">ES</option>
                  <option value="GO">GO</option>
                  <option value="MA">MA</option>
                  <option value="MT">MT</option>
                  <option value="MS">MS</option>
                  <option value="MG">MG</option>
                  <option value="PA">PA</option>
                  <option value="PB">PB</option>
                  <option value="PR">PR</option>
                  <option value="PE">PE</option>
                  <option value="PI">PI</option>
                  <option value="RJ">RJ</option>
                  <option value="RN">RN</option>
                  <option value="RS">RS</option>
                  <option value="RO">RO</option>
                  <option value="RR">RR</option>
                  <option value="SC">SC</option>
                  <option value="SP">SP</option>
                  <option value="SE">SE</option>
                  <option value="TO">TO</option>
                  
                </select>
              </div>
              <div class="form-group col-md-2" style="width: 610px;" id="child">
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control" id="inputCEP">
              </div>
            </div>
            
            <br>
            <center>
              <button type="submit" id="btn-conta" class="btn btn-primary">Enviar</button>
            </center>
          </form>
        </div>
      </div>
  </div>
  <?php include "footerConta.php" ?>
<div class="bg-cadastro-login"> 
  