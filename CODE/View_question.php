
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
              <h3 class="page-title"> View Question</h3>
             
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   <!--  <h4 class="card-title">Gradient buttons</h4> -->
                   <form method="post" action="View_question.php">

                       <?php

$ro=$r->fetch_assoc();
                        ?>
                        <input type="hidden" name="id" value="<?php echo $ro['batch_id'];?>">
                    <div class="form-group"> <label>Select Semester</label>
                      <select class="form-control" id="semester" placeholder="Name" name="semester">
                          <option>Select Semester</option>
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
                       <select class="form-control" id="subject" placeholder="Name" name="subject">
                          <option>Select Semester</option>
                        </select>
                      </div>
                       <div class="form-group"> <label>Select Exam</label>
                      <select class="form-control" id="title" placeholder="Name" name="title">
                          <option>Select Semester</option>
               <!--            <?php
$sql="select * from exam ";
$result=$con->query($sql);
$count=$con->num_rows;
while($row=$result->fetch_assoc()){
 //foreach ($result as $country) {
 // echo $country;
    
                          ?>
                          <option value="<?php echo $row["exam_id"]; ?>"><?php echo $row["exam_title"]; ?></option>
<?php
}
?> -->
                        </select>

</div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>

                   </form>
                   <br><br>
            
<?php
$i=1;
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$id=$_POST['id'];
$title=$_POST['title'];
$sec=$_SESSION['log'] ;
$query= "select * from `online_test` where semester='$semester' and batch_id='$id' and subject='$subject' and exam_id='$title' and faculty_id='$sec' ";
$res=$con->query($query);
$count=$res->num_rows;



?>
  <table>

                      
                      <?php

if($count>0){
   echo '<h1><center>Question Paper</center></h1>';
while($row=$res->fetch_assoc()){

                      ?>


                      <tbody>
                        <tr>
                          <td ><?php echo $i++;?>. </td>
                          <td colspan="3"> <?php echo $row['question'];?></td>
                         
                          
                          
                         
                         
                        </tr>
                        <tr> <td colspan="4">
                           a). <?php echo $row['a'];?> &nbsp;&nbsp;b).<?php echo $row['b'];?>&nbsp;&nbsp;c).<?php echo $row['c'];?>&nbsp;&nbsp;d).<?php echo $row['d'];?>
                          </td></tr>
                       
                      </tbody>
                      <?php
                    }}?>
                    </table>


 






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
                url:'ajaxdata.php',
                data:'subject='+subject,
                success:function(html){
                    $('#title').html(html);
                  
                }
            }); 
        }else{
            $('#title').html('<option value="">Select exam</option>');
           
        }
    });
  });
    </script>
    
    <!-- endinject -->
  </body>
</html>