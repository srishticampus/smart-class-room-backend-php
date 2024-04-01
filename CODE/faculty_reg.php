<?php
require ("connection.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Login/css/util.css">
  <link rel="stylesheet" type="text/css" href="Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <!-- //style="background-image: url('images/bg-01.jpg');" action="facult_reg_action.php" -->
  
  <!-- //style="background-image: url('images/bg-01.jpg');" -->
  <div class="container-login100" >
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style=" width: 500px;">
      <form class="login100-form validate-form" action="facult_reg_action.php" method="post">
        <span class="login100-form-title p-b-37">
          Sign Up
        </span>

        <div class="wrap-input100 validate-input m-b-20" >
          <input class="input100" type="text" name="name" placeholder="Name">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input m-b-20" >
          <input class="input100" type="email" name="email" placeholder="Email">
          <span class="focus-input100"></span>
        </div>
         <div class="wrap-input100 validate-input m-b-20" >
          <select class="input100" type="text" name="batch" placeholder="Batch Eg:Computer Science" style="border-style:none;outline: none;">
            <option>Select Batch</option>
                           <?php
$sql="select * from batch";
$result=$con->query($sql);
$count=$con->num_rows;
while($row=$result->fetch_assoc()){
 //foreach ($result as $country) {
 // echo $country;
    
                          ?>
                          <option value="<?php echo $row["batch_name"]; ?>"><?php echo $row["batch_name"]; ?></option>
<?php
}?>
          </select>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
          <input class="input100" type="password" name="password" placeholder="password">
          <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Sign Up
          </button>
        </div>

       

        

       
      </form>

      
    </div>
  </div>
  
  
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="Login/vendor/bootstrap/js/popper.js"></script>
  <script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="Login/vendor/daterangepicker/moment.min.js"></script>
  <script src="Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="Login/js/main.js"></script>
   <!-- <script type="text/javascript">

        function updateTextArea() {

            var allVals = [];

            $('#mydiv :checked').each(function () {

                allVals.push($(this).val());

            });
//alert(allVals);
            $('#txtValue').val(allVals);

        }

        $(function () {

            $('#mydiv input').click(updateTextArea);

            updateTextArea();



        });




    </script> -->
    <script>
function getState() {
        var str='';
        var val=document.getElementById('country-list');
        for (i=0;i< val.length;i++) { 
            if(val[i].selected){
                str += val[i].value + ','; 
            }
        }         
        var str=str.slice(0,str.length -1);
     // alert(str);
    $.ajax({          
          type: "GET",
          url: "get_state.php",
          data:'country_id='+str,
          success: function(data){
            $("#state-list").html(data);
          }
  });
}


$(document).ready(function() {
  $('#butsave').on('click', function() {
   // $("#butsave").attr("disabled", "disabled");
    var name = $('#name').val();
    var email = $('#email').val();
    var course = $('#course').val();
    var country = $('#country-list').val();
    var state = $('#state-list').val();
    var password = $('#password').val();
   
      $.ajax({
        url: "facult_reg_action.php",
        type: "POST",
        data: {
          name: name,
          email: email,
          course: course,
          country: country,
          state:state,
          password:password        
        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==200){
            
            $("#success").show();
            $('#success').html('Data added successfully !');            
          }
          else if(dataResult.statusCode==201){
            $("#success").show();
            $('#success').html('Data added failed !'); 
          }
          
        }
      });
    
    
  });
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

</body>
</html>