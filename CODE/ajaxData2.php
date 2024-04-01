<?php 
// Include the database config file 
require 'connection.php';
 $sem=$_POST["semester"];
//if(!empty($_POST["semester"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM student_reg WHERE semester = '$sem'  ORDER BY semester ASC"; 
    $result = $con->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select student</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['stud_id'].'">'.$row['name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Student not available</option>'; 
    } 
//}
?>