<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from assign_sub where assign_id='$id'";
$result=$con->query($sql);
if(!$result){
	header("location:assignment_topic_view.php?status=failed");

}
else{
	header("location:assignment_topic_view.php?status=success");
}

?>