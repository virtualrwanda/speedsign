

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
        <li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
          <li class="breadcrumb-item"><a href="add-agent.php">Report</a></li>
          
          <li class="breadcrumb-item"><a href="Add-tractor.php">Available-Cars</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   
    <section id="rent" class="appointment section">
        <div class="container-fluid" data-aos="fade-up">
        <div class="col-md-5   bg-warning">
          <div class="section-title text-center">
            <h2 style="font-size 8px;">  REGISTER POST SIGN SPEED LIMIT</h2>
          </div>
            <br>
          <form action="" method="post" role="form" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-md-4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="POST SERIAL NUMBER " required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="email" id="email" placeholder="LATITUDE" required>
              </div>
               </div>
            <div class="row">
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="LONGTUTIDE" required>
              </div>
           
              <div class="col-md-4 form-group mt-3">
                <input type="text" name="location" class="form-control datepicker" id="district" placeholder="Limit Speed" required>
              </div>
               </div>
            <div class="row">
              <div class="col-md-4 form-group mt-3">
                <input type="type" name="nid" class="form-control datepicker" id="sector" placeholder="Direction" required>
              </div>
              <!--</div>-->
              <!-- <div class="col-md-4 form-group mt-3">
                <input type="type" name="pass" class="form-control datepicker" id="sector" placeholder="password" required><br>
              </div> -->
             <div class="col-md-4 form-group mt-3">
            <div class="text-center">
                <input type="submit" name="submit" value="save" class="btn btn-primary">
               </div>
                </div>
          </form>
        </div>

        <!-- <div class="row">

 <div class="col-lg-7" >  -->
     <!-- <h2>Income Detailed Report</h2> -->
       <?php $today = date("d/m/Y");  ?>
 
    <div class="box col-lg-12" height="">
 <div class="box"  id="bgggggggg" width="100%"height="700px">
 </div>   </div>
        </div>
        
  <div class="col-md-7">
    <table  id="bootstrap-data-table-export" class="table table-bordered" style="font-size:10px">
    <thead class="text text-primary">
      <tr>
        <th>#</th>
        <th>POST S/NUMBER </th>
        <th>LATITUDE</th>
        <th>LONGTUTIDE</th>
        <th>Limit Speed</th>
        <th>Direction</th>
        <th>LOCATION</th>
        <th colspan="2">Action</th>
        
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

         
        <td><?=$agent['names']?></td>
          <td><?=$agent['email']?></td>
          <td><?=$agent['phone']?></td>
          <td><?=$agent['location']?></td
          >  
           <td><?=$agent['nid']?></td>
          <td>
        
         <!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
<i class="bi bi-geo-alt"></i>
</button>

<!-- Modal -->
<div class="modal fade  col-sm-10" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">POST SIGN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="mapouter"><div class="gmap_canvas">
        <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
       src="https://maps.google.com/maps?width=100%&amp;height=366&amp;hl=en&amp;q=virtual Rwanda  
       technology&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">
        format json</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:366px;}
      .gmap_canvas {overflow:hidden;background:none!important;width:100%;height:366px;}.gmap_iframe {width:100%!important;height:366px!important;}</style></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        
        </td>
          <!-- <td><?=$agent['password']?></td>  -->
          <td>
          <a href="edit_agent.php?sn=<?=$agent['id'];?>" ><i class="bi bi-pencil"></i></i></a> 
          </td>
           <td>
           <a href="delete.php?sn=<?=$agent['id']?>"class="alert-danger">  <i class="bi bi-trash3 "></i></a>
          </td>
        <tr>
      <?php }
        
        ?>
    <tbody>
    <table>
    </div>


    <div class="box col-12 bg-warning"  id="drawChartdrawChart" width="100%"height="700px">
 </div>
    </div>
    <!-- <br><br>
  </section> -->

  

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- <div class="row"> -->

 <!-- <div class="col-lg-7" >  -->
     <!-- <h2>Income Detailed Report</h2> -->
       <?php $today = date("d/m/Y");  ?>
 
    <!-- <div class="box col-lg-12  mt-5" height=""> -->

    <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChartdrawChart);
 function drawChartdrawChart() 
 {
 var datacbb = google.visualization.arrayToDataTable([
 ['Time','REGISTERED POST SIGN'],
 <?php 
			$bb =$connc->getAll("SELECT * FROM agent;");

      foreach($bb as $bb)
			 {
			 echo "['".$bb['nid']."',".$bb['location']."],";
			 }
			 ?> 
 ]);
 var options = {
          title: 'Registered Post Sign Road',
          curveType: 'function',
          legend: { position: 'top' }
        };
 var chart = new google.visualization.ColumnChart(document.getElementById("drawChartdrawChart"));
 chart.draw(datacbb,options);
 }
</script>
<script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChartdrawChart);
 function drawChartdrawChart() 
 {
 var datacbb = google.visualization.arrayToDataTable([
 ['Time','Registered Car','Maped Street Post Sign Speed'],
 <?php 
			$datacbbbbb =$connc->getAll("SELECT `agent`.`time` as tij,count(`tractor`.`id`) as CAR ,COUNT(`agent`.`id`) AS POvvST FROM tractor INNER JOIN agent;");

      foreach($datacbbbbb as $datacbbbbb)
			 {
			 echo "['".$datacbbbbb['tij']."',".$datacbbbbb['CAR'].",".$datacbbbbb['POvvST']."],";
			 }
			 ?> 
 ]);
 var options = {
          title: 'Registered Post Sign Road',
          curveType: 'function',
          legend: { position: 'top' }
        };
 var chart = new google.visualization.ColumnChart(document.getElementById("bgggggggg"));
 chart.draw(datacbb,options);
 }
</script>

</div>
</div>
  <div class="footer bg-darker">
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Antoine</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="#">Hitayezu Antoine</a>
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
  </div>
</body>

</html>