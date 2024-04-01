<?php

require 'connection.php';
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$batch=$_REQUEST['batch'];
$semester=$_REQUEST['semester'];
$password=$_REQUEST['password'];
$regno=$_REQUEST['regno'];
$sql1= "select * from `batch` where batch_name ='$batch'";
$result1=$con->query($sql1);
$count1 = $result1->num_rows;
if($count1>0){

	while($row1=$result1->fetch_assoc()){
		$batch_id=$row1['batch_id'];
	}
	

	$sql= "select * from `student_reg` where regno ='$regno'";
$result=$con->query($sql);
$count = $result->num_rows;
if($count>0){

	$data=array("status"=>"Student_exist");

}
else{
	$sql= "insert into `student_reg`(`name`,`email`,`batch`,`semester`,`password`,batch_id,regno) values('$name','$email','$batch','$semester','$password','$batch_id','$regno')";
	$result=$con->query($sql);
	$count=$con->affected_rows;
	if($count>0){
		$data=array("status"=>"success");
	}
	else{

$data=array("status"=>"fail");

	}

}

}
else{
	$data=array("status"=>"Batch does not exist");
}

echo json_encode($data);
?>