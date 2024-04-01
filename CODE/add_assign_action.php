<?php
//@session_start();
require 'connection.php';
$upload_dir = 'uploads/';
$server_url = 'http://srishti-systems.info/projects/College';
$id=$_REQUEST['id'];
$id1=$_REQUEST['id1'];
$semester=$_REQUEST['semester'];
$subject=$_REQUEST['subject'];
$topic=$_REQUEST['topic'];
// $code=$_REQUEST['Code'];
$subdate=$_REQUEST['subdate'];


 $avatar_name = $_FILES["avatar"]["name"];
    $avatar_tmp_name = $_FILES["avatar"]["tmp_name"];
    $error = $_FILES["avatar"]["error"];

     $random_name = rand(1000,1000000)."-".$avatar_name;
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);


        $logo= $server_url."/".$upload_name;
        if(move_uploaded_file($avatar_tmp_name,$upload_name)) {
$sql="insert into assign_sub(batch_id,semester,subject,topic,submittion_date,faculty_id,file) values('$id','$semester','$subject','$topic','$subdate','$id1','$logo')";
$result=$con->query($sql);
$count=$con->affected_rows;
// if($count>0){
	header("location:add_assignment.php?status=success");
	//echo"success";
}
else{
	echo $sql;
	 header("location:add_assignment.php?status=failed");
	//echo "failed";
}



?>