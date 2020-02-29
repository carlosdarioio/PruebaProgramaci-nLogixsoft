<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$username = strtolower(filter_input(INPUT_POST, 'username'));
	$password = filter_input(INPUT_POST, 'password');		
	if ($username=="prueba" and $password=="12345")
    {					
			$_SESSION['_usuario'] = TRUE;			            
			header('Location: MapaConCLientes.php');		
	}
    else
    {
		$_SESSION['error_login'] = 'Usuario o contraseña invalido';
		header('Location: login.php');
		exit;
	}
}
else
{
	die('Método no permitido');
}
