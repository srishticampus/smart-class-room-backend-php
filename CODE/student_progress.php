
<?php
require 'connection.php';
@session_start();
$id=$_SESSION['log'];
$s="select * from `faculty_reg` where faculty_id='$id'";
$r=$con->query($s);?>
<?php include 'header.php';?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Student Progress</h3>
             
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   <!--  <h4 class="card-title">Gradient buttons</h4> -->
                   <form method="post" action="student_progress.php">
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
                       
                    <div class="form-group"> <label>Select Student</label>
                     <select class="form-control" id="exam" placeholder="Name" name="exam"  required="">
                          <option value="">Select student</option>
                          <?php
                          $id=$ro['batch_id'];
$sql="select * from student_reg where batch_id='$id'   ";
$result=$con->query($sql);
$count=$con->num_rows;
while($row=$result->fetch_assoc()){
 //foreach ($result as $country) {
 // echo $country;
    
                          ?>
                          <option value="<?php echo $row["stud_id"]; ?>"><?php echo $row["name"].' '.$row["semester"]; ?></option>
<?php
}
?>
                        </select>

</div>
                       <!--  <div class="form-group">
                        <label for="exampleInputEmail3">Subject</label>
                       <select class="form-control" id="subject" placeholder="Name" name="subject">
                          <option>Select Semester</option>
                        </select>
                      </div> -->
                      

                   </form>
                   <br><br>

   

               <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
<h4 style="text-align: center; color:  #b366ff">Students Progress</h4>

                    
                 
                     <div id="chart-container">
        <canvas id="mycanvas"></canvas>
    </div>

                  </div>
                </div>
              </div>
              <!--  <div class="col-md-6 grid-margin stretch-card">
                 

                 <div class="card">
                  <div class="card-body">
<h4 style="text-align: center; color:  #b366ff"></h4>

                    <select class="form-control" id="exam1" placeholder="Name" name="exam1"  required="">
                          <option value="">Select Exam</option>
                          <?php
$sql="select * from exam ";
$result=$con->query($sql);
$count=$con->num_rows;
while($row=$result->fetch_assoc()){
 //foreach ($result as $country) {
 // echo $country;
    
                          ?>
                          <option value="<?php echo $row["exam_title"]; ?>"><?php echo $row["exam_title"].' '.$row["semester"]; ?></option>
<?php
}
?>
                        </select>
                 
                     <div id="chart-container">
        <canvas id="mycanvas1"></canvas>
    </div>

                  </div>
                </div>
              
               </div> -->
             
            </div>



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



 $('#exam').on('change', function(){
              var exam = $('#exam').val();
              //alert(exam);

  $.ajax({
    url : "data.php",
    type : "post",
   data:'exam='+exam,
    success : function(data){
     // alert(data);
      console.log(data);

      var userid = [];
      var facebook_follower = [];
      var twitter_follower = [];
      var googleplus_follower = [];

      for(var i in data) {
        userid.push(data[i].exam_title);
        facebook_follower.push(data[i].name);
        twitter_follower.push(data[i].no_of_correct_answer);
        googleplus_follower.push(data[i].subject);
      }

      var chartdata = {
        labels: userid,
        datasets: [
          
          {
            label: "Mark",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(29, 202, 255, 0.75)",
            borderColor: " #b366ff",
            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
            pointHoverBorderColor: "rgba(29, 202, 255, 1)",
            data: twitter_follower
          }
        ]
      };

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },
    error : function(data) {

    }
  });
});




    $('#semester').on('change', function(){
     // alert('hai');
        var semester = $(this).val();
       // alert(countryID);
        if(semester){
            $.ajax({
                type:'POST',
                url:'ajaxData2.php',
                data:'semester='+semester,
                success:function(html){
                    $('#exam').html(html);
                  
                }
            }); 
        }else{
            $('#exam').html('<option value="">Select country first</option>');
           
        }
    });
 
          


//             $('#exam1').on('change', function(){
//               var exam1 = $(this).val();
//              // alert(exam1);

//   $.ajax({
//     url : "data3.php",
//     type : "post",
//    data:'exam1='+exam1,
//     success : function(data){
//       console.log(data);
//       //alert(data);

//       var userid = [];
//       var facebook_follower = [];
//       var twitter_follower = [];
//       var googleplus_follower = [];

//       for(var i in data) {
//         userid.push(data[i].name);
//         facebook_follower.push(data[i].name);
//         twitter_follower.push(data[i].no_of_correct_answer);
//         googleplus_follower.push(data[i].subject);
//       }

//       var chartdata = {
//         labels: "",
//         datasets: [
          
//           {
//             label: "Mark",
//             fill: false,
//             lineTension: 0.1,
//             backgroundColor: "rgba(29, 202, 255, 0.75)",
//             borderColor: " #b366ff",
//             pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
//             pointHoverBorderColor: "rgba(29, 202, 255, 1)",
//             data: twitter_follower
//           }
//         ]
//       };

//       var ctx = $("#mycanvas1");

//       var LineGraph = new Chart(ctx, {
//         type: 'bar',
//         data: chartdata
//       });
//     },
//     error : function(data) {

//     }
//   });
// });


            $.ajax({
    url : "data1.php",
    type : "post",
   data:'exam='+exam,
    success : function(data){
      console.log(data);

      var userid = [];
      var facebook_follower = [];
      var twitter_follower = [];
      var googleplus_follower = [];

      for(var i in data) {
        // userid.push(data[i].exam_title);
        facebook_follower.push(data[i].name);
        twitter_follower.push(data[i].no_of_correct_answer);
        googleplus_follower.push(data[i].subject);
      }
userid.push("a","b","c","d");
      var chartdata = {
        labels: userid,
        datasets: [
          
          {
            label: "Mark",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(29, 202, 255, 0.75)",
            borderColor: " #b366ff",
            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
            pointHoverBorderColor: "rgba(29, 202, 255, 1)",
            data: twitter_follower
          }
        ]
      };

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },
    error : function(data) {

    }
  });
     
     });   </script>
    
    <!-- endinject -->
  </body>
</html>