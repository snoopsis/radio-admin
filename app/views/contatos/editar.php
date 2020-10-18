<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
<div class="col">
<a href="<?php echo URLROOT; ?>/contatos" class="btn btn-primary mt-2 pull-right"><i class="fa fa-backward"></i> Voltar</a>
</div>
</div>
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>ID</label>
      <input type="text" class="form-control" placeholder="ID" name="id" value="1" readonly>
    </div>
  <div class="form-group col-md-6">
    <label>Unidade Maritima:</label>
    <input type="text" class="form-control" placeholder="Unidade Maritima" name="um" value="<?php echo $data['um']; ?>">
  </div>
 </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Telefone</label>
    <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="<?php echo $data['telefone']; ?>">
  </div>
  <div class="form-group col-md-6">
    <label>Ramal Petrobras:</label>
    <input type="text" class="form-control" placeholder="Ramal PB" name="ramal_pb" value="<?php echo $data['ramal_pb']; ?>">
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $data['email']; ?>">
  </div>
  <div class="form-group col-md-6">
    <label>Empresa:</label>
    <input type="text" class="form-control" placeholder="Empresa" name="empresa" value="<?php echo $data['empresa']; ?>">
  </div>
  </div>

<div class="row mb-3 mt-2">
<div class="col">
<button class="btn btn-success" type="submit" name="atualiza" formaction="<?php echo URLROOT; ?>/contatos/editar/<?php echo $data['id']; ?>">Atualizar</button>

<button type="submit" class="btn btn-danger" style="float: right;" style="" formaction="<?php echo URLROOT; ?>/contatos/delete/<?php echo $data['id']; ?>">Apaga</button>
</div>
</div>
</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>