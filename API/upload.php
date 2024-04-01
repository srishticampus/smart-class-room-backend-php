<?php
 
//importing dbDetails file
require 'connection.php';
 
//this is our upload folder
$upload_path = 'uploads/';
 
//Getting the server ip
$server_ip = gethostbyname(gethostname());
 
//creating the upload url
$upload_url = 'http://srishti-systems.info/projects/College/api/';



//response array
$response = array();
 
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //checking the required parameters from the request
    if( isset($_FILES['pdf']['name'])){
 
        //connecting to the database
      //  $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die('Unable to Connect...');
 
        //getting name from the request
        
 $batch_id=$_POST['batch_id'];
$asign_code=$_POST['asign_code'];
$assign_id=$_POST['assign_id'];

$semester=$_POST['semester'];
$stud_id=$_POST['stud_id'];
$subject=$_POST['subject'];
$faculty_id=$_POST['faculty_id'];
        //getting file info from the request
        $fileinfo = pathinfo($_FILES['pdf']['name']);
 
        //getting the file extension
        $extension = $fileinfo['extension'];
 
        //file url to store in the database
        //$file_url = $upload_url . getFileName() . '.' . $extension;
 
        //file path to upload in the server
       $random_name = rand(1000,1000000)."-".$fileinfo;
        $upload_name = $upload_path.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);


        $logo=$upload_url."/".$upload_name;
        //echo $file_path;die();
 
        //trying to save the file in the directory
        try{
            //saving the file
            move_uploaded_file($_FILES['pdf']['tmp_name'],$upload_name);
            $sql = "insert into `submit_assignment`(batch_id,asign_code,assign_id,
semester,file,stud_id,subject,faculty_id) values('$batch_id','$asign_code','$assign_id',
'$semester','$logo','$stud_id','$subject','$faculty_id')";
 
            //adding the path and name to database
            if($con->query($sql)){
 
                //filling response array with values
                $response['error'] = false;
                $response['url'] = $logo;
              
            }
            //if some error occurred
        }catch(Exception $e){
            $response['error']=true;
            $response['message']=$e->getMessage();
        } 
        //closing the connection
       
    }else{
        $response['error']=true;
        $response['message']='Please choose a file';
    }
    
    //displaying the response
    echo json_encode($response);
}
 
/*
We are generating the file name
so this method will return a file name for the image to be upload
*/
function getFileName(){
  
    $sql = "SELECT max(submit_id) as submit_id FROM submit_assignment";
    $result = $con->query($sql);
 
   // mysqli_close($con);
    if($result['submit_id']==null)
        return 1;
    else
        return ++$result['submit_id'];
}