<?php
	session_start();
	
	require 'database/connect.php';
	require 'functions/general.php';
	require 'functions/users.php';

	if (logged_in() === true) {
		$session_id = $_SESSION['id'];
		$role_id = role($session_id);
	}
	
	$errors = array();
	
?>