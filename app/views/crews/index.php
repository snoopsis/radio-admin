<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="mt-3">
<?php flash('post_message'); ?>
</div>
<div class="contaier m-3">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
            <form action="<?php echo URLROOT; ?>/crews/busca" method="post">
            <div class="input-group mb-3">
                 <input type="text" class="form-control" name="busca" placeholder="Procurar Tripulante" type="submit" aria-describedby="basic-addon2">
                 <div class="input-group-append">
                  <button class="input-group-text" type="submit" id="basic-addon2"><i class="fa fa-search"></i></button>
                 </div>
                </div>
            </form>
          </div>
         
            <div class="col-sm-12 col-md-6 col-lg-6 pull-right">
                <a href="<?php echo URLROOT; ?>/crews/novo">					
                <button class="btn btn-primary" style="margin-top:20px;float:right;margin-bottom:20px;">
                  Novo Tripulante
                </button>
                </a>
            </div>
          </div>
    </div>
<table class="table table-hover table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">Cabine</th>
      <th scope="col">Funcao</th>
      <th scope="col">Nome</th>
      <th scope="col">Country</th>
      <th scope="col">Empresa</th>
      <th scope="col">Sispat</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['crews'] as $crew) : ?>
    <tr>
      <td><?php echo $crew->cabin; ?></td>
      <td><?php echo $crew->funcao; ?></td>
      <td><?php echo $crew->name; ?></td>
      <td><?php echo $crew->country; ?></td>
      <td><?php echo $crew->company; ?></td>
      <td><?php echo $crew->sispat; ?></td>
      <td><a href="<?php echo URLROOT; ?>/crews/editar/<?php echo $crew->id; ?>"><button class="btn btn-success"><i class="fa fa-pencil"></i></button></a></td>
    </tr>
    <?php endforeach; ?> 
  </tbody>
</table>
<?php require APPROOT . '/views/inc/footer.php'; ?>