<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_fyp');

// get the post records
$username = $_POST['username'];
$pword = $_POST['pword'];


// database insert SQL code
$sql = "INSERT INTO `tbl_login (`username`, `pword`) VALUES ('$username', '$pword')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>