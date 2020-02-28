<?php
session_start();
//require_once './config/config.php';
require_once 'includes/auth_validate.php';
include_once('includes/header.php');
header('Location: MapaConCLientes.php');
?>

<small>
	Powered by <a href="https://github.com/carlosdarioio/PruebaProgramaci-nLogixsoft">Carlos Dario Flores</a>
	</small>

<?php include_once('includes/footer.php'); ?>
