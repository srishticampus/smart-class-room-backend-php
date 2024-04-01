<?php
require 'connection.php';

$batch_id=$_REQUEST['id'];
$faculty_id=$_REQUEST['id1'];
$semester=$_REQUEST['semester'];
$subject=$_REQUEST['subject'];
$question=$_REQUEST['question'];
$option_a=$_REQUEST['optiona'];
$option_b=$_REQUEST['optionb'];
$option_c=$_REQUEST['optionc'];
$option_d=$_REQUEST['optiond'];
$correct=$_REQUEST['correct'];
$exam_title=$_REQUEST['title'];


$query="select * from exam where exam_title='$exam_title'";
$res=$con->query($query);
$co=$res->fetch_assoc();
$exam_id=$co['exam_id'];
if($exam_id!=''){
$sql="insert into online_test(question,a,b,c,d,semester,subject,faculty_id,batch_id,correct_answer,exam_id) values('$question','$option_a','$option_b','$option_c','$option_d','$semester','$subject','$faculty_id','$batch_id','$correct','$exam_id')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	//header('location:online_test.php?status=success');
	echo "success";
}
}
else{
	//header('location:online_test.php?status=failed');
	echo "failed";
}
?>