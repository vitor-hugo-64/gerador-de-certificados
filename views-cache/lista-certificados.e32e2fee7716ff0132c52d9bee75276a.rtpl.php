<?php if(!class_exists('Rain\Tpl')){exit;}?>    <div class="container">
      <div class="row">
        <div class="col">
          <div class="px-1 py-3 text-center">
            <h2>Estes são os seus certificados já disponíveis</h2>
            <div>
              <strong>Em caso de dúvida entrar em contato com 'cpa@liberato.com.br'</strong>
            </div>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Livro</th>
                <th scope="col">Folha</th>
                <th scope="col">Registro</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Evento</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
              <?php $counter1=-1;  if( isset($datas) && ( is_array($datas) || $datas instanceof Traversable ) && sizeof($datas) ) foreach( $datas as $key1 => $value1 ){ $counter1++; ?>
                <tr>
                  <th><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                  <td><?php echo htmlspecialchars( $value1["Livro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["Folha"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["Registro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["evento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><a href="/certificado/<?php echo htmlspecialchars( $value1["Livro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["Folha"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["Registro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["evento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-sm btn-outline-primary">Gerar Certificado</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>