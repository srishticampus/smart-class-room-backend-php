
<?php
require 'connection.php';

$msg=$_GET['status'];
if($msg=="success"){
    $message = '<div class="alert alert-success"> Subject added Successfully.</div>';
}
else if($msg=="failed"){
    $message = '<div class="alert alert-danger"> Subject added Failed.</div>';
}
@session_start();
$id=$_SESSION['log'];
$s="select * from `faculty_reg` where faculty_id='$id'";
$r=$con->query($s);

?><?php include 'header.php';?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Subject</h3>
             
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   <!--  <h4 class="card-title">Gradient buttons</h4> -->
                   
            




 
                    <form class="forms-sample"  enctype="multipart/form-data" action="add_batch_subject_action.php" method="post">
                                     <!--    <div class="alert alert-success alert-dismissible fade show" id="success" style="display: none">
    <strong>Success!</strong> Subject added Successfully.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>

<div class="alert alert-warning alert-dismissible fade show" style="display: none;" id="failed">
    <strong>Warning!</strong>Subject added Failed.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div> -->

<strong id="msg"><?php echo $message; ?></strong>
                         <?php

$ro=$r->fetch_assoc();
                        ?>
                        <input type="hidden" name="id" value="<?php echo $ro['batch_id'];?>" id="id">
                        <input type="hidden" name="id1" value="<?php echo $id;?>" id="id1">




                        <!-- <div class="form-group">
                     
                        <label for="exampleInputName1">Avaliable Batch</label>
                        <select class="form-control" id="semester" placeholder="Name" name="availablebatch">
                          <option>Select Batch</option>
                          <?php
$sql="select * from batch ";
$result=$con->query($sql);
$count=$con->num_rows;
while($row=$result->fetch_assoc()){
 //foreach ($result as $country) {
 // echo $country;
    
                          ?>
                          <option value="<?php echo $row["batch_name"]; ?>"><?php echo $row["batch_name"]; ?></option>
<?php
}
?>
                        </select>
                      </div> -->


                      <!--  <div class="form-group">
                        <label for="exampleInputPassword4">Add another batch</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Add another batch" name="anotherbatch">
                      </div> -->
                      <div class="form-group">
                     
                        <label for="exampleInputName1">Semester</label>
                        <select class="form-control" id="semester" placeholder="Name" name="semester" required="">
                          <option value="">Select Semester</option>
                          <?php
$sql="select * from semester ";
$result=$con->query($sql);
$count=$con->num_rows;
while($row=$result->fetch_assoc()){
 //foreach ($result as $country) {
 // echo $country;
    
                          ?>
                          <option value="<?php echo $row["semester"]; ?>"><?php echo $row["semester"]; ?></option>
<?php
}
?>
                        </select>
                      </div>
                     <!--  <div class="form-group">
                        <label for="exampleInputEmail3">Available Subject</label>
                       <select class="form-control" id="subject" placeholder="Name" name=" subject">
                          <option>Select Semester</option>
                        </select>
                      </div> -->
                      <div class="form-group">
                        <label for="exampleInputPassword4">Add Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Add subject" name="subject" required="">
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleSelectGender">Assignment Code</label>
                       <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Assignment Code" name="Code">
                      </div> -->
                       <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="avatar" id="avatar" required="">
                       
                      </div>
                     
                     
                      <button type="submit" class="btn btn-gradient-primary mr-2" name="submit" id="submit">Submit</button>
                      <!-- <button class="btn btn-light">Cancel</button> -->
                    </form>
                  







                  </div>
                  
                  </div>
                </div>
              </div>
             
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script type="text/javascript">
         
         window.history.replaceState({}, document.title, "/" + "projects/College/add_batch_subject.php");
     </script>
    <script type="text/javascript">
      $(document).ready(function(){
    $('#semester').on('change', function(){
     // alert('hai');
        var semester = $(this).val();
       // alert(countryID);
        if(semester){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'semester='+semester,
                success:function(html){
                    $('#subject').html(html);
                  
                }
            }); 
        }else{
            $('#subject').html('<option value="">Select country first</option>');
           
        }
    });




// $('#submit').click(function(){
//   var id= $("#id").val();
//   var id1=$('#id1').val();
//    var semester=$('#semester').val();
//     var subject=$('#subject').val();
//     var avatar=$('#avatar').val();
//    // alert(avatar);
     
//  $.ajax({
//                     type: "POST",  
//                     url: "add_batch_subject_action.php",
//                     data: "id=" + id+ "&id1=" + id1+ "&semester=" + semester+ "&subject=" + subject+"&avatar="+avatar,
//                     success: function(txt) {
//                     if(txt=='success'){
// $('#success').show();
// $('#semester').val("");
// $('#subject').val("");
// $('#avatar').val("");

//                     }
//                     else{
//                       $('#failed').show();
//                     }
//                     }
//                 });
// });


  });
    </script>
    <!-- endinject -->
  </body>
</html>