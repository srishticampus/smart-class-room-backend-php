<?php
require 'connection.php';
// $file = 'http://srishti-systems.info/projects/College/api/uploads/389309-akhil-suku-cv.pdf';
// $filename = 'http://srishti-systems.info/projects/College/api/uploads/389309-akhil-suku-cv.pdf';

$post['status']="error";
 $stud_id=$_REQUEST['stud_id'];
 $semester=$_REQUEST['semester'];
$subject=$_REQUEST['subject'];
$batch_id=$_REQUEST['batch_id'];
  $result=$con->query("select * from `submit_assignment` where stud_id='$stud_id' and semester='$semester' and subject='$subject' and batch_id='$batch_id' ");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
    $assign_id=$row['assign_id'];
    // "file"   => 'http://srishti-systems.info/projects/College/api/read.php?assign_id='.$assign_id.''

                  $data[] =array(
                    "assign_id"   => $row['assign_id'],
                    "file"   => $row['file']
                                  );                 
$post = array("status"=>"success","Assignment_details"=>$data);


}
}
 else {
    $post['status']="fail";
}


echo(json_encode($post));


// header('Content-type: application/pdf');
// header('Content-Disposition: inline; filename="' . $filename . '"');
// header('Content-Transfer-Encoding: binary');
// header('Content-Length: ' . filesize($file));
// header('Accept-Ranges: bytes');
// @readfile($file);
?>