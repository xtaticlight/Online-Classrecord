<?php
	//kwaon ang userid sa idnumber
	function getuserid($idnum){
		$idnum = sanitize($idnum);
		$result = mysql_query("SELECT `id` FROM `users` WHERE `idnum` = '$idnum'");
		if (mysql_num_rows($result) != 0) {
			return (mysql_result($result, 0, 'id'));
		} else{
			return 'NULL';
		}
	}
	//echeck sa officer table kung ang idnumber kay nakaassign sa duha ka role
	function checkidnumofficer($id, $sy){
		$result = mysql_query("SELECT * FROM `officers` WHERE `user_id` = '$id' AND `sy` = '$sy'");
		if (mysql_num_rows($result) != 0) {
			return true;
		} else{
			return false;
		}
	}
	//kwaon ang value sa role id
	function getrole($role){
		$result = mysql_query("SELECT `role` FROM `roles` WHERE `id` = '$role'");
		if (mysql_num_rows($result) != 0) {
			return (mysql_result($result, 0, 'role'));
		} else{
			return 'NULL';
		}
	}
	function roleidisassigned($role_id, $sy){
		$role_id = sanitize($role_id);
		$sy = sanitize($sy);
		$result = mysql_query("SELECT `user_id` FROM `officers` WHERE `role_id` = '$role_id' AND `sy` = '$sy'");
		if (mysql_num_rows($result) != 0) {
			return true;
		} else{
			return false;
		}
	}
	function getsemvalue($sem){
		$result = mysql_query("SELECT `semester` FROM `semester` WHERE `id_semester` = '$sem'");
		if (mysql_num_rows($result) != 0) {
			return (mysql_result($result, 0, 'semester'));
		} else{
			return 'NULL';
		}
	}
	function getactivatedsem(){
		$result = mysql_query("SELECT `id_semester` FROM `semester` WHERE `status` = 1");
		if (mysql_num_rows($result) != 0) {
			return (mysql_result($result, 0, 'id_semester'));
		} else{
			return 'Click Update Semester to update current semester.';
		}
	}
	function activatesem($sem){
		$sem = sanitize($sem);
		$currentsem = getactivatedsem();
		$reset = "UPDATE `semester` SET `status` = 0 WHERE `id_semester` = '$currentsem'";
		mysql_query($reset);
		$query = "UPDATE `semester` SET `status` = 1 WHERE `id_semester` = '$sem'";
		mysql_query($query);
	}
	function semactivated($sem){
		$sy = sanitize($sem);
		return (mysql_result(mysql_query("SELECT COUNT(`id_semester`) FROM `semester` WHERE `id_semester` = '$sem' AND `status` = 1"), 0) == 1) ? true : false;
	}
	function getactivatedsy(){
		$result = mysql_query("SELECT `schoolyear` FROM `school_year` WHERE `status` = 1");
		if (mysql_num_rows($result) != 0) {
			return (mysql_result($result, 0, 'schoolyear'));
		} else{
			return 'Click New School Year to update current school year.';
		}
	}
	function activatesy($sy){
		$sy = sanitize($sy);
		$currentsy = getactivatedsy();
		$reset = "UPDATE `school_year` SET `status` = 0 WHERE `schoolyear` = '$currentsy'";
		mysql_query($reset);
		$savesy = "INSERT INTO `school_year` (`schoolyear`) VALUES ('$sy')";
		mysql_query($savesy);
		$query = "UPDATE `school_year` SET `status` = 1 WHERE `schoolyear` = '$sy'";
		mysql_query($query);
	}
	function syexists($sy){
		$sy = sanitize($sy);
		return (mysql_result(mysql_query("SELECT COUNT(`id_schoolyear`) FROM `school_year` WHERE `schoolyear` = '$sy'"), 0) == 1) ? true : false;
	}
	function activate($email, $code){
		$email = sanitize($email);
		$code = sanitize($code);

		$query = "SELECT COUNT(`id`) FROM `users` WHERE `email` = '$email' AND `email_code` = '$code' AND `active` = 0;";
		$result = mysql_query($query);
		$activate = mysql_result($result, 0);

		if ($activate == 1) {
			$query = "UPDATE `users` SET `active` = 1 WHERE `email` = '$email'";
			mysql_query($query);
			return true;
		} else{
			return false;

		}
	}
	function emailexists($emailadd){
		$email = sanitize($emailadd);
		return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `email` = '$email'"), 0) == 1) ? true : false;
	}
	function role($session_id){
		$query = mysql_query("SELECT * FROM `users` WHERE `id` = '$session_id'");

	    while ($row = mysql_fetch_row($query)) {
	        return $row[11];
	    }
	}
	date_default_timezone_set('Etc/GMT+8');
	//getting the fullname from id num
	function fullname($idnum){
		$query = mysql_query("SELECT * FROM `users` WHERE `idnum` = '$idnum'");

	    while ($row = mysql_fetch_row($query)) {
	        return $row[5] . ' ' . $row[3] . ' ' . $row[4];
	    }
	}
	//getting the id number of the current user
	function idnum($session_id){
	    $query = mysql_query("SELECT * FROM `users` WHERE `id` = '$session_id'");

	    while ($row = mysql_fetch_row($query)) {
	        return $row[1];
	    }

	}
	function email_exists($email, $idnumber){
		$email = sanitize($email);
		$idnumber = sanitize($idnumber);
		return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `email` = '$email' AND `idnum` = '$idnumber'"), 0) == 1) ? true : false;
	}
	function logged_in(){
		return (isset($_SESSION['id']))? true : false;
	}
	function id_from_idnum($idnumber){
		$idnumber = sanitize($idnumber);
		return mysql_result(mysql_query("SELECT `id` FROM `users` WHERE `idnum` = '$idnumber'"), 0, 'id');
	}

	function idnum_from_id($id){
		$id = sanitize($id);
		return mysql_result(mysql_query("SELECT `idnum` FROM `users` WHERE `id` = '$id'"), 0, 'idnum');
	}
	function login($idnumber, $password){
		$id = id_from_idnum($idnumber);
		$idnumber = sanitize($idnumber);
		$password = md5($password);
		return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `idnum` = '$idnumber' AND `pass` = '$password'"), 0) == 1) ? $id : false;
	}
	function checkactiveuser($idnumber){
		$idnumber = sanitize($idnumber);
		return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `idnum` = '$idnumber' AND `active` = 1"), 0) == 1) ? true : false;
	}
	function idexists($idnumber){
		$idnumber = sanitize($idnumber);
		return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `idnum` = '$idnumber'"), 0) == 1) ? true : false;
	}

	function fee_name_from_fee_id($fee_id){
	$fee_id = (int)$fee_id;
	return mysql_result(mysql_query("SELECT `name_fee` FROM `fees` WHERE `fee_id` = '$fee_id'"), 0, 'name_fee');
	}

	function price_from_fee_id($fee_id){
		$fee_id = (int)$fee_id;
		return mysql_result(mysql_query("SELECT `price` FROM `fees` WHERE `fee_id` = '$fee_id'"), 0, 'price');
	}

	function detail_from_fee_id($fee_id){
		$fee_id = (int)$fee_id;
		return mysql_result(mysql_query("SELECT `detail` FROM `fees` WHERE `fee_id` = '$fee_id'"), 0, 'detail');
	}

	function fee_id_from_debt_id($debt_id){
		$debt_id = (int)$debt_id;
		return mysql_result(mysql_query("SELECT `fee_id` FROM `debts` WHERE `debt_id` = '$debt_id'"), 0, 'fee_id');
	}

	function user_id_from_debt_id($debt_id){
		$debt_id = (int)$debt_id;
		return mysql_result(mysql_query("SELECT `user_id` FROM `debts` WHERE `debt_id` = '$debt_id'"), 0, 'user_id');
	}

	function price_from_supply_id($supply_id){
		$supply_id = (int)$supply_id;
		return mysql_result(mysql_query("SELECT `supply_price` FROM `supply` WHERE `supply_id` = '$supply_id'"), 0, 'supply_price');
	}

	function supply_left_from_supply_id($supply_id){
	$supply_id = (int)$supply_id;
	return mysql_result(mysql_query("SELECT `supply_left` FROM `supply` WHERE `supply_id` = '$supply_id'"), 0, 'supply_left');
	}

	function supply_sold_from_supply_id($supply_id){
	$supply_id = (int)$supply_id;
	return mysql_result(mysql_query("SELECT `supply_sold` FROM `supply` WHERE `supply_id` = '$supply_id'"), 0, 'supply_sold');
	}

	function supply_name_from_supply_id($supply_id){
		$supply_id = (int)$supply_id;
		return mysql_result(mysql_query("SELECT `supply_name` FROM `supply` WHERE `supply_id` = '$supply_id'"), 0, 'supply_name');
	}

	function id_sy_from_sy($sy){
		$sy = $sy;
		return mysql_result(mysql_query("SELECT `id_schoolyear` FROM `school_year` WHERE `schoolyear` = '$sy'"), 0, 'id_schoolyear');
	}
	function sem_from_sem_id($sem){
	$sem = (int)$sem;
	return mysql_result(mysql_query("SELECT `semester` FROM `semester` WHERE `id_semester` = '$sem'"), 0, 'semester');
	}


	function display_fees_perperson($idnum){
		$id=$idnum;
		$status = 0;
		echo '<select class="form-control" style="width: 30%" name="display">';
		$result = mysql_query("SELECT * FROM `debts` WHERE `user_id` = '$id' AND `status`='$status'");
		while ($res = mysql_fetch_assoc($result))
		 {
		 	$name_fee = fee_name_from_fee_id($res['fee_id']); 
			$price = price_from_fee_id($res['fee_id']);
		   echo '<option class = ""value="' . $res['display'] . '">' . $name_fee.'@P' .$price.	'</option>';
		}
		echo '</select>';
	}
 ?>
