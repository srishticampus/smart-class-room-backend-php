<?php
require 'connection.php';
session_start();
$user =$_REQUEST['username'];
$pass=$_REQUEST['pass'];
$sql="select * from  faculty_reg where email='$user' and password='$pass'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	while($row=$result->fetch_assoc()){
		$_SESSION['log']=$row['faculty_id'];
		

	}
	header("location:index.php?status=success");

}
else{
	header("location:login.php?status=failed");
}

?>