<?php
if (!isset($_SESSION['_usuario']))
{
	header('Location:login.php');
}
 ?>