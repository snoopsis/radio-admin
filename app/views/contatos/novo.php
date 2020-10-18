<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
<div class="col">
<a href="<?php echo URLROOT; ?>/contatos" class="btn btn-primary mt-2 pull-right"><i class="fa fa-backward"></i> Voltar</a>
</div>
</div>
<form action="<?php echo URLROOT; ?>/contatos/novo" method="post" class="m-form">
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group row">
													<label class="col-lg-3 col-form-label">
														Nome:
													</label>
													<div class="col-lg-6">
														<input type="text" name="um" class="form-control m-input <?php echo (!empty($data['um_err'])) ? 'is-invalid' : ''; ?>" placeholder="Unidade Maritima">
                            <span class="invalid-feedback"><?php echo $data['um_err']; ?></span>
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-3 col-form-label">
														Telefone:
													</label>
													<div class="col-lg-6">
														<input type="text" name="telefone" class="form-control m-input <?php echo (!empty($data['telefone_err'])) ? 'is-invalid' : ''; ?>" placeholder="Telefone">
                            <span class="invalid-feedback"><?php echo $data['telefone_err']; ?></span>
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-3 col-form-label">
														Ramal Petrobras:
													</label>
													<div class="col-lg-6">
														<input type="text" name="ramal_pb" class="form-control m-input <?php echo (!empty($data['ramal_pb_err'])) ? 'is-invalid' : ''; ?>" placeholder="Ramal Petrobras">
                            <span class="invalid-feedback"><?php echo $data['ramal_pb_err']; ?></span>
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-3 col-form-label">
														Email:
													</label>
													<div class="col-lg-6">
														<div class="input-group">	
															<input type="text" name="email" class="form-control m-input <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" placeholder="Email">
                              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
														</div>
													</div>
												</div>
												<div class="form-group m-form__group row">
													<label class="col-lg-3 col-form-label">
														Empresa:
													</label>
													<div class="col-lg-6">
														<div class="input-group">	
															<input type="text" name="empresa" class="form-control m-input <?php echo (!empty($data['empresa_err'])) ? 'is-invalid' : ''; ?>" placeholder="Empresa">
                              <span class="invalid-feedback"><?php echo $data['empresa_err']; ?></span>
														</div>
													</div>
												</div>
												
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions">
												<div class="row">
													<div class="col-lg-3"></div>
													<div class="col-lg-6">
													<button class="btn btn-success" type="submit">Salvar <i class="fa fa-floppy-o"></i></button>
														
													</div>
												</div>
											</div>
										</div>
									</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>