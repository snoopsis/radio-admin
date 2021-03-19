<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
<div class="col">
<a href="<?php echo URLROOT; ?>/voos" class="btn btn-primary mt-2 pull-right"><i class="fa fa-backward"></i> Voltar</a>
</div>
</div>

       <form action="<?php echo URLROOT; ?>/voos/novo" method="post" class="m-form">
                  <div class="row">
                    <div class="col-md-6 mb-3">
													<label for="status">
														Status:
													</label>
														<input type="text" name="obs" class="form-control m-input <?php echo (!empty($data['obs_err'])) ? 'is-invalid' : ''; ?>" placeholder="Status">
                            <span class="invalid-feedback"><?php echo $data['obs_err']; ?></span>
											</div>

											<div class="col-md-6 mb-3">
													<label for="data">
														Data:
													</label>
														<input type="text" name="data" class="form-control m-input <?php echo (!empty($data['data_err'])) ? 'is-invalid' : ''; ?>" placeholder="DD/MM/AA">
                            <span class="invalid-feedback"><?php echo $data['data_err']; ?></span>
												</div>

												 <div class="col-md-6 mb-3">
													<label for="horario">
														Horario:
													</label>
														<input type="text" name="horario" class="form-control m-input <?php echo (!empty($data['horario_err'])) ? 'is-invalid' : ''; ?>" placeholder="Horario">
                            <span class="invalid-feedback"><?php echo $data['horario_err']; ?></span>
													</div>

												 <div class="col-md-6 mb-3">
													<label for="procedencia">
														Aero / Dest:
													</label>
															<input type="text" name="procedencia" class="form-control m-input <?php echo (!empty($data['procedencia_err'])) ? 'is-invalid' : ''; ?>" placeholder="Aeroporto / Unidade">
                              <span class="invalid-feedback"><?php echo $data['procedencia_err']; ?></span>
												</div>

												 <div class="col-md-6 mb-3">
													<label for="empresa">
														Empresa:
													</label>
															<input type="text" name="empresa_tt" class="form-control m-input <?php echo (!empty($data['empresa_err'])) ? 'is-invalid' : ''; ?>" placeholder="Empresa">
                              <span class="invalid-feedback"><?php echo $data['empresa_err']; ?></span>
												</div>

                         <div class="col-md-6 mb-3">
													<label for="troca_pax">
														Pax Troca:
													</label>
														<input type="text" name="troca_pax" class="form-control m-input <?php echo (!empty($data['troca_pax_err'])) ? 'is-invalid' : ''; ?>" placeholder="Empresa: XxX / Empresa: XxX">
														<span class="invalid-feedback"><?php echo $data['troca_pax_err']; ?></span>
												</div>

                         <div class="col-md-6 mb-3">
													<label for="numero">
														Numero:
													</label>
														<input type="text" name="numero" class="form-control m-input <?php echo (!empty($data['numero_err'])) ? 'is-invalid' : ''; ?>" placeholder="Numero" disabled>
														<span class="invalid-feedback"><?php echo $data['numero_err']; ?></span>
												</div>

                        <div class="col-md-6 mb-3">
													<label for="prefixo">
														Prefixo:
													</label>
														<input type="text" name="prefixo" class="form-control m-input <?php echo (!empty($data['prefixo_err'])) ? 'is-invalid' : ''; ?>" placeholder="Prefixo">
														<span class="invalid-feedback"><?php echo $data['prefixo_err']; ?></span>
											  </div>

                         <div class="col-md-6 mb-3">
													<label for="modelo">
														Modelo:
													</label>
														<input type="text" name="modelo" class="form-control m-input <?php echo (!empty($data['modelo_err'])) ? 'is-invalid' : ''; ?>" placeholder="Modelo">
														<span class="invalid-feedback"><?php echo $data['modelo_err']; ?></span>
												</div>

                         <div class="col-md-6 mb-3">
													<label for="companhiaAerea">
														Companhia Aerea:
													</label>
														<input type="text" name="companhiaAerea" class="form-control m-input <?php echo (!empty($data['companhiaAerea_err'])) ? 'is-invalid' : ''; ?>" placeholder="Companhia Aerea">
														<span class="invalid-feedback"><?php echo $data['companhiaAerea_err']; ?></span>
												</div>

											<div class="row ml-1">
										  	<div class="col">
													<button class="btn btn-success" type="submit">Salvar <i class="fa fa-floppy-o"></i></button>	
											  </div>
										  </div>
									
									</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>