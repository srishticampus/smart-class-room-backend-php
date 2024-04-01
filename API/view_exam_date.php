<?php
 require("connection.php");
 // $post['status']=false;
 $batch_id=$_REQUEST['batch_id'];
 $semester=$_REQUEST['semester'];
$subject=$_REQUEST['subject'];
$stud_id=$_REQUEST['stud_id'];


  $result=$con->query("select * from `exam` where batch_id='$batch_id' and semester='$semester' and subject='$subject' and type='1'");

$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
    $material_id=$row['material_id'];
    $sub=$row['subject'];
     $e= $row['exam_id'];
//echo $sub;''
    $st=$con->query("select * from `exam_result` where stud_id='$stud_id' and exam_id='$e'");
$ro1=$st->fetch_assoc();
$e1=$ro1['exam_id'];
// $flag=$ro['flag'];

$sql=$con->query("select * from semester_subject where subject='$sub'");
$ro=$sql->fetch_assoc();
if($e!=$e1){
                  $data[] =array(
                  	"exam_id"=>$row['exam_id'],
                    "batch_id" => $row['batch_id'],
                    "semester" => $row['semester'],
                    "subject"   => $row['subject'],
                    "title"   => $row['exam_title'],
                     "date"   => $row['exam_date'],
                     "examtime"=>$row['examtime'],
                   
                    "faculty_id"=>$row['faculty_id'],
                    "image"=>$ro['file']
                                  ); 
                                               
$post = array("status"=>true,"exam"=>$data);}
else{
   $post['status']=false;
}

}
}
else {
    $post['status']=false;
}

//  else {
//     $post['status']=false;
// }

header('Content-Type: application/json');
echo(json_encode($post));

?>
