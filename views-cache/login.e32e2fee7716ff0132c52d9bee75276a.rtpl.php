<?php if(!class_exists('Rain\Tpl')){exit;}?>  <body>

    <div class="container">
      <div class="row">
        <div class="col"></div>
        <div class="col-lg-4">
          <br>
          <div class="text-center">
            <img src="../res/img/logo.png" class="img-fluid">
            <div class="pt-2"><strong>GERADOR DE CERTIFICADOS</strong></div>
            <br>
            <h2>Faça Login</h2>
          </div>
          <form class="border rounded px-3 py-3" data-js="form" method="POST" action="/logar">
            <div class="form-group">
              <label for="email">Email: </label>
              <input type="email" name="email" id="email" class="form-control" placeholder="informe o seu email" data-js="email">
            </div>
            <div>
              <input type="submit" name="enviar" value="Logar" class="btn btn-success btn-block">
            </div>
          </form>
        </div>
        <div class="col"></div>
      </div>
    </div>

