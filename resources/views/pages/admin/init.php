<?php
	session_start();
	
	require 'database/connect.php';
	require 'functions/general.php';
	require 'functions/users.php';

	if (logged_in() === true) {
		$session_id = $_SESSION['id'];
		$role_id = role($session_id);
		//$student_data = student_data($session_student_id, 'student_id', 'id_number','password', 'access_type', 'role_id');
		//$session_id_number = $student_data['id_number'];
		//$student_info_data = student_info_data($session_id_number, 'id_number', 'first_name','middle_name', 'last_name', 'year_id', 'birthday', 'email', 'contact_number', 'address');
		
	}
	
	$errors = array();
	
?>