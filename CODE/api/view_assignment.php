<?php
 require("connection.php");
 $post['status']="error";
 $batch_id=$_REQUEST['batch_id'];
 $semester=$_REQUEST['semester'];
 $stud_id=$_REQUEST['stud_id'];
$st=$con->query("select * from `submit_assignment` where stud_id='$stud_id'");
$ro=$st->fetch_assoc();
$flag=$ro['submit_flag'];
$ass=$ro['assign_id'];

  $result=$con->query("select * from `assign_sub` where semester='$semester' and batch_id='$batch_id'");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
     $ass_id=$row['assign_id'];
  $st=$con->query("select * from `submit_assignment` where stud_id='$stud_id' and assign_id='$ass_id'");

$ro4=$st->fetch_assoc();

$flag=$ro4['submit_flag'];
$ass=$ro4['assign_id'];
  
     

// $sub=$row['subject'];
// //echo $sub;
// $sql=$con->query("select * from semester_subject where subject='$sub'");
// $ro=$sql->fetch_assoc();
$ass_id=$row['assign_id'];

if($ass!=$ass_id){
                  $data[] =array(
                  	"assign_id"=>$row['assign_id'],
                    "batch_id" => $row['batch_id'],
                    "semester" => $row['semester'],
                    "subject"   => $row['subject'],
                    "topic"   => $row['topic'] ,
                    "submittion_date"   => $row['submittion_date'],
                    "faculty_id"=>$row['faculty_id'],
                    "image"=>$row['file']
                                  );

}
$post = array("status"=>"success","Assignment_details"=>$data);


}
}
 else {
    $post['status']="fail";
}



header('Content-Type: application/json');
echo(json_encode($post));

?>
