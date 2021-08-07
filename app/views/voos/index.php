<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="mt-3">
<?php flash('post_message'); ?>
</div>
<div class="contaier m-3">
        <div class="row">
           <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
              
                <div class="input-group mb-3">
                 <input type="text" class="form-control" name="busca" placeholder="DD/MM/AAAA" type="submit" aria-describedby="basic-addon2" id="datepicker">
                 <div class="input-group-append">
                  <button class="input-group-text" id="basic-addon2" onclick="filtra()"><i class="fa fa-search"></i></button>
                 </div>
                </div>
            
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
  <tbody id="tabela">

  </tbody>
</table>
       </div>

    
									
<?php require APPROOT . '/views/inc/footer.php'; ?>