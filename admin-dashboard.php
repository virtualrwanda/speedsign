<?php
include('naviba.php');
?>

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
   
    <section id="rent" class="appointment section-bg">
        <div class="container-fluid" data-aos="fade-up">
        <div class="row">  
              <div class="col-md-6 form-group">
          <div class="section-title text-center">
<?php
$last = $connc->getOne("SELECT * FROM data ORDER BY id  DESC LIMIT 1");
$_SESSION['$last'] = $last;
?>
  
            <div class="col-sm-12 ">
    <div class="card bg-primary">
      <div class="card-body">
        <h1 class="card-title text-light"><b><?=$last['limitspeed']?> KM/H</b></h1>
       <p class="card-text">
       <h2> Vehicle-Speed</h2>

       </p>
        <!-- <a href="#" class="btn btn-primary">Full Report</a> -->
      </div>
    </div>
  </div>
          </div>
         
       </div>
 
    <!-- End Appointment Section -->
    <div class="col-md-6 form-group bg-light">
    <!-- <div class="card-body">
     <div class="text text-center text-success">
      
    </div>  <br> -->

    <div class="col-sm-12 text-light">
    <div class="card bg-danger">
      <div class="card-body">
        <h1 class="card-title  text-light"><b><?=$last['speed']?> KM/H</b></h1>
        <p class="card-text">
        <h2>Limit Speed</h2>

        </p>
        <!-- <a href="#" class="btn btn-primary">Vew Report</a> -->
      </div>
    </div>
  </div>

  
  </div>
</div>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- <div class="row"> -->

 <!-- <div class="col-lg-7" >  -->
     <!-- <h2>Income Detailed Report</h2> -->

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
 var chart = new google.visualization.LineChart(document.getElementById("ghdf"));
 chart.draw(datacbb,options);
 }
</script>
</div>
</section>

       <div class="container-fluid">
 <div class="row">
  
 <!-- <div class="box col-lg-" height=""> -->
  
 <div class="card  col-7"  height="700px" id="drawChartdrawChart" >
 <div class="card bg-succes">
 <!--<div class="card bg-primary" id="drawChartdrawChart">-->
 <!--</div> -->
 </div> 
 </div> 
 <div class="card  col-5"   >
 <div class="card bg-danger">
 <div class="card bg-primary" id="ghdf">
 <!-- <div class="box"  id="ghdf" width="80%"height="700px"> -->
 </div>
 </div>
</div>
</div>

<div class="row">
    <!-- <div class="box col-lg-7" height="">
 <div class="box col-12"  id="bgggggggg" width="100%"height="700px"> -->

 <div class="card  col-5"   >
 <div class="card bg-danger">
 <div class="card bg-primary" id="bgggggggg">


 </div> </div>
</div>
    <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChartdrawChart);
 function drawChartdrawChart() 
 {
 var datacbb = google.visualization.arrayToDataTable([
 ['Time','Post Sign limit Speed','My-Speed'],
 <?php 
			$datacbbbbb =$connc->getAll("SELECT `id`, `Sn`, `possn`, `speed`, `limitspeed`, `due` FROM `data`");

      foreach($datacbbbbb as $datacbbbbb)
			 {
			 echo "['".$datacbbbbb['due']."',".$datacbbbbb['speed'].",".$datacbbbbb['limitspeed']."],";
			 }
			 ?> 
 ]);
 var options = {
          title: 'MY Car Speed Monitoring  In Road',
          curveType: 'function',
          height:'700px',
          legend: { position: 'top' }
        };
 var chart = new google.visualization.LineChart(document.getElementById("drawChartdrawChart"));
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

        </div>

    </div>

   
</div>
</div>
</div>
</div>

   