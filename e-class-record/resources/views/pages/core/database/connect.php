<?php
	$connect_error = 'Sorry, we\'re experiencing connection problems.';
	mysql_connect('localhost', 'student', 'muststudentserver2015');
	mysql_select_db('icpeponlineportal');
?>

<?php
$host = "localhost";
$db_name = "icpeponlineportal";
$username = "student";
$password = "muststudentserver2015";
   
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
   
// to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
