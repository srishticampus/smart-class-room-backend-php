<?php  
require 'connection.php';
@session_start();
$fac=$_SESSION['log'];
$upload_dir = 'uploads/';
$server_url = 'http://srishti-systems.info/projects/College';
$id=$_REQUEST['id'];
$semester=$_REQUEST['semester'];
$subject=$_REQUEST['subject'];

    $avatar_name = $_FILES["avatar"]["name"];
    $avatar_tmp_name = $_FILES["avatar"]["tmp_name"];
    $error = $_FILES["avatar"]["error"];

     $random_name = rand(1000,1000000)."-".$avatar_name;
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);


        $logo= $server_url."/".$upload_name;
  
if(move_uploaded_file($avatar_tmp_name,$upload_name)) {
   $sql="insert into `semester_subject`(semester,subject,batch_id,file,faculty_id) values('$semester','$subject','$id','$logo','$fac')";
$result=$con->query($sql);
$count=$con->affected_rows;

header("location:add_batch_subject.php?status=success");
 //echo "success";
}
else{
	// echo $sql;
	 header("location:add_batch_subject.php?status=success");
//echo "failed";
}  

 
 
?>  