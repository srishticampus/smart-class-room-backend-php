<?php
header('Content-Type: application/json');

require 'connection.php';
//$subject=$_POST['subject'];
$exam=$_POST['exam'];
$data = array();
$da=array();
$sqlQuery = "SELECT * FROM student_reg
, exam_result where student_reg.stud_id=exam_result.stud_id   and exam_result.stud_id='$exam'  ORDER BY exam_result.stud_id DESC LIMIT 5";

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

// mysqli_close($conn);

echo json_encode($data);
?>