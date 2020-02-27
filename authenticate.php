<?php
//require_once 'config/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');	
	
	if ($username=="prueba" and $password=="12345")
    {		
			$user_id = $row['id'];		
			$_SESSION['user_logged_in'] = TRUE;			
            $_SESSION['user_id'] = $username;			
			header('Location: MapaConCLientes.php');		
	}
    else
    {
		$_SESSION['login_failure'] = 'Usuario o contraseña invalido';
		header('Location: login.php');
		exit;
	}
}
else
{
	die('Método no permitido');
}
