<?php
require 'db.php';
$value3 = $_POST['uname'];
$value7 = $_POST['upass'];

$sql = "select * from accounts where email='$value3' and password='$value7'";
$results = runQuery($sql);
if(count($results) > 0)
{
	$fname = $results[0]['fname'];
	$lname = $results[0]['lname'];

	header("Location: loginsucc.php?fname=$fname&lname=$lname");

}else{
	header("Location: login_fail.php");
}
?>
