<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from study_material where material_id='$id'";
$result=$con->query($sql);
if(!$result){
	header("location:View_note.php?status=failed");

}
else{
	header("location:View_note.php?status=success");
}

?>