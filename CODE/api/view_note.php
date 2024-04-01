<?php
 require("connection.php");
 $post['status']="error";
 $batch_id=$_REQUEST['batch_id'];
 $semester=$_REQUEST['semester'];
$subject=$_REQUEST['subject'];
  $result=$con->query("select * from `study_material` where semester='$semester' and batch_id='$batch_id'");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
    $material_id=$row['material_id'];
    $sub=$row['subject'];
     $re=$con->query("select * from `semester_subject` where subject='$sub' ");
$roe=$re->fetch_assoc();
//"note"   => 'http://srishti-systems.info/projects/College/api/read.php?material_id='.$material_id.''
                  $data[] =array(
                  	"material_id"=>$row['material_id'],
                    "batch_id" => $row['batch_id'],
                    "semester" => $row['semester'],
                    "subject"   => $row['subject'],
                    "title"   => $row['title'],
                    "note"   => $row['file'],
                   
                    "faculty_id"=>$row['faculty_id'],
                    "subject_image"=>$roe['file']
                                  );                 
$post = array("status"=>"success","study_material"=>$data);


}
}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
