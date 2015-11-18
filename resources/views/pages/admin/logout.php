<?php
	//$ds = DIRECTORY_SEPARATOR;
    //$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
    //require "{$base_dir}core{$ds}init.php";
	require '../core/init.php';
    

    //e record ang logout time
    $session_id = $_SESSION['id'];
    $idnum = idnum($session_id);
    $date =  date('Y-m-d');
    $time = date('G:i:s');
    $query = "UPDATE `attendance` SET `date_out` = '$date', `time_out` = '$time' WHERE `idnum` = '$idnum'";
    mysql_query($query);

    
	session_destroy();
	header('Location: ../pages/index.php');

?>