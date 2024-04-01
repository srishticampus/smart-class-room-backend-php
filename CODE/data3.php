<?php
header('Content-Type: application/json');

require 'connection.php';
//$subject=$_POST['subject'];
$exam=$_POST['exam1'];
$data = array();
$da=array();
$sqlQuery = "SELECT * FROM student_reg
, exam_result where student_reg.stud_id=exam_result.stud_id   and exam_result.exam_title='$exam' ";

$result = $con->query($sqlQuery);
if($result->num_rows > 0){ 
while($re=$result->fetch_assoc())
{
	$da[] = $re;
}
}
foreach ($da as $row) {
	$data[] = $row;
}
//print_r($data);
// mysqli_close($conn);

echo json_encode($data);
?>