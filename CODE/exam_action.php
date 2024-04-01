<?php
require 'connection.php';

$batch_id=$_REQUEST['id'];
$faculty_id=$_REQUEST['id1'];
$semester=$_REQUEST['semester'];
$subject=$_REQUEST['subject'];
$exam=$_REQUEST['exam'];
$exam_title=$_REQUEST['exam_title'];
$examtime=$_REQUEST['examtime'];
$date=date("Y/m/d") ;
$date1="";

$sql="select * from exam where subject='$subject' and type='1'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	while($row=$result->fetch_assoc()){
		$date1=$row['exam_date'];
	
	echo 'exam_exist';
}
}
else{

// 	$sql="update exam set type='0' where subject='$subject' and type='1'";
// $result=$con->query($sql);
$sql="insert into `exam`(batch_id,faculty_id,semester,subject,exam_date,exam_title,examtime,type) values('$batch_id','$faculty_id','$semester','$subject','$exam','$exam_title','$examtime','1')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	//header('location:exam.php?status=success');
	echo 'success';
}
else{
	//header('location:exam.php?status=failed');
	echo 'failed';
}
}
?>