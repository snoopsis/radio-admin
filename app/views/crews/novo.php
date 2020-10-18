<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
<div class="col">
<a href="<?php echo URLROOT; ?>/crews" class="btn btn-primary mt-2 pull-right"><i class="fa fa-backward"></i> Voltar</a>
</div>
</div>
<form method="post" action="<?php echo URLROOT; ?>/crews/novo">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nome</label>
      <input type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" placeholder="Nome" name="name">
      <span class="invalid-feedback"><?php echo $data['name_err']; ?>
    </div>
  <div class="form-group col-md-6">
    <label>Sispat:</label>
    <input type="text" class="form-control <?php echo (!empty($data['sispat_err'])) ? 'is-invalid' : ''; ?>" placeholder="Sispat" name="sispat">
    <span class="invalid-feedback"><?php echo $data['sispat_err']; ?>
  </div>
 </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Cabin</label>
    <input type="text" class="form-control <?php echo (!empty($data['cabin_err'])) ? 'is-invalid' : ''; ?>" placeholder="Cabin" name="cabin">
    <span class="invalid-feedback"><?php echo $data['cabin_err']; ?>
  </div>
  <div class="form-group col-md-6">
    <label>Nacionalidade:</label>
    <input type="text" class="form-control <?php echo (!empty($data['country_err'])) ? 'is-invalid' : ''; ?>" placeholder="Nacionalidade" name="country">
    <span class="invalid-feedback"><?php echo $data['country_err']; ?>
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Empresa</label>
    <input type="text" class="form-control <?php echo (!empty($data['company_err'])) ? 'is-invalid' : ''; ?>" placeholder="Empresa" name="company">
    <span class="invalid-feedback"><?php echo $data['company_err']; ?>
  </div>
  <div class="form-group col-md-6">
    <label>Rank:</label>
    <input type="text" class="form-control <?php echo (!empty($data['funcao_err'])) ? 'is-invalid' : ''; ?>" placeholder="Rank" name="funcao">
    <span class="invalid-feedback"><?php echo $data['funcao_err']; ?>
  </div>
  </div>

<div class="row mb-3 mt-2">
<div class="col">
<button class="btn btn-success" type="submit" name="atualiza">Salvar <i class="fa fa-floppy-o"></i></button>

</div>
</div>
</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>