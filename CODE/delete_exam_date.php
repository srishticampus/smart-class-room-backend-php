<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from exam where exam_id='$id'";
$result=$con->query($sql);
if(!$result){
	header("location:view_exam.php?status=failed");

}
else{
	header("location:view_exam.php?status=success");
}

?>