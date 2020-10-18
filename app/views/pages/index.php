<?php require APPROOT . '/views/inc/header.php'; ?>
</div>
<div class="container-fluid">

	 <div class="row">
		<div class="col-lg-12">

			<div class="accordion" id="accordionExample" style="margin-top:20px;">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								Controle de Usuarios
							</button>
						</h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body" style="width:100%;">

								<div class="table-responsive">
								<table class="table table-bordered table-hover" style="width:100%;">
									<thead class="thead-dark">
										<tr>
											<th>Nome</th>
											<th>Email</th>
											<th>Cpf/LPNA</th>
											<th>Ativo</th>
										</tr>
								
									<?php foreach($data['users'] as $user) : ?>
									<tbody id="linha">
											<tr id="2">
									<td><?php echo $user->name; ?></td>
									<td><?php echo $user->email; ?></td>
									<td><?php echo $user->cpf; ?></td>
									<td><?php echo $user->active; ?></td>
									<form method="post">
							
							    <?php if($user->active == 0) : ?>
									<td> <button class="btn btn-primary" type="submit" formaction="<?php echo URLROOT; ?>/pages/activateuser/<?php echo $user->id; ?>">On</button></td>
                   <?php endif; ?>
									 <?php if($user->active == 1) : ?>
									<td> <button class="btn btn-danger" type="submit" formaction="<?php echo URLROOT; ?>/pages/deactivateuser/<?php echo $user->id; ?>">Off</button></td>
                   <?php endif; ?>
									</form>
									</tr>				     
									</tbody>
									<?php endforeach; ?>
									
							</table>
						</div>

				   </div>
			  	</div>
		 	   </div>
			


		   </div>
		 </div>
	 </div>

	 </div>

<div class="container">
<?php require APPROOT . '/views/inc/footer.php'; ?>
