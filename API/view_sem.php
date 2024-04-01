<?php
 require("connection.php");
 $post['status']="error";


  $result=$con->query("select * from `semester`");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
    

                  $data[] =array(
                  	"sem_id"=>$row['sem_id'],
                    "semester" => $row['semester']
                                  );                 
$post = array("status"=>"success","Semester_details"=>$data);


}
}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
