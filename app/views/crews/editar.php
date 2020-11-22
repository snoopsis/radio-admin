<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
<div class="col">
<a href="<?php echo URLROOT; ?>/crews" class="btn btn-primary mt-2 pull-right"><i class="fa fa-backward"></i> Voltar</a>
</div>
</div>
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nome</label>
      <input type="text" class="form-control" placeholder="Nome" name="name" value="<?php echo $data['name']; ?>">
    </div>
  <div class="form-group col-md-6">
    <label>Sispat:</label>
    <input type="text" class="form-control" placeholder="Sispat" name="sispat" value="<?php echo $data['sispat']; ?>">
  </div>
 </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Cabin</label>
    <input type="text" class="form-control" placeholder="Cabin" name="cabin" value="<?php echo $data['cabin']; ?>">
  </div>
  <div class="form-group col-md-6">
    <label>Nacionalidade:</label>
    <input type="text" class="form-control" placeholder="Nacionalidade" name="country" value="<?php echo $data['country']; ?>">
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Empresa</label>
    <input type="text" class="form-control" placeholder="Empresa" name="company" value="<?php echo $data['company']; ?>">
  </div>
  <div class="form-group col-md-6">
    <label>Rank:</label>
    <input type="text" class="form-control" placeholder="Rank" name="funcao" value="<?php echo $data['funcao']; ?>">
  </div>
  </div>

<div class="form-row">
  <div class="form-group col-md-6">
    <label>Cpf:</label>
    <input type="text" class="form-control" placeholder="Cpf" name="cpf" value="<?php echo $data['cpf']; ?>">
  </div>

  <div class="form-group col-md-6">
    <label>DOB:</label>
    <input type="text" class="form-control" placeholder="DOB" name="dob" value="<?php echo $data['dob']; ?>">
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Embarque:</label>
    <input type="text" class="form-control" placeholder="Embarque" name="embarque" value="<?php echo $data['embarque']; ?>">
  </div>

  <div class="form-group col-md-6">
    <label>Desembarque:</label>
    <input type="text" class="form-control" placeholder="Desembarque" name="desembarque" value="<?php echo $data['desembarque']; ?>">
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Celular:</label>
    <input type="text" class="form-control" placeholder="Celular" name="celular" value="<?php echo $data['celular']; ?>">
  </div>

  <div class="form-group col-md-6">
    <label>Email:</label>
    <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $data['email']; ?>">
  </div>
  </div>

<div class="row mb-3 mt-2">
<div class="col">
<button class="btn btn-success" type="submit" name="atualiza" formaction="<?php echo URLROOT; ?>/crews/editar/<?php echo $data['id']; ?>">Atualizar <i class="fa fa-floppy-o"></i></button>

<button type="submit" class="btn btn-danger" style="float: right;" style="" formaction="<?php echo URLROOT; ?>/crews/delete/<?php echo $data['id']; ?>">Apaga <i class="fa fa-trash"></i></button>
</div>
</div>
</form>

<?php require APPROOT . '/views/inc/footer.php'; ?>