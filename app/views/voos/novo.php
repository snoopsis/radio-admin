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
														<input type="text" name="obs" class="form-control m-input <?php echo (!empty($data['obs_err'])) ? 'is-invalid' : ''; ?>" placeholder="Status" value="*Previsto" disabled>
                            <span class="invalid-feedback"><?php echo $data['obs_err']; ?></span>
											</div>

											<div class="col-md-6 mb-3">
													<label for="data">
														Data:
													</label>
														<input type="text" name="data" class="form-control m-input <?php echo (!empty($data['data_err'])) ? 'is-invalid' : ''; ?>" id="datepicker">
                            <span class="invalid-feedback"><?php echo $data['data_err']; ?></span>
												</div>

												 <div class="col-md-6 mb-3">
													<label for="horario">
														Horario:
													</label>
														<input type="text" name="horario" class="form-control m-input <?php echo (!empty($data['horario_err'])) ? 'is-invalid' : ''; ?>" id="timepicker">
                            <span class="invalid-feedback"><?php echo $data['horario_err']; ?></span>
													</div>

												 <div class="col-md-6 mb-3">
													<label for="procedencia">
														Procedencia:
													</label>
															<select class="form-control <?php echo (!empty($data['procedencia_err'])) ? 'is-invalid' : ''; ?>" id="exampleFormControlSelect1" name="procedencia">
                               <option value="Jacarepagua">Jacarepagua</option>
                               <option value="Cabo Frio">Cabo Frio</option>
                               <option value="Macae">Macae</option>
                               <option value="Vitoria">Vitoria</option>
                               <option value="Farl S. Tome">Farol S. Tome</option>
                              </select>
															<span class="invalid-feedback"><?php echo $data['procedencia_err']; ?></span>
												</div>

												 <div class="col-md-6 mb-3">
													<label for="empresa_tt">
														Empresa:
													</label>
													<select class="form-control <?php echo (!empty($data['empresa_err'])) ? 'is-invalid' : ''; ?>" id="exampleFormControlSelect1" name="empresa_tt">
                               <option value="DOF">DOF</option>
                               <option value="Technip">Technip</option>
                               <option value="Petrobras">Petrobras</option>
                               <option value="Outros">Outros</option>
                              </select>
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
														<span class="invalid-feedback"><?php echo $data['modelo_err']; ?></span>
														<select class="form-control <?php echo (!empty($data['modelo_err'])) ? 'is-invalid' : ''; ?>" id="exampleFormControlSelect1" name="modelo">
                               <option value="AW139">AW139</option>
                               <option value="S-92">S-92</option>
                               <option value="AW189">AW189</option>
                               <option value="S-76">S-76</option>
                              </select>
												</div>

                         <div class="col-md-6 mb-3">
													<label for="companhiaAerea">
														Companhia Aerea:
													</label>
														<span class="invalid-feedback"><?php echo $data['companhiaAerea_err']; ?></span>
														<select class="form-control <?php echo (!empty($data['companhiaAerea_err'])) ? 'is-invalid' : ''; ?>" id="exampleFormControlSelect1" name="companhiaAerea">
                               <option value="OMNI">OMNI</option>
                               <option value="CHC">CHC</option>
                               <option value="LIDER">LIDER</option>
                              </select>
												</div>

											<div class="row ml-1">
										  	<div class="col">
													<button class="btn btn-success" type="submit">Salvar <i class="fa fa-floppy-o"></i></button>	
											  </div>
										  </div>
									
									</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>