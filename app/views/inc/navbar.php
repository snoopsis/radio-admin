<style>
.navbar{
  background-color: #f2f1ef;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light">
   <div class="container">
			<a class="navbar-brand" href="<?php echo URLROOT; ?>"><img src="<?php echo URLROOT; ?>/img/logo.png" style="width:50px;"></a>
      <?php if(isset($_SESSION['user_id'])) : ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
       
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				<?php if($_SESSION['user_id'] == 0) : ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo URLROOT; ?>">Inicio</a>
					</li>
          <?php endif; ?>
          <?php if($_SESSION['user_id'] == 0 || $_SESSION['user_id'] == 2) : ?>
          <li class="nav-item">
						<a class="nav-link" href="<?php echo URLROOT; ?>/chegadas">Chegadas</a>
					</li>

          <li class="nav-item">
						<a class="nav-link" href="<?php echo URLROOT; ?>/crews">Crew</a>
					</li>
        
					<li class="nav-item">
						<a class="nav-link" href="<?php echo URLROOT; ?>/rotinas">Rotinas</a>
					</li>
           <?php endif; ?>
					<li class="nav-item">
							<a class="nav-link" href="<?php echo URLROOT; ?>/contatos">Telefones</a>
					 </li>
     
					<li class="nav-item">
						<a class="nav-link" href="<?php echo URLROOT; ?>/voos">Voos</a>
					</li>
            <?php endif; ?>
		
        </ul>

        <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
            <a class="nav-link" href="#">Bem Vindo <strong><?php echo $_SESSION['name']; ?></strong></a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout <i class="fa fa-arrow-right"></i></a>
          </li>
          <?php else: ?>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Acesso
            </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/register">Registro</a>
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/login">Entrar</a>
        </div>
      </div>
          <?php endif; ?>
        </ul>
      </div>
    </div>
 </nav>