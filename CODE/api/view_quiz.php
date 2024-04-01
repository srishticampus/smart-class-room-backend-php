<?php
 require("connection.php");
 $post['status']="error";
 $exam_id=$_REQUEST['exam_id'];




   $r=$con->query("select count(*) from `online_test` where exam_id='$exam_id' ");
$ro=$r->fetch_assoc();

   $result1=$con->query("select * from `exam` where exam_id='$exam_id' ");
$count1=$result1->num_rows;
if($count1>0)
{
  $row2=$result1->fetch_assoc();
  $sub=$row2['subject'];
  $re=$con->query("select * from `semester_subject` where subject='$sub' ");
$roe=$re->fetch_assoc();
    $data[] =array(
                    "exam_id"=>$row2['exam_id'],
                    "batch_id" => $row2['batch_id'],
                    "semester" => $row2['semester'],
                    "subject"   => $row2['subject'],
                    "faculty_id"=>$row2['faculty_id'],
                    "exam_title"=>$row2['exam_title'],
                    "question_count"=> $ro['count(*)'],
                    "subject_image"=>$roe['file']
                                  ); 
}

  $result=$con->query("select * from `online_test` where exam_id='$exam_id' ");
$count=$result->num_rows;
if($count>0)
{
 // $row1=$result->fetch_assoc();
  

    // $data[] =array(
    //                 "test_id"=>$row1['test_id'],
    //                 "batch_id" => $row1['batch_id'],
    //                 "semester" => $row1['semester'],
    //                 "subject"   => $row1['subject'],
    //                 "faculty_id"=>$row1['faculty_id']
    //                               );  
while($row=$result->fetch_assoc())
{
    
$correct=$row['correct_answer'];
                  // $data[] =array(
                  // 	"test_id"=>$row['test_id'],
                  //   "batch_id" => $row['batch_id'],
                  //   "semester" => $row['semester'],
                  //   "subject"   => $row['subject'],
                  //   "faculty_id"=>$row['faculty_id']
                  //                 );  
                                  $data1[] =array(
                    "question"=>$row['question'],
                    "a" => $row['a'],
                    "b" => $row['b'],
                    "c"   => $row['c'],
                    "d"=>$row['d'],"Correct_answer"=>$correct

                                  );  

$post = array("status"=>"success","Quiz_details"=>$data,"Question"=>$data1);


}
}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
