<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="mt-3">
<?php flash('post_message'); ?>
</div>
<div class="contaier m-3">
        <div class="row">
           <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
              <form action="<?php echo URLROOT; ?>/voos/busca" method="post">
                <div class="input-group mb-3">
                 <input type="text" class="form-control" name="busca" placeholder="DD/MM/AAAA" type="submit" aria-describedby="basic-addon2">
                 <div class="input-group-append">
                  <button class="input-group-text" type="submit" id="basic-addon2"><i class="fa fa-search"></i></button>
                 </div>
                </div>
              </form>
            </div>
         
            <div class="col-sm-12 col-md-6 col-lg-6 pull-right">
                  <a href="<?php echo URLROOT; ?>/voos/novo">					
                  <button class="btn btn-primary" style="margin-top:20px;float:right;margin-bottom:20px;">
                    Novo voo
                  </button>
                  </a>
              </div>
             </div>
    </div>

  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">DATA</th>
      <th scope="col">HORA</th>
      <th scope="col">ROTA</th>
      <th scope="col">PREFIXO</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($data['voos'] as $voo) : ?>
    <tr>
      <td><?php echo $voo->data; ?></td>
      <td><?php echo $voo->horario; ?></td>
      <td><?php echo $voo->procedencia; ?></td>
      <td><?php echo $voo->prefixo; ?></td>
      <td>
      <?php if($voo->user_id == $_SESSION['user_id']) : ?>
        <a href="<?php echo URLROOT; ?>/voos/editar/<?php echo $voo->id; ?>"><button type="button" class="btn btn-sm btn-success btn-block">Editar</button></a>
        <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?> 

  </tbody>
</table>
       </div>

    
									
<?php require APPROOT . '/views/inc/footer.php'; ?>