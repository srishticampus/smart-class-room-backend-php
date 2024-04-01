


<?php
require 'connection.php';
$asign_code=$_REQUEST['assign_id'];
$material_id=$_REQUEST['material_id'];

if($asign_code!=""){
// $stud_id=$_REQUEST['stud_id'];
$sql="select * from `submit_assignment` where assign_id='$asign_code'";
$result=$con->query($sql);
}
else if($material_id!=""){
	$sql="select * from `study_material` where material_id='$material_id'";
$result=$con->query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#view{
		text-align: center;
	}
</style>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12" id="view">
<?php

$row=$result->fetch_assoc();
?>
<!-- <div  class="embed-responsive embed-responsive-21by9">
			<embed src="<?php echo $row['file'];?>" class="embed-responsive-item"/>
			</div> -->

<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="<?php echo $row['file'];?>"></iframe>
  </div>

				</div>
	</div>
</div>
</body>
</html>