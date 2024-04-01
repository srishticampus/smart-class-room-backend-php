<?php
require 'connection.php';
@session_start();
$fac=$_SESSION['log'];
$id=$_GET['id'];
$sql="delete from semester_subject where sub_id='$id'and faculty_id='$fac'";
$result=$con->query($sql);
if(!$result){
	header("location:view_subject.php?status=failed");

}
else{
	header("location:view_subject.php?status=success");
}

?>