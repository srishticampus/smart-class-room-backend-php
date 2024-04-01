<?php 
require("connection.php");
$regno=$_REQUEST["regno"];
$password=$_REQUEST["password"];

$query="select * from `student_reg` where regno='$regno' and password='$password'";
$result=$con->query($query);
$count=$result->num_rows;
if($count>0)
{
	$row=$result->fetch_assoc();

$result=$con->query($query);

$status=array("status" => 'Success',"Student_data" => $row);
}
else
{
	$status=array("status" => 'Incorrect_Password');
}

echo json_encode($status);
 ?>