<?php
require 'connection.php';
$name=$_REQUEST['name'];

$email=$_REQUEST['email'];
$batch=$_REQUEST['batch'];
// $course=$_REQUEST['course'];
// $a="";
// $b="";
// foreach ($_REQUEST['country'] as $value)
//  {
// 	$a .= "," . $value;
// }
// foreach ($_REQUEST['state'] as $value1)
//  {
// 	$b .= "," . $value1;
// }
$password=$_REQUEST['password'];
// $query="select * from batch where batch_name='$course'";
// $res=$con->query($query);
// $count=$res->num_rows;
// while($row=$res->fetch_assoc()){
// 	$batch_id=$row['batch_id'];
// }
$query="select * from batch where batch_name='$batch'" ;
$res=$con->query($query);
$cont=$res->num_rows;
$row1=$res->fetch_assoc();
$batch_id=$row1['batch_id'];

$sql= "insert into faculty_reg (name,email,password,batch_id,batch) values('$name','$email','$password','$batch_id','$batch')";
$result=$con->query($sql);
$count =$con->affected_rows;
if($count>0){
		header("location:login.php?status=success");
	} 
	else {
		header("location:faculty_reg.php?status=failed");
	}
?>