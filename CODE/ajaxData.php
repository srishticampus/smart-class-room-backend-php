<?php 
// Include the database config file 
require 'connection.php';
session_start();
 $sub=$_POST["subject"];
 $sec=$_SESSION['log'];
//if(!empty($_POST["semester"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM exam WHERE subject = '$sub' and faculty_id='$sec'  ORDER BY subject ASC"; 
    $result = $con->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select exam</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['exam_id'].'">'.$row['exam_title'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Exam not available</option>'; 
    } 
//}
?>