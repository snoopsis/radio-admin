<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
<div class="col-md-6 mx-auto">
<div class="card card-body bg-light mt-4">
<h2>Crie uma Conta</h2>
<p>Por favor preencha o formulario para se cadastrar conosco</p>
<form action="<?php echo URLROOT; ?>/users/register" method="post">

<div class="form-group">
<label for="name">Nome: <sup>*</sup></label>
<input type="text" name="name" id="nome" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
<span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
</div>

<div class="form-group">
<label for="email">Email: <sup>*</sup></label>
<input type="email" name="email" id="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
<span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
</div>


<div class="form-group">
<label for="cpf">Cpf ou LPNA: <sup>*</sup></label>
<input type="text" name="cpf" class="form-control form-control-lg <?php echo (!empty($data['cpf_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['cpf']; ?>">
<span class="invalid-feedback"><?php echo $data['cpf_err']; ?></span>
</div>

<div class="form-group">
<label for="password">Senha: <sup>*</sup></label>
<input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
<span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
</div>

<div class="form-group">
<label for="confirm_password">Confirme Senha: <sup>*</sup></label>
<input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>" id="enviar">
<span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
</div>

<div class="row">
<div class="col">
<input type="submit" class="btn btn-success btn-block" id="enviado" value="Registro">
</div>
<div class="col">
<a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Ja tem uma conta? Entrar</a>
</div>
</div>
</form>
</div>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
