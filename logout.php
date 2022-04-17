<?php 
	include_once'config/Session.php';
	include_once'config/Utilities.php';

	
	//Signout finction
	signout();


	//penting!!!
	//This will be moved shortly 

	
	/*//untuk Unset all of the session vars
	$_SESSION = array(); 

	//untuk kill the session & destroy semua cookies
	if (ini_get("session.use_cookies")){
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() -42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}

	//untuk Finally destroy the session
	session_destroy();

	redirectTo('index');*/

?>