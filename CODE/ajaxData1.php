<?php 
// Include the database config file 
require 'connection.php';
 $sub=$_POST["subject"];
//if(!empty($_POST["semester"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM exam WHERE subject = '$sub' and type='1'  ORDER BY subject ASC"; 
    $result = $con->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select exam</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['exam_title'].'">'.$row['exam_title'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Exam not available</option>'; 
    } 
//}
?>