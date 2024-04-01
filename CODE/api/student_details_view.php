<?php
 require("connection.php");
 $post['status']="error";
 $stud_id=$_REQUEST['stud_id'];


  $result=$con->query("select * from `student_reg` where stud_id='$stud_id'");
$count=$result->num_rows;
if($count>0)
{
   $r=$con->query("select count(*) from `submit_assignment` where stud_id='$stud_id'");
$ro=$r->fetch_assoc();

 
while($row=$result->fetch_assoc())
{
   $sem= $row['semester'];
   $re=$con->query("select count(*) from `assign_sub` where semester='$sem'");
$row1=$re->fetch_assoc();
 $re1=$con->query("select count(*) from `exam` where semester='$sem' and type='1'");
$row2=$re1->fetch_assoc();
 $re2=$con->query("select * from `exam` where semester='$sem'");
$row4=$re2->fetch_assoc();
$subj=$row4['subject'];
$re1=$con->query("select count(*) from `exam_result` where stud_id='$stud_id'");
$row3=$re1->fetch_assoc();
$se=$row['semester'];



                  $data[] =array(
                  	"stud_id"=>(int)$row['stud_id'],
                    "name" => $row['name'],
                    "email" => $row['email'],
                    "batch"   => $row['batch'],
                    "semester"   => $row['semester'] ,
                    "password"   => $row['password'],
                    "batch_id"=>(int)$row['batch_id'],
                    "reg_no"=>$row['regno'],
                    "submitted_assignment"=>(int)$ro['count(*)'],
                    "total_assignment"=>(int)$row1['count(*)'],
                    "pending_assignment"=>$row1['count(*)']-$ro['count(*)'],
                    "total_exam"=>(int)$row2['count(*)'],
                     "submitted_exam"=>(int)$row3['count(*)'],
                     "pending_exam"=>$row2['count(*)']-$row3['count(*)']

                                  ); 

      


//echo $ass;
                  $sql=$con->query("select * from `assign_sub` where semester='$se'");
                  $co=$sql->num_rows;
if($co>0){
while($ro=$sql->fetch_assoc())
{
  $ass_id=$ro['assign_id'];
  $st=$con->query("select * from `submit_assignment` where stud_id='$stud_id' and assign_id='$ass_id'");

$ro4=$st->fetch_assoc();

$flag=$ro4['submit_flag'];
$ass=$ro4['assign_id'];
  
     
if($ass_id!=$ass){
    
//   $s= $ro['subject'];
//    $a=$con->query("select * from semester_subject where semester='$sem' and subject='$s'");
// $b=$a->fetch_assoc();
//   $im=$b['file'];




 $data1[] =array(
                    "assign_id"=>(int)$ro['assign_id'],
                    "batch_id" => (int)$ro['batch_id'],
                    "semester" => $ro['semester'],
                    "subject"   => $ro['subject'],
                    "topic"   => $ro['topic'] ,
                    "submittion_date"   => $ro['submittion_date'],
                    "faculty_id"=>(int)$ro['faculty_id'],
                    "assignment_image"=>$ro['file']
                   
                                  );
 

}
}
}
else{
  $data1=array();
}



  

 
           $sql1=$con->query("select * from `exam` where semester='$se' and type='1' ");
                  $co1=$sql1->num_rows;
if($co1>0)
{
while($ro1=$sql1->fetch_assoc())
{$sub= $ro1['subject'];




  $e=(int)$ro1['exam_id'];
  $d="select * from exam_result where exam_id='$e' and stud_id='$stud_id'";
  $res=$con->query($d);
  $f=$res->fetch_assoc();

  $e1=$f['exam_id'];
   $o="select * from semester_subject where  subject='$sub'";
   $p=$con->query($o);
   $x=$p->fetch_assoc();
   $im1=$x['file'];
  if($e!=$e1){

 
 
 $data2[] =array(
                    "exam_id"=>(int)$ro1['exam_id'],
                    "batch_id" => (int)$ro1['batch_id'],
                    "semester" => $ro1['semester'],
                    "subject"   => $ro1['subject'],
                    "title"   => $ro1['exam_title'],
                     "date"   => $ro1['exam_date'],
                     "examtime"=>$ro1['examtime'],
                   
                    "faculty_id"=>(int)$ro1['faculty_id'],
                     "exam_image"=>$im1
                   
                   
                                  );
}


}
}
else{
  $data2=array();
}

           $sql2=$con->query("select * from `study_material` where semester='$se' ");
                  $co2=$sql2->num_rows;
if($co2>0){
while($ro2=$sql2->fetch_assoc())
{
  $s2= $ro2['subject'];
   $a2=$con->query("select * from semester_subject where semester='$sem' and subject='$s2'");
$b2=$a2->fetch_assoc();
  $im2=$b2['file'];
 $data3[] =array("material_id"=>(int)$ro2['material_id'],
                    "batch_id" => (int)$ro2['batch_id'],
                    "semester" => $ro2['semester'],
                    "subject"   => $ro2['subject'],
                    "title"   => $ro2['title'],
                    "note"   => $ro2['file'],
                   
                    "faculty_id"=>(int)$ro2['faculty_id'],
                     "material_image"=>$im2
                   
                                  );

}
}
else{
  $data3=array();
}



$post = array("status"=>"success","Student_details"=>$data,"Assignment"=>$data1,"Exam"=>$data2,"Note"=>$data3);


}
}
 else {
    $post['status']="fail";
}

 header('Content-Type: application/json');
echo(json_encode($post));

?>
