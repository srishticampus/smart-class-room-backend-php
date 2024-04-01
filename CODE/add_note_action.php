<?php  
require 'connection.php';
$upload_dir = 'uploads/';
$server_url = 'http://srishti-systems.info/projects/College/';
$semester=$_REQUEST['semester'];
$subject=$_REQUEST['subject'];
$title=$_REQUEST['title'];
//$img=$_REQUEST['img'];
$id=$_REQUEST['id'];
$id1=$_REQUEST['id1']; 
if($_FILES['avatar'])
{
    $avatar_name = $_FILES["avatar"]["name"];
    $avatar_tmp_name = $_FILES["avatar"]["tmp_name"];
    $error = $_FILES["avatar"]["error"];

     $random_name = rand(1000,1000000)."-".$avatar_name;
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);


        $logo= $server_url."/".$upload_name;
  
if(move_uploaded_file($avatar_tmp_name,$upload_name)) {
   $sql="insert into study_material(semester,subject,file,batch_id,faculty_id,title) values('$semester','$subject','$logo','$id','$id1','$title')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){ 
header("location:add_note.php?status=success");
  //echo "success";
}
else{
	header("location:add_note.php?status=failed");
 // echo "failed";
}  
}
 
}
else{  
  header("location:add_note.php?status=failed");
   //echo 'failed'; 
} 
?>  