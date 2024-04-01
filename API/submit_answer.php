<?php
require 'connection.php';
$exam_id=$_REQUEST['exam_id'];
$stud_id=$_REQUEST['stud_id'];
$no_of_correct_answer=$_REQUEST['no_of_correct_answer'];



$query="select * from `exam_result` where stud_id='$stud_id' and exam_id='$exam_id'";
$res=$con->query($query);
$cnt=$res->num_rows;
if($cnt>0){
	$data= array("status"=>false);
}
else{

$sql="select * from exam where exam_id='$exam_id'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	while($row=$result->fetch_assoc()){
		$semester=$row['semester'];
		$subject=$row['subject'];
		$exam_title=$row['exam_title'];
		$batch_id=$row['batch_id'];
	}
}


	
	$query="insert into `exam_result` (semester,subject,exam_title,exam_id,stud_id,no_of_correct_answer,batch_id) values('$semester','$subject','$exam_title','$exam_id','$stud_id','$no_of_correct_answer','$batch_id')";
	$res=$con->query($query);
	$s="update exam_result set flag=1 where stud_id='$stud_id'";
	$r=$con->query($s);
	$cnt=$con->affected_rows;
	if($cnt>0){
		$data= array("status"=>true);
	}
	else{
		$data= array("status"=>false);

	}
}

// else{
// 	$data[]= array("status"=>false,"message"=>"Added Failed");
// }


header('Content-Type: application/json');
echo(json_encode($data));
?>