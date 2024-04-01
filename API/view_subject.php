<?php
 require("connection.php");
 $post['status']=false;
$semester=$_REQUEST['semester'];
$batch_id=$_REQUEST['batch_id'];

  $result=$con->query("select * from `semester_subject` where semester='$semester' and batch_id='$batch_id'");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
    

                  $data[] =array(
                  	"sub_id"=>$row['sub_id'],
                    "subject" => $row['subject'],
                    "image" => $row['file']
                                  );                 
$post = array("status"=>true,"Subject"=>$data);


}
}
 else {
    $post['status']=false;
}


echo(json_encode($post));

?>
