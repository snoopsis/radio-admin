<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="mt-3">
<?php flash('post_message'); ?>
</div>
<div class="contaier m-3">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
            <form action="<?php echo URLROOT; ?>/chegadas/busca" method="post">
            <div class="input-group mb-3">
                 <input type="text" class="form-control" name="busca" placeholder="Procurar Chegadas" type="submit" aria-describedby="basic-addon2">
                 <div class="input-group-append">
                  <button class="input-group-text" type="submit" id="basic-addon2"><i class="fa fa-search"></i></button>
                 </div>
                </div>
            </form>
          </div>
         
    </div>
<table class="table table-hover table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Empresa</th>
      <th scope="col">Rank</th>
      <th scope="col">Nacionalidade</th>
      <th scope="col">CPF</th>
      <th scope="col">Nascimento</th>
      <th scope="col">Email</th>
      <th scope="col">Genero</th>
      <th scope="col">Celular</th>
      <th scope="col">Nok Nome</th>
      <th scope="col">Nok Cel</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['chegadas'] as $chegada) : ?>
    <tr>
      <td><?php echo $chegada->nome; ?></td>
      <td><?php echo $chegada->empresa; ?></td>
      <td><?php echo $chegada->posicao; ?></td>
      <td><?php echo $chegada->nacionalidade; ?></td>
      <td><?php echo $chegada->cpf; ?></td>
      <td><?php echo $chegada->nascimento; ?></td>
      <td><?php echo $chegada->email; ?></td>
      <td><?php echo $chegada->genero; ?></td>
      <td><?php echo $chegada->celular; ?></td>
      <td><?php echo $chegada->nok_nome; ?></td>
      <td><?php echo $chegada->nok_tel; ?></td>
      <form method="post" action="<?php echo URLROOT; ?>/chegadas/delete/<?php echo $chegada->id; ?>">
      <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
      </form>
    </tr>
    <?php endforeach; ?> 
  </tbody>
</table>

<?php require APPROOT . '/views/inc/footer.php'; ?>