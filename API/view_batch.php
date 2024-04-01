<?php
 require("connection.php");
 $post['status']="error";

  $result=$con->query("select * from `batch`");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
    

                  $data[] =array(
                    "batch_id" => $row['batch_id'],
                    "batch_name" => $row['batch_name']                      );                 
$post = array("status"=>"success","batch_details"=>$data);


}
}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>