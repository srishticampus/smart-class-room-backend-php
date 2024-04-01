<?php
@session_start();
if(!isset($_SESSION['log'])){
  echo "please login";
 // header("location:login.php");
  exit();
}

  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <!-- <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo.svg" alt="logo" /></a> -->
          <!-- <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
          <h3 style="color: #b366ff;">Smart Class</h3>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
          
            
          
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="logout.php">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
           
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <!--  <li class="nav-item">
              <a class="nav-link" href="add_batch_subject.php">
                <span class="menu-title">Add Subject</span>
                
              </a>
            </li> -->
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
                <span class="menu-title">Subject</span>
                 <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                
              </a>
              <div class="collapse" id="ui-basic4">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add_batch_subject.php">Add Subject</a></li>
                  <li class="nav-item">   <a class="nav-link" href="view_subject.php">View Subject</a></li>
                  <!-- <li class="nav-item">   <a class="nav-link" href=" view_submit_assignment.php">Submitted Assignment</a></li> -->
                </ul>
              </div>
            </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Assignment</span>
                 <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add_assignment.php">Add assignment</a></li>
                  <li class="nav-item">   <a class="nav-link" href="assignment_topic_view.php">View Assignment</a></li>
                  <li class="nav-item">   <a class="nav-link" href=" view_submit_assignment.php">Submitted Assignment</a></li>
                </ul>
              </div>
            </li>

              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Study Material</span>
                 <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add_note.php">Upload Stydy Material</a></li>
                     <li class="nav-item"> <a class="nav-link" href="View_note.php">View Study Meterial</a></li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                <span class="menu-title">Online Test</span>
                 <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                
              </a>
              <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="exam.php">Fix Exam</a></li>
                  <li class="nav-item"> <a class="nav-link" href="online_test.php">Add Question</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_exam.php">View Exam</a></li>
                  <li class="nav-item"> <a class="nav-link" href="View_question.php">View Question</a></li>
                  <li class="nav-item"> <a class="nav-link" href="online_test_result.php">Test Result</a></li>
                     
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student_progress.php">
                <span class="menu-title">Student Progress</span>
                
              </a>
            </li>
          
            <!-- <li class="nav-item">
              <a class="nav-link" href="add_assignment.php">
                <span class="menu-title">Add assignment</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="assignment_topic_view.php">
                <span class="menu-title">View Topic</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href=" view_submit_assignment.php">
                <span class="menu-title">View assignment</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li> -->
            
            
          </ul>
        </nav>