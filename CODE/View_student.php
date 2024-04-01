
<?php
require 'connection.php';
@session_start();

$studid=$_GET['studid'];
$id=$_SESSION['log'];
$s="select * from `faculty_reg` where faculty_id='$id'";
$r=$con->query($s);
$ro=$r->fetch_assoc();
 $batch=$ro['batch_id'];

?><?php include 'header.php';?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> View Student </h3>
             
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   <!--  <h4 class="card-title">Gradient buttons</h4> -->
                   
            




 
                              
<?php
$i=1;
$semester=$_POST['semester'];
$code=$_POST['code'];
$id=$_POST['id'];
$query= "select * from `student_reg` where stud_id='$studid' ";
$res=$con->query($query);
$count=$res->num_rows;



?>
  <form>
                      
                      <?php
if($count>0){
while($row=$res->fetch_assoc()){

                      ?>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Name</label>
                          <input type="text" name="" value="<?php echo $row['name'];?>" class="form-control"></div> 
                         <div class="form-group"> <label for="exampleInputEmail3">Email</label>
                          <input type="text" name="" value="<?php echo $row['email'];?>" class="form-control"> </div>
                        <div class="form-group">
                        <label for="exampleInputEmail3">Course</label>
                         <input type="text" name="" value="<?php echo $row['batch'];?>" class="form-control"> </div>
                         <div class="form-group">
                         <label for="exampleInputEmail3">Semester</label>
                          <input type="text" name="" value="<?php echo $row['semester'];?>" class="form-control"> </div>
                         
                        </form>
                      <?php
                    }}?>

 




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
  });
    </script>
    <!-- endinject -->
  </body>
</html>