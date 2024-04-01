
<?php
require 'connection.php';
@session_start();
$id=$_SESSION['log'];
$s="select * from `faculty_reg` where faculty_id='$id'";
$r=$con->query($s);

?><?php include 'header.php';?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Online Test </h3>
             
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   <!--  <h4 class="card-title">Gradient buttons</h4> -->
                   
            




 
                    <form class="forms-sample" >
                                    <div class="alert alert-success alert-dismissible fade show" id="success" style="display: none">
    <strong>Success!</strong> Question added Successfully.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>

<div class="alert alert-warning alert-dismissible fade show" style="display: none;" id="failed">
    <strong>Warning!</strong> Question added Failed.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
                         <?php

$ro=$r->fetch_assoc();
                        ?>
                        <input type="hidden" name="id" value="<?php echo $ro['batch_id'];?>" id="id">
                        <input type="hidden" name="id1" value="<?php echo $id;?>" id="id1">
                       
                      <div class="form-group">
                     
                        <label for="exampleInputName1">Semester</label>
                        <select class="form-control" id="semester" placeholder="Name" name="semester"  required="">
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
                      <div class="form-group">
                        <label for="exampleInputEmail3">Subject</label>
                       <select class="form-control" id="subject" placeholder="Name" name="subject" required="">
                          <option value="">Select Semester</option>
                        </select>
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">Exam Title</label>
                       
                       <select class="form-control" id="title" placeholder="Exam Title" name="title" required="" >
                          <option value="">Select Exam title</option>
                           <?php
                           $e=$ro['batch_id'];
$sql="select * from `exam` where batch_id='$e'";
$result=$con->query($sql);
$count=$con->num_rows;
while($row=$result->fetch_assoc()){
 //foreach ($result as $country) {
 // echo $country;
    
                          ?>
                          <option value="<?php echo $row["exam_title"]; ?>"><?php echo $row["exam_title"]; ?></option>
<?php
}
?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Question</label>
                        <textarea class="form-control" id="question" placeholder="Question" name="question" required=""></textarea>
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleSelectGender">Assignment Code</label>
                       <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Assignment Code" name="Code">
                      </div> -->
                      <div class="form-group">
                        <label for="exampleSelectGender">Option A</label>
                       <textarea class="form-control" id="optiona" placeholder="Option A" name="optiona" required=""></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Option B</label>
                       <textarea class="form-control" id="optionb" placeholder="Option B" name="optionb" required=""></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Option C</label>
                       <textarea class="form-control" id="optionc" placeholder="Option C" name="optionc" required=""></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Option D</label>
                       <textarea class="form-control" id="optiond" placeholder="Option D" name="optiond" required=""></textarea>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleSelectGender">Correct Option</label>
                       <select class="form-control" id="correct" placeholder="Option D" name="correct" required="">
                         <option value="">Select Correct option</option>
                         <option>a</option>
                         <option>b</option>
                         <option>c</option>
                         <option>d</option>
                       </select>
                      </div>
                      <button type="button" class="btn btn-gradient-primary mr-2" id="submit">Submit</button>
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

    $('#subject').on('change', function(){
     // alert('hai');
        var subject = $(this).val();
       // alert(countryID);
        if(subject){
            $.ajax({
                type:'POST',
                url:'ajaxData1.php',
                data:'subject='+subject,
                success:function(html){
                    $('#title').html(html);
                  
                }
            }); 
        }else{
            $('#title').html('<option value="">Select exam</option>');
           
        }
    });




$('#submit').click(function(){
  var id= $("#id").val();
  var id1=$('#id1').val();
   var semester=$('#semester').val();
    var subject=$('#subject').val();
     var question=$('#question').val();
      var optiona=$('#optiona').val();
      var optionb=$('#optionb').val();
      var optionc=$('#optionc').val();
      var optiond=$('#optiond').val();
      var correct=$('#correct').val();
      var title=$('#title').val();
 $.ajax({
                    type: "POST",  
                    url: "online_test_action.php",
                    data: "id=" + id+ "&id1=" + id1+ "&semester=" + semester+ "&subject=" + subject+ "&question=" + question+ "&optiona=" + optiona+ "&optionb=" + optionb+ "&optionc=" + optionc+ "&optiond=" + optiond+ "&correct=" + correct+"&title="+title,
                    success: function(txt) {
                    if(txt=='success'){
$('#success').show();
$('#semester').val("");
$('#subject').val("");
$('#question').val("");
  $('#optiona').val("");
    $('#optionb').val("");
    $('#optionc').val("");
   $('#optiond').val("");
  $('#correct').val("");

                    }
                    else{
                      $('#failed').show();
                    }
                    }
                });
});



  });
    </script>
    <!-- endinject -->
  </body>
</html>