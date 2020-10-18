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

  <div class="card-deck mb-3 text-center">
  <?php foreach($data['voos'] as $voo) : ?>
  <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card mb-3 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo $voo->procedencia; ?></h4>
      </div>
      <div class="card-body">
      <span class="badge badge-primary" style="font-size:18px;padding:5px;"><?php echo $voo->data; ?></span>
      </p><span class="badge badge-secondary" style="font-size:14px;"><?php echo $voo->obs; ?></span></p>
      <div class="row">
      <div class="col">
      <h6><?php echo $voo->horario; ?></h6>
      <h6><?php echo $voo->empresa_tt; ?></h6>
      <h6><?php echo $voo->numero; ?></h6>
      </div>
      <div class="col">
      <h6><?php echo $voo->prefixo; ?></h6>
      <h6><?php echo $voo->modelo; ?></h6>
      <h6><?php echo $voo->companhiaAerea; ?></h6>
      </div>
      </div>
      <p class="mt-3 mb-4"><?php echo $voo->troca_pax; ?></p>
        <?php if($voo->user_id == $_SESSION['user_id']) : ?>
        <a href="<?php echo URLROOT; ?>/voos/editar/<?php echo $voo->id; ?>"><button type="button" class="btn btn-sm btn-success btn-block">Editar</button></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
    <?php endforeach; ?> 
       </div>

    
									
<?php require APPROOT . '/views/inc/footer.php'; ?>