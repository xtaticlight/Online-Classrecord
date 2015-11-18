<?php 
	function logged_in_redirect(){
		if (logged_in() === true) {
			header('Location: index.php');
			exit();
		}
	}

	function protect_page(){
		if (logged_in() === false) {
			header('Location: ../pages/index.php');
			exit();
		}
	} //dapat naka login para maka view sa certain page

	function logged_out_redirect(){
		if (logged_in() === true) {
			header('Location: ../actions/logout.php');
			exit();
		}
	}

	function president_protect($session_id){
		
		if (role($session_id) == 1 || role($session_id) == 13 || role($session_id) == 14 || role($session_id) == 15){
			
		} else{
			header('Location: ../actions/logout.php');
			exit();
		}
	}

	function treasurer_protect($session_id){
		
		if (role($session_id) == 6 || role($session_id) == 15){
			
		} else{
			header('Location: ../actions/logout.php');
			exit();
		}
	}

	

	function auditor_protect($session_id){
		
		if (role($session_id) == 7 || role($session_id) == 15){
			
		} else{
			header('Location: ../actions/logout.php');
			exit();
		}
	}
	
	function officer_protect($session_id){
		
		if (role($session_id) == 0){
			header('Location: ../actions/logout.php');
			exit();
		}
	}

	function president_has_access_protect(){
		global $student_data;
		if ($student_data['role_id'] != 1 && $student_data['access_type'] == 0){
			header('Location: index.php');
			exit();
		}
	}

	function has_access_protect(){
		global $student_data;
		if ($student_data['access_type'] == 0){
			header('Location: index.php');
			exit();
		}
	}

	function array_sanitize(&$item){
		$item = mysql_real_escape_string($item);
	}
	function sanitize($data){
		return mysql_real_escape_string($data);
	}

	function output_errors($errors){
		return '
		<div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<ul id="errors"><li>' . implode('</li><li>', $errors) . '</li></ul>
		</div>';
	}

	function output_error($errors){
		return '' . implode(' ', $errors) . '';
	}
 ?>