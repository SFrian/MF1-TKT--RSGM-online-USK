<?php 
	include_once'config/Session.php';
	include_once'config/Utilities.php';

	
	//Signout finction
	signout();


farhan.update
	//penting!!!
	//This will be moved shortly 

	
	/*//untuk Unset all of the session vars
	$_SESSION = array(); 

	//untuk kill the session & destroy semua cookies

	//Do not delete!!!
	//This will be moved shortly 

	
	/*//Unset all of the session vars
	$_SESSION = array(); 

	//mematikan sesi & menghancurkan cookie apa pun
 main
	if (ini_get("session.use_cookies")){
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() -42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}

 farhan.update
	//untuk Finally destroy the session

	//Finally destroy the session
 main
	session_destroy();

	redirectTo('index');*/

?>