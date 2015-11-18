<?php
	date_default_timezone_set('Etc/GMT+8');
	function name_from_id_number($id_number){
		$id_number = sanitize($id_number);
		$first = mysql_result(mysql_query("SELECT `first_name` FROM `information` WHERE `id_number` = '$id_number'"), 0, 'first_name');
		$middle = mysql_result(mysql_query("SELECT `middle_name` FROM `information` WHERE `id_number` = '$id_number'"), 0, 'middle_name');
		$last = mysql_result(mysql_query("SELECT `last_name` FROM `information` WHERE `id_number` = '$id_number'"), 0, 'last_name');
		return $first . ' ' . $middle . ' ' . $last;

	}
	function amount_from_fee_id($fee_id){
		$fee_id = (int)$fee_id;
		$query = "SELECT `fee_amount` FROM `fee` WHERE `fee_id` = '$fee_id'";
		$result = mysql_query($query);
		return mysql_result($result, 0,'fee_amount');
	}


	function save_payment($semAndSY, $id_number, $fee_id, $fee_name, $quantity, $fee_amount, $amount_recieved, $change, $recieved_by){
		$time_recieved = date('h:i:s a');
		$day_recieved = date('Y-m-d');
		mysql_query("INSERT INTO `payment_records` (`semAndSY`, `id_number`, `fee_id`,`fee_name`,`quantity`, `fee_amount`, `amount_recieved`,`change_amount`,`time_recieved`, `day_recieved`, `recieved_by`) VALUES ('$semAndSY', '$id_number', '$fee_id', '$fee_name', '$quantity', '$fee_amount', '$amount_recieved', '$change','$time_recieved', '$day_recieved', '$recieved_by')") or die(mysql_error());
	}

	function create_fee($semAndSY, $fee_name, $fee_amount, $required_to){
		$time_created = date('h:i:s a');
		$day_created = date('l jS F Y');
		mysql_query("INSERT INTO `fee` (`semAndSY`, `fee_name`, `fee_amount`, `required_to`,`time_created`, `day_created`) VALUES ('$semAndSY', '$fee_name', '$fee_amount', '$required_to','$time_created', '$day_created')");
	}

	function validate_year($year){
		if(strlen($year)<5 && strlen($year)>3 && is_numeric($year) && $year>=1900 
			&& ($year>=date("Y")||$year>=date("Y")+1)
			){
			return true;
		} else {
			return false;
		}
	}

	function update_student($update_student_data){
		$update = array();
		$id_number = id_number_from_student_id($_SESSION['student_id']);
		array_walk($update_student_data, 'array_sanitize');
		foreach ($update_student_data as $field => $data) {
			$update[] = '`' . $field . '` = \'' . $data . '\'';
		}

		mysql_query("UPDATE `information` SET " . implode(', ', $update) . " WHERE `id_number` = " . $id_number );
	}

	function fees(){
		echo '<select class="form-control" style="width: 30%" name="fee_id">';
		$query = "SELECT * FROM `fee`";
		$result = mysql_query($query);
		while ($fee_id = mysql_fetch_assoc($result)) {
		   echo '<option class = ""value="' . $fee_id['fee_id'] . '">' . $fee_id['fee_name'] . '</option>';
		}
		echo '</select>';
	}

	function roles(){
		echo '<select class="form-control" style="width: 30%"name="role_id" >';
		$query = "SELECT * FROM `roles`";
		$result = mysql_query($query);
		while ($role = mysql_fetch_assoc($result)) {
		   echo '<option class = ""value="' . $role['role_id'] . '">' . $role['role'] . '</option>';
		}
		echo '</select>';
	}

	function year_level(){
		$query = "SELECT * FROM `year_level`";
		$result = mysql_query($query);
		while ($year = mysql_fetch_assoc($result)) {
		   echo '<input type = "radio" name ="required_to" value="' . $year['year_id'] . '">' . $year['year_level'] . '<br/>';
		}
		
	}

	function semesters(){
		echo '<select   class="form-control" style="width: 30%" name="semester_id"  onChange="showDiv2(div,this)">';
		
		$query = "SELECT * FROM `semester`";
		$result = mysql_query($query);
		echo 'option value="">Semester</option>';
		while ($role = mysql_fetch_assoc($result)) {
		   echo '<option value="' . $role['semester_id'] . '">' . $role['semester'] . '</option>';
		}
		echo '</select>';
	}

	function set_role_zero($role_id){
		$role_id = (int)$role_id;
		mysql_query("UPDATE `students` SET `role_id` = 0 WHERE `role_id` = $role_id");
	}



	function access_type_name($access_type){
		$access_type = (int)$access_type;
		return mysql_result(mysql_query("SELECT `students`.`access_type`, `access`.`access_name` FROM `access`, `students` WHERE `access`.`access_type_id` = '$access_type'"), 0, 'access_name');

	}
	function officer_role($role_id){
		$role_id = (int)$role_id;
		return mysql_result(mysql_query("SELECT `students`.`role_id`, `roles`.`role` FROM `roles`, `students` WHERE `roles`.`role_id` = '$role_id'"), 0, 'role');
	}

	function student_info_data($id_number){
		$data = array();
		$id_number = (int)$id_number;

		$func_num_args = func_num_args();
		$func_get_args = func_get_args();

		if ($func_num_args > 1){
			unset($func_get_args[0]);

			$fields = '`' . implode('`, `', $func_get_args) . '`';
			$data = mysql_fetch_array(mysql_query("SELECT $fields FROM `information` WHERE `id_number` = $id_number"));
			return $data; 
		}
	}

	function student_data($student_id){
		$data = array();
		$student_id = (int)$student_id;

		$func_num_args = func_num_args();
		$func_get_args = func_get_args();

		if ($func_num_args > 1){
			unset($func_get_args[0]);

			$fields = '`' . implode('`, `', $func_get_args) . '`';
			$data = mysql_fetch_array(mysql_query("SELECT $fields FROM `students` WHERE `student_id` = $student_id"));
			return $data; 
		}
	}

	function set_role($id_number, $role_id){
		$id_number = sanitize($id_number);
		$role_id = (int)$role_id;
		mysql_query("UPDATE `students` SET `role_id` = '$role_id' WHERE `id_number` = $id_number");
	}

	function reset_role($id_number, $role_id){
		set_role_zero($id_number);
		set_role($id_number, $role_id);
	}

	function change_password($student_id, $password){
		$student_id = (int)$student_id;
		$password = md5($password);

		mysql_query("UPDATE `students` SET `password` = '$password' WHERE `student_id` = $student_id");
	}

	function reset_password($id_number){
		$id_number = sanitize($id_number);
		$reset_password = 'cpe2015';
		$password = md5($reset_password);
		mysql_query("UPDATE `students` SET `password` = '$password' WHERE `id_number` = $id_number");
		return $reset_password;
	}

	function logged_in(){
		return (isset($_SESSION['student_id']))? true : false;
	}

	function student_exists($id_number){
		$id_number = sanitize($id_number);
		return (mysql_result(mysql_query("SELECT COUNT(`student_id`) FROM `students` WHERE `id_number` = '$id_number'"), 0) == 1) ? true : false;
	}

	function role_id_exists($school_year, $role_id){
		$school_year = sanitize($school_year);
		$role_id = (int)$role_id;
		return (mysql_result(mysql_query("SELECT * FROM `officers` WHERE `sy` = '$school_year' AND `role_id` =  '$role_id' "), 0)  == 1) ? true : false;
	}

	function email_exists($email){
		$email = sanitize($email);
		return (mysql_result(mysql_query("SELECT COUNT(`id_number`) FROM `information` WHERE `email` = '$email'"), 0) == 1) ? true : false;
	}

	function has_role($school_year, $id_number){
		$school_year = sanitize($school_year);
		$id_number = sanitize($id_number);
		return (mysql_result(mysql_query("SELECT role_id FROM `officers` WHERE `sy` = '$school_year' AND `id_number` = `$id_number`"), 1) == 1) ? true : false;
	}

	function check_assigned_role($role_id){
		$role_id = (int)$role_id;
		return (mysql_result(mysql_query("SELECT COUNT(`student_id`) FROM `students` WHERE `role_id` = $role_id"), 0) == 1) ? true : false;
	}

	function fee_id_from_fee_name($fee_name){
		$fee_name = sanitize($fee_name);
		return mysql_result(mysql_query("SELECT `fee_id` FROM `fee` WHERE `fee_name` = '$fee_name'"), 0, 'fee_id');
	}

	function fee_name_from_fee_id($fee_id){
		$fee_id = (int)$fee_id;

		$result = mysql_query("SELECT `fee_name` FROM `fee` WHERE `fee_id` = '$fee_id'");
		if (mysql_num_rows($result) != 0) {
			return (mysql_result($result, 0, 'fee_name'));
		} else{
			return 'none';
		}
	}
	function sysaved(){
		$query = "SELECT * FROM `school_year` ORDER BY `school_year`.`schoolyear` ASC";
		$result = mysql_query($query);
		while ($sy = mysql_fetch_assoc($result)) {
		   echo '<option class = ""value="' . $sy['sy'] . '">' . $sy['sy'] . '</option>';
		}
	}
	function access_type_from_id_number($id_number){
		$id_number = sanitize($id_number);
		return mysql_result(mysql_query("SELECT `access_type` FROM `students` WHERE `id_number` = '$id_number'"), 0, 'access_type');
	}

	function role_id_from_id_number($id_number){
		$id_number = sanitize($id_number);
		return mysql_result(mysql_query("SELECT `role_id` FROM `students` WHERE `id_number` = '$id_number'"), 0, 'role_id');
	}

	function year_level_from_year_id($year_id){
		$year_id = (int)$year_id;
		return mysql_result(mysql_query("SELECT `year_level` FROM `year_level` WHERE `year_id` = $year_id"), 0, 'year_level');
	}

	function semester_from_semester_id($semester_id){
		$semester_id = (int)$semester_id;
		return mysql_result(mysql_query("SELECT `semester` FROM `semester` WHERE `semester_id` = $semester_id"), 0, 'semester');
	}

	function id_number_from_student_id($student_id){
		$student_id = (int)$student_id;
		return mysql_result(mysql_query("SELECT `id_number` FROM `students` WHERE `student_id` = $student_id"), 0, 'id_number');

	}
	
	function student_id_from_id_number($id_number){
		$id_number = sanitize($id_number);
		return mysql_result(mysql_query("SELECT `student_id` FROM `students` WHERE `id_number` = '$id_number'"), 0, 'student_id');
	}

	function login($id_number, $password){
		$student_id = student_id_from_id_number($id_number);
		$id_number = sanitize($id_number);
		$password = md5($password);
		return (mysql_result(mysql_query("SELECT COUNT(`student_id`) FROM `students` WHERE `id_number` = '$id_number' AND `password` = '$password'"), 0) == 1) ? $student_id : false;
	}

	function get_last_login()
	{
		$result = mysql_query("SELECT * FROM `jphice1`.logs ORDER BY `log_id` DESC LIMIT 1") or die('Invalid query: ' . mysql_error());
		$row = mysql_fetch_array($result);
		return  ($row['log_id']);
	}

	function school_year_exists($school_year){
		$school_year = sanitize($school_year);
		return (mysql_result(mysql_query("SELECT COUNT(`sy_id`) FROM `school_year` WHERE `sy` = '$school_year'"), 0) == 1) ? true : false;
	}

	function year_exists($year){
		$year = sanitize($year);
		return (mysql_result(mysql_query("SELECT COUNT(`year_id`) FROM `year` WHERE `year` = '$year'"), 0) == 1) ? true : false;
	}

	function get_current_school_year()
	{
		$result = mysql_query("SELECT * FROM `school_year` ORDER BY `sy_id` DESC LIMIT 1") or die('Invalid query: ' . mysql_error());
		$row = mysql_fetch_array($result);
		return  ($row['sy']);
	}

	function school_year(){
		echo '<select class="form-control" style="width: 30%" name="sy">';
		$query = "SELECT * FROM `school_year` ORDER BY `sy_id` DESC ";
		$result = mysql_query($query);
		while ($role = mysql_fetch_assoc($result)) {
		   echo '<option class = ""value="' . $role['sy'] . '">' . $role['sy'] . '</option>';
		}
		echo '</select>';
	}

	function display_fees($semAndSY){
		echo '<select class="form-control" style="width: 30%" name="display">';
		$result = mysql_query("SELECT * FROM `fee` WHERE `semAndSY` = '$semAndSY'");
		while ($res = mysql_fetch_assoc($result)) {
		   echo '<option class = ""value="' . $res['display'] . '">' . $res['fee_name'] . '</option>';
		}
		echo '</select>';
	}

	function months(){
		echo '<select class="form-control" style="width: 30%" name="months">';
		$query = "SELECT * FROM `months` ORDER BY `month_id` ASC ";
		$result = mysql_query($query);
		while ($role = mysql_fetch_assoc($result)) {
		   echo '<option class = ""value="' . $role['month'] . '">' . $role['month'] . '</option>';
		}
		echo '</select>';
	}

	function year(){
		echo '<select class="form-control" style="width: 30%" name="year">';
		$query = "SELECT * FROM `year` ORDER BY `year_id` DESC ";
		$result = mysql_query($query);
		while ($role = mysql_fetch_assoc($result)) {
		   echo '<option class = ""value="' . $role['year'] . '">' . $role['year'] . '</option>';
		}
		echo '</select>';
	}

	function get_current_school_year_sem()
	{
		$result = mysql_query("SELECT * FROM `semester_school_year` ORDER BY `sem_sy_id` DESC LIMIT 1") or die('Invalid query: ' . mysql_error());
		$row = mysql_fetch_array($result);
		return  ($row['semAndSY']);
	}
	
	
?>
