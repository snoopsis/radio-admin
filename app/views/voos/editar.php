<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
<div class="col">
<a href="<?php echo URLROOT; ?>/voos" class="btn btn-primary mt-2 pull-right"><i class="fa fa-backward"></i> Voltar</a>
</div>
</div>

       <form method="post" class="m-form">
                  <div class="row mt-2">
                    <div class="col-md-6 mb-3">
											<div class="input-group mb-3">
											 <div class="input-group-prepend">
												<span class="input-group-text" id="inputGroup-sizing-default">Status</span>
											 </div>
												<input type="text" name="obs" class="form-control m-input <?php echo (!empty($data['obs_err'])) ? 'is-invalid' : ''; ?>" placeholder="Status" value="<?php echo $data['obs']; ?>">
													<span class="invalid-feedback"><?php echo $data['obs_err']; ?></span>
										</div>
									</div>

								<div class="col-md-6 mb-3">
								<div class="input-group mb-3">
											 <div class="input-group-prepend">
												<span class="input-group-text" id="inputGroup-sizing-default">Data</span>
											 </div>
											<input type="text" name="data" class="form-control m-input <?php echo (!empty($data['data_err'])) ? 'is-invalid' : ''; ?>" placeholder="Data" value="<?php echo $data['data']; ?>">
											<span class="invalid-feedback"><?php echo $data['data_err']; ?></span>
									</div>
								</div>

								<div class="col-md-6 mb-3">
								 <div class="input-group mb-3">
										<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Horario</span>
										</div>
										<input type="text" name="horario" class="form-control m-input <?php echo (!empty($data['horario_err'])) ? 'is-invalid' : ''; ?>" placeholder="Horario" value="<?php echo $data['horario']; ?>">
										<span class="invalid-feedback"><?php echo $data['horario_err']; ?></span>
							  </div>
							 </div>

							 <div class="col-md-6 mb-3">
								 <div class="input-group mb-3">
										<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Aero/Dest</span>
										</div>
											<input type="text" name="procedencia" class="form-control m-input <?php echo (!empty($data['procedencia_err'])) ? 'is-invalid' : ''; ?>" placeholder="Procedencia" value="<?php echo $data['procedencia']; ?>">
											<span class="invalid-feedback"><?php echo $data['procedencia_err']; ?></span>
									</div>
								</div>

							<div class="col-md-6 mb-3">
								<div class="input-group mb-3">
										<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Empresa</span>
										</div>
										<input type="text" name="empresa_tt" class="form-control m-input <?php echo (!empty($data['empresa_err'])) ? 'is-invalid' : ''; ?>" placeholder="Empresa" value="<?php echo $data['empresa_tt']; ?>">
										<span class="invalid-feedback"><?php echo $data['empresa_err']; ?></span>
								</div>
							</div>

             <div class="col-md-6 mb-3">
								<div class="input-group mb-3">
										<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Pax Troca</span>
										</div>
										<input type="text" name="troca_pax" class="form-control m-input <?php echo (!empty($data['troca_pax_err'])) ? 'is-invalid' : ''; ?>" placeholder="Pax Troca" value="<?php echo $data['troca_pax']; ?>">
										<span class="invalid-feedback"><?php echo $data['troca_pax_err']; ?></span>
								 </div>
              </div>

            <div class="col-md-6 mb-3">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Numero</span>
									</div>
										<input type="text" name="numero" class="form-control m-input <?php echo (!empty($data['numero_err'])) ? 'is-invalid' : ''; ?>" placeholder="Numero" value="<?php echo $data['numero']; ?>">
										<span class="invalid-feedback"><?php echo $data['numero_err']; ?></span>
						 	 </div>
				  	</div>

              <div class="col-md-6 mb-3">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Prefixo</span>
									</div>
									<input type="text" name="prefixo" class="form-control m-input <?php echo (!empty($data['prefixo_err'])) ? 'is-invalid' : ''; ?>" placeholder="Prefixo" value="<?php echo $data['prefixo']; ?>">
									<span class="invalid-feedback"><?php echo $data['prefixo_err']; ?></span>
						   </div>
				  	  </div>

							<div class="col-md-6 mb-3">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Modelo</span>
									</div>
									<input type="text" name="modelo" class="form-control m-input <?php echo (!empty($data['modelo_err'])) ? 'is-invalid' : ''; ?>" placeholder="Modelo" value="<?php echo $data['modelo']; ?>">
									<span class="invalid-feedback"><?php echo $data['modelo_err']; ?></span>
								</div>
							</div>

							<div class="col-md-6 mb-3">
							 <div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Emp Aerea</span>
									</div>
										<input type="text" name="companhiaAerea" class="form-control m-input <?php echo (!empty($data['companhiaAerea_err'])) ? 'is-invalid' : ''; ?>" placeholder="Companhia Aerea" value="<?php echo $data['companhiaAerea']; ?>" id="datatriger">
										<span class="invalid-feedback"><?php echo $data['companhiaAerea_err']; ?></span>
								</div>
							</div>

							<div class="col-md-6 mb-3">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Saida Aero</span>
								  	</div>
										<input type="text" name="saida_aero" class="form-control m-input <?php echo (!empty($data['saida_aero_err'])) ? 'is-invalid' : ''; ?>" placeholder="Saida Aeroporto" value="<?php if(!empty($data['saida_aero'])){echo $data['saida_aero'];} ?>">
										<span class="invalid-feedback"><?php echo $data['saida_aero_err']; ?></span>
								</div>
  						</div>

							<div class="col-md-6 mb-3">
							  <div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">ETA</span>
						       </div>
											<input type="text" name="eta" class="form-control m-input <?php echo (!empty($data['eta_err'])) ? 'is-invalid' : ''; ?>" placeholder="ETA na Unidade" value="<?php if(!empty($data['eta'])){echo $data['eta'];} ?>">
											<span class="invalid-feedback"><?php echo $data['eta_err']; ?></span>
												</div>
												</div>

                   <div class="col-md-6 mb-3">
										 <div class="input-group mb-3">
					  	         	<div class="input-group-prepend">
						    				<span class="input-group-text" id="inputGroup-sizing-default">Pouso<i class="fa fa-clock-o" aria-hidden="true" style="margin-left: 5px;" id="hora-pouso"></i></span>
						            </div>
												<input type="text" name="pouso" id="pouso" class="form-control m-input <?php echo (!empty($data['pouso_err'])) ? 'is-invalid' : ''; ?>" placeholder="Pouso" value="<?php if(!empty($data['pouso'])){echo $data['pouso'];} ?>">
												<span class="invalid-feedback"><?php echo $data['pouso_err']; ?></span>
									</div>
								</div>

              <div class="col-md-6 mb-3">
								<div class="input-group mb-3">
					       	<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Ret ETA</span>
										</div>
										<input type="text" name="retorno_eta" class="form-control m-input <?php echo (!empty($data['retorno_eta_err'])) ? 'is-invalid' : ''; ?>" placeholder="Retorno ETA" value="<?php if(!empty($data['retorno_eta'])){echo $data['retorno_eta'];} ?>">
										<span class="invalid-feedback"><?php echo $data['retorno_eta_err']; ?></span>
										</div>
									</div>

							<div class="col-md-6 mb-3">
							  <div class="input-group mb-3">
					       	<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Ret POB</span>
										</div>
										<input type="text" name="retorno_pob" class="form-control m-input <?php echo (!empty($data['retorno_pob_err'])) ? 'is-invalid' : ''; ?>" placeholder="Retorno POB" value="<?php if(!empty($data['retorno_pob'])){echo $data['retorno_pob'];} ?>">
										<span class="invalid-feedback"><?php echo $data['retorno_pob_err']; ?></span>
						    </div>
						   </div>

							<div class="col-md-6 mb-3">
								<div class="input-group mb-3">
					       	<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Ret MAG</span>
										</div>
										<input type="text" name="retorno_mag" class="form-control m-input <?php echo (!empty($data['retorno_mag_err'])) ? 'is-invalid' : ''; ?>" placeholder="Retorno MAG" value="<?php if(!empty($data['retorno_mag'])){echo $data['retorno_mag'];} ?>">
										<span class="invalid-feedback"><?php echo $data['retorno_mag_err']; ?></span>
								</div>
						   </div>

							<div class="col-md-6 mb-3">
							 <div class="input-group mb-3">
					       	<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Ret ALT</span>
										</div>
										<input type="text" name="retorno_alt" class="form-control m-input <?php echo (!empty($data['retorno_alt_err'])) ? 'is-invalid' : ''; ?>" placeholder="Retorno ALT" value="<?php if(!empty($data['retorno_alt'])){echo $data['retorno_alt'];} ?>">
										<span class="invalid-feedback"><?php echo $data['retorno_alt_err']; ?></span>
							  </div>
               </div>
					  <div class="col-md-6 mb-3">
				  		<div class="input-group mb-3">
					       	<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Ret AUT</span>
										</div>
									<input type="text" name="retorno_aut" class="form-control m-input <?php echo (!empty($data['retorno_aut_err'])) ? 'is-invalid' : ''; ?>" placeholder="Retorno AUT" value="<?php if(!empty($data['retorno_aut'])){echo $data['retorno_aut'];} ?>">
									<span class="invalid-feedback"><?php echo $data['retorno_aut_err']; ?></span>
						 </div>
				  </div>

				<div class="col-md-6 mb-3">
					  <div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Decolagem<i class="fa fa-clock-o" aria-hidden="true" style="margin-left: 5px;" id="hora-decolagem"></i></span>
							</div>
							<input type="text" name="decolagem" id="decolagem" class="form-control m-input <?php echo (!empty($data['decolagem_err'])) ? 'is-invalid' : ''; ?>" placeholder="Decolagem" value="<?php if(!empty($data['decolagem'])){echo $data['decolagem'];} ?>">
							<span class="invalid-feedback"><?php echo $data['decolagem_err']; ?></span>
				  	 </div>
				   </div>
				</div>

						<div class="row">
							<div class="col">
								<button class="btn btn-success" type="submit" name="atualiza" formaction="<?php echo URLROOT; ?>/voos/editar/<?php echo $data['id']; ?>">Atualizar <i class="fa fa-floppy-o"></i></button>
							</div>
							<div class="col">
							 <!-- Botao de embarque -->
    <button
      type="button"
      class="btn btn-primary"
      data-toggle="modal"
			data-target="#botaoEmbarque"
			onclick="chamaVooEmbarque()"
    >
      Embarque
    </button>
							</div>
							<div class="col">
							 <!-- Botao de desembarque -->
    <button
      type="button"
      class="btn btn-secondary"
      data-toggle="modal"
			data-target="#botaoDesembarque"
			onclick="chamaVooDesembarque()"
    >
      Desembarque
    </button>
							</div>
							<div class="col">
								<button type="submit" class="btn btn-danger" style="float: right;" style="" formaction="<?php echo URLROOT; ?>/voos/delete/<?php echo $data['id']; ?>">Apaga <i class="fa fa-trash"></i></button>
							</div>
						</div>									
				</form>

									<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary btn-block mt-3 mb-3" data-toggle="modal" data-target="#exampleModal">
							Dados de Retorno
						</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Dados de Retorno</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
									<div class="modal-body">
										<p>Decolagem do Skandi Buzios da Aeronave <strong> <?php if(!empty($data['prefixo'])){echo $data['prefixo'];} ?> </strong> as <strong> <?php if(!empty($data['decolagem'])){echo $data['decolagem'];} ?>.</strong>
											<br />
											<br />
											<h5>Dados de Retorno Skandi Buzios:</h5>
											<p>Procedente de: <strong> <?php if(!empty($data['procedencia'])){echo $data['procedencia'];} ?></strong></p>
											<p>Atendimento: <strong> <?php if(!empty($data['numero'])){echo $data['numero'];} ?></strong></p>
											<p>Troca de Turma: <strong> <?php if(!empty($data['empresa_tt'])){echo $data['empresa_tt'];} ?></strong></p><br/>
											<p><strong> <?php if(!empty($data['pouso'])){echo $data['pouso'];} ?></strong> Aeronave de troca de turma pousa no helideck. </p>
											<p>Prefixo: <strong> <?php if(!empty($data['prefixo'])){echo $data['prefixo'];} ?></strong> / Troca <strong> <?php if(!empty($data['troca_pax'])){echo $data['troca_pax'];} ?></strong></p>
											<p><strong> <?php if(!empty($data['decolagem'])){echo $data['decolagem'];} ?></strong> Aeronave de troca de turma fora do helideck.</p>
											<br />
											<p>POB: <strong> <?php if(!empty($data['retorno_pob'])){echo $data['retorno_pob'];} ?></strong></p>
											<p>Magnetica: <strong><?php if(!empty($data['retorno_mag'])){echo $data['retorno_mag'];} ?></strong>°</p>
											<p>Altitude: <strong><?php if(!empty($data['retorno_alt'])){echo $data['retorno_alt'];} ?></strong>ft</p>
											<p>Autonomia: <strong> <?php if(!empty($data['retorno_aut'])){echo $data['retorno_aut'];} ?></strong>h</p>
											<p>ETA: <strong><?php if(!empty($data['retorno_eta'])){echo $data['retorno_eta'];} ?></strong>h apos a Decolagem em <strong><?php if(!empty($data['procedencia'])){echo $data['procedencia'];} ?></strong></p>
									</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

	<!-- Modal DESEMBARQUE DE PESSOAL -->
	<div
      class="modal fade"
      id="botaoDesembarque"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">
              Tripulantes Desembarcando no Voo
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul id="listaDesembarque"></ul>
            <input
              id="desembarqueAutoComplete"
              type="search"
              dir="ltr"
              spellcheck="false"
              autocorrect="off"
              autocomplete="off"
              autocapitalize="off"
              class="form-control"
            />
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
							data-dismiss="modal"
							onclick="limparPessoal()"
            >
              Sair
            </button>
            <button
              type="button"
              class="btn btn-primary"
              onClick="desembarca()"
            >
              Adicionar
            </button>
          </div>
        </div>
      </div>
    </div>
		
			<!-- Modal EMBARQUE DE PESSOAL -->
			<div
      class="modal fade"
      id="botaoEmbarque"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Tripulantes Embarcando no Voo
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul id="listaEmbarque"></ul>
            <input
              id="embarqueAutoComplete"
              type="search"
              dir="ltr"
              spellcheck="false"
              autocorrect="off"
              autocomplete="off"
              autocapitalize="off"
              class="form-control"
            />
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
							data-dismiss="modal"
							onclick="limparPessoal()"
            >
              Sair
            </button>
            <button
              type="button"
              class="btn btn-primary"
              onClick="embarca()"
    
            >
              Adicionar
            </button>
          </div>
        </div>
      </div>
		</div>
		
<?php require APPROOT . '/views/inc/footer.php'; ?>