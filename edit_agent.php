

<?php
// include Function  file
include_once('function.php');
// Object creation
$userdata=new DB_con();
if(isset($_POST['submit']))
{
// Posted Values
$nid=$_POST['nid'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$pass=$_POST['pass'];
//Function Calling
$sql=$userdata->addagent($nid,$name,$email,$phone,$location,$pass);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Registration successfull.');</script>";
echo "<script>window.location.href='add-agent.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='add-agent.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'DBConnection.php';
$connc=new DBConnection();

?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
 <link href="http://solar.iot.rw/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script>
// $( document ).ready(function() {
//     $("body").load(window.location.href);
// });
</script>
</head>

<body id="body">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
      ACIoT<i class="bi bi-cpu-fill"></i>
        <span class="d-none d-lg-block">POST IOT</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <!--<h4>hello agent</h4>-->
                <!--<p>rent is successful aproved</p>-->
                <!--<p>30 min. ago</p>-->
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <!--<h4>hello agent</h4>-->
                <!--<p> i have problem in paying</p>-->
                <!--<p>1 hr. ago</p>-->
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <!--<a href="#">Show all notifications</a>-->
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
Yo              <!--u have 3 new messages-->
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <!--<h4>tunka leon</h4>-->
                  <!--<p>do you make repair of your tractors</p>-->
                  <!--<p>4 hrs. ago</p>-->
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-cpu-fill"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2">IoT</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
           
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="admin-dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="add-agent.php">
          <i class="bi bi-person"></i>
          <span>Add-POST SIGN</span>
        </a>
      </li><!-- End Profile Page Nav --> 
        <!--<li class="nav-item">-->
        <!--  <a class="nav-link collapsed" href="Add-tractor.php">-->
        <!--    <i class="bi bi-person"></i>-->
        <!--    <span>Add-Vehicle</span>-->
        <!--  </a>-->
        <!--</li>-->

        <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="home.php">
            <i class="bi bi-person"></i>
            <span>Home</span>
          </a>
        </li -->
      
        <li class="nav-item">
          <a class="nav-link collapsed" href="report.php">
          <i class="bi bi-cpu-fill"></i>
            <span>Report</span>
          </a>
        </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-dashboard.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   
    <section id="rent" class="appointment section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title text-center">
            <h2 style="font-size 8px;">  welcome </h2>
          </div>
            <br>
            <?php
include_once('DBConnection.php');
// Object creation
$conn=new DBConnection();
if(!empty($_GET['sn']))
{
$id=$_GET['sn'];

$edit=$conn->getOne("SELECT* FROM agent WHERE id='".$id."'");
$_SESSION['edit']=$edit;

?>
          <form action="update_agent.php" method="post" role="form" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-md-4 form-group">
              <input type="hidden" name="id" class="form-control" value=" <?=$edit['id']?>" id="name" placeholder="Agent name" required>
                <input type="text" name="name" class="form-control" value=" <?=$edit['names']?>" id="name" placeholder="Agent name" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="email" value="<?=$edit['email']?> "id="email" placeholder="email" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="tel" class="form-control" name="phone"value="<?=$edit['phone']?> " id="phone" placeholder="Your Phone" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group mt-3">
                <input type="type" name="location" value=" <?=$edit['location']?>"class="form-control datepicker" id="district" placeholder="location" required>
              </div>
              <div class="col-md-4 form-group mt-3">
                <input type="type" name="nid"value="<?=$edit['nid']?> " class="form-control datepicker" id="sector" placeholder="NID" required>
              </div>
              <div class="col-md-4 form-group mt-3">
                <input type="type" name="pass" value=" <?=$edit['password']?>"class="form-control datepicker" id="sector" placeholder="password" required><br>
              </div>
            <div class="text-center">
                <input type="submit" name="submit" value="update" class="btn btn-primary">
              </div>
          </form>
        </div>
      </section><!-- End Appointment Section -->
 <?php   }  ?> 
    <br>
    <table class="table table-bordered table-striped" style="font-size:12px bg-white text-primary">
    <thead class="text text info">
      <tr>
      <th>#</th>
        <th>NID</th>
        <th>Agent Name</th>
        <th>Email</th>
        <th>phone number</th>
        <th>Location</th>
        <th>password</th>
        <th>Action</th>
        
</tr>
    </thead>
    <tbody style="font-size:11px">
    <?php 
            $agent = $userdata->dispalyagentdata(); 
          $i=1;
              foreach( $agent as $agent)
              {
       ?>
        <tr>
        <td><?=$i++?></td>

          <td><?=$agent['nid']?></td>
          <td><?=$agent['names']?></td>
          <td><?=$agent['email']?></td>
          <td><?=$agent['phone']?></td>
          <td><?=$agent['location']?></td>
          <td><?=$agent['password']?></td> 
          <td>
          <a href="edit_agent.php?sn=<?=$agent['id'];?>" ><i class="bi bi-pencil"></i></i></a> 

              <a href="delete.php?sn=<?=$agent['id']?>"class="alert-danger">  <i class="bi bi-trash3 "></i></a>
              </td>
        <tr>
      <?php }
        
        ?>
    <tbody>
  <table>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>VRT</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">HITAYEZU ANTOINE</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>