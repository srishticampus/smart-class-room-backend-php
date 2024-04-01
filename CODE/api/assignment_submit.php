<?php
require('connection.php');

// header('Content-Type: application/json; charset=utf-8');
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: PUT, GET, POST");
$upload_dir = 'uploads/';
$server_url = 'http://srishti-systems.info/projects/College/api';
// $batch_id=$_POST['batch_id'];
// $asign_code=$_POST['asign_code'];
$assign_id=$_POST['assign_id'];

// $semester=$_POST['semester'];
$stud_id=$_POST['stud_id'];
// $subject=$_POST['subject'];
// $faculty_id=$_POST['faculty_id'];


// $query1="select id from admin_login";
// $result1=$con->query($query1);
// $count1=$result1->num_rows;
// if($count1>0)
// {
//   while($row1=$result1->fetch_assoc()){
//     $id1 = $row1['id'];
//   }
  

if($_FILES['avatar'])
{
    $avatar_name = $_FILES["avatar"]["name"];
    $avatar_tmp_name = $_FILES["avatar"]["tmp_name"];
    $error = $_FILES["avatar"]["error"];

    // if($error > 0){
    //     $response = array(
    //         "status" => "error",
    //         "error" => true,
    //         "message" => "Error!"
    //     );
    // }else 
    // {


    $sql="select * from `submit_assignment` where assign_id='$assign_id' and stud_id='$stud_id'";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0)
{
$response=array("status" => false);
}

else{

 $sql1="select * from `assign_sub` where assign_id='$assign_id'";
$result1=$con->query($sql1);
$row1=$result1->fetch_assoc();
$batch_id=$row1['batch_id'];
$semester=$row1['semester'];
$subject=$row1['subject'];
$faculty_id=$row1['faculty_id'];


        $random_name = rand(1000,1000000)."-".$avatar_name;
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);


        $logo= $server_url."/".$upload_name;



$sql = "insert into `submit_assignment`(batch_id,assign_id,
semester,file,stud_id,subject,faculty_id,submit_flag) values('$batch_id','$assign_id',
'$semester','$logo','$stud_id','$subject','$faculty_id',1)";
$result=$con->query($sql);
$count=$con->affected_rows;
    
        if(move_uploaded_file($avatar_tmp_name,$upload_name)) {
            

            $response = array(
                "status" => true
              );


        }else
        {
            $response = array(
                "status" => false
            );
        }
   // }
}


    

}
else{
    $response = array(
        "status" => false
    );
}

echo json_encode($response);
?>