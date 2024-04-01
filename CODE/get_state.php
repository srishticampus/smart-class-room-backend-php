<?php

require("connection.php");

// if(!empty($_GET['country_id'])) {
//         $coun_id = $_GET["country_id"];           
	$query ="SELECT * FROM `semester_subject`";
	$results = $con->query($query);
?>
	<option value="">Select State</option>
<?php
while ($row=$results->fetch_assoc()) {

	foreach($row as $state) {
?>
	<option value="<?php echo $state["subid"]; ?>"><?php echo $state["subject"]; ?></option>
<?php
	}
}
// }
?>