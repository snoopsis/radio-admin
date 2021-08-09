<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="mt-3">
<?php flash('post_message'); ?>
</div>
<div class="contaier m-3">
        <div class="row">
           <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
           <form action="<?php echo URLROOT; ?>/contatos/busca" method="post">
                <div class="input-group mb-3">
                <div class="autoComplete_wrapper">
            <input
        id="contatosNames"
        type="search"
        dir="ltr"
        spellcheck="false"
        autocorrect="off"
        autocomplete="off"
        autocapitalize="off"
        name="busca"
      />
      </div>
                 <div class="input-group-append">
                  <button class="input-group-text" type="submit" id="basic-addon2"><i class="fa fa-search"></i></button>
                 </div>
                </div>
              </form>
            </div>
         
            <div class="col-sm-12 col-md-6 col-lg-6 pull-right">
                  <a href="<?php echo URLROOT; ?>/contatos/novo">					
                  <button class="btn btn-primary" style="margin-top:20px;float:right;margin-bottom:20px;">
                    Novo Contato
                  </button>
                  </a>
              </div>
             </div>
    </div>

  <div class="card-deck mb-3 text-center">
  <?php foreach($data['contatos'] as $contato) : ?>
  <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card mb-3 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo $contato->um; ?></h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mb-4">
          <li><?php echo $contato->telefone; ?></li>
          <li class="mb-2"><?php echo $contato->ramal_pb; ?></li>
          <li><?php echo $contato->email; ?></li>
        </ul>
        <?php if($contato->user_id == $_SESSION['user_id']) : ?>
        <a href="<?php echo URLROOT; ?>/contatos/editar/<?php echo $contato->id; ?>"><button type="button" class="btn btn-md btn-success">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
    <?php endforeach; ?> 
       </div>

    
									
<?php require APPROOT . '/views/inc/footer.php'; ?>