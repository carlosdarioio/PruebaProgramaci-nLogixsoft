<?php
session_start();
require_once 'config/config.php';
$token = bin2hex(openssl_random_pseudo_bytes(16));
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === TRUE)
{
	header('Location: index.php');
}
?>
<?php include BASE_PATH.'/includes/header.php'; ?>
<div id="page-" class="col-md-4 col-md-offset-4">
	<form class="form loginform" method="POST" action="authenticate.php">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">Iniciar Sesion</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="control-label">Usuario</label>
					<input type="text" name="username" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label class="control-label">Contraseña</label>
					<input type="password" name="password" class="form-control" required="required">
				</div>				
				<?php if (isset($_SESSION['login_failure'])): ?>
				<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					echo $_SESSION['login_failure'];
					unset($_SESSION['login_failure']);
					?>
				</div>
				<?php endif; ?>
				<button type="submit" class="btn btn-success loginField">Entrar</button>
			</div>
		</div>
	</form>
	<small>
	Desarrollado por <a href="https://github.com/carlosdarioio/PruebaProgramaci-nLogixsoft">Carlos Dario Flores</a>
	</small>
</div>
<?php include BASE_PATH.'/includes/footer.php'; ?>
