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
      <div class="autoComplete_wrapper">
      <input type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" placeholder="Nome" name="name" id="autoComplete" dir="ltr" spellcheck="false" autocorrect="off" autocomplete="off" autocapitalize="off">
      <span class="invalid-feedback"><?php echo $data['name_err']; ?>
      </div>
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

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Cpf:</label>
    <input type="text" class="form-control <?php echo (!empty($data['cpf_err'])) ? 'is-invalid' : ''; ?>" placeholder="Cpf" name="cpf">
    <span class="invalid-feedback"><?php echo $data['cpf_err']; ?>
  </div>

  <div class="form-group col-md-6">
    <label>DOB:</label>
    <input type="text" class="form-control <?php echo (!empty($data['dob_err'])) ? 'is-invalid' : ''; ?>" placeholder="DOB" name="dob">
    <span class="invalid-feedback"><?php echo $data['dob_err']; ?>
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Embarque:</label>
    <input type="text" class="form-control <?php echo (!empty($data['embarque_err'])) ? 'is-invalid' : ''; ?>" placeholder="Embarque" name="embarque">
    <span class="invalid-feedback"><?php echo $data['embarque_err']; ?>
  </div>

  <div class="form-group col-md-6">
    <label>Desembarque:</label>
    <input type="text" class="form-control <?php echo (!empty($data['desembarque_err'])) ? 'is-invalid' : ''; ?>" placeholder="Desembarque" name="desembarque">
    <span class="invalid-feedback"><?php echo $data['desembarque_err']; ?>
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Celular:</label>
    <input type="text" class="form-control <?php echo (!empty($data['celular_err'])) ? 'is-invalid' : ''; ?>" placeholder="Celular" name="celular">
    <span class="invalid-feedback"><?php echo $data['celular_err']; ?>
  </div>

  <div class="form-group col-md-6">
    <label>Email:</label>
    <input type="text" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" placeholder="Email" name="email">
    <span class="invalid-feedback"><?php echo $data['email_err']; ?>
  </div>
  </div>

<div class="row mb-3 mt-2">
<div class="col">
<button class="btn btn-success" type="submit" name="atualiza">Salvar <i class="fa fa-floppy-o"></i></button>

</div>
</div>
</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>