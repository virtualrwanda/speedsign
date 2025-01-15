<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
            width: 100%;
        }

        @media (max-width: 768px) {
            #map {
                height: 300px;
            }
        }

        .legend {
            background-color: white;
            padding: 10px;
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }
    </style>
<?php
include('naviba.php');
?>

  <main id="main" class="main">

   
   
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
        <h1 class="card-title text-light"><b><?=$last['speed']?> KM/H</b></h1>
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
        <h1 class="card-title  text-light"><b><?=$last['limitspeed']?> KM/H</b></h1>
        <p class="card-text">
        <h2> Speed Limit</h2>

        </p>
        <!-- <a href="#" class="btn btn-primary">Vew Report</a> -->
      </div>
    </div>
  </div>
  
  
  </div><div id="map"></div>
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
       


<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery for AJAX -->

    <script>
        // Initialize the map
        var map = L.map('map').setView([-1.94995, 30.05885], 12); // Default center point

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Define colored markers
        var redIcon = L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/images/marker-shadow.png',
            shadowSize: [41, 41]
        });

        var greenIcon = L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/images/marker-shadow.png',
            shadowSize: [41, 41]
        });

        // Variables to hold markers
        var agentMarkers = [];
        var speedMarkers = [];

        // Function to update the map with the new data
        function updateMap(data) {
            // Clear existing markers
            agentMarkers.forEach(marker => map.removeLayer(marker));
            speedMarkers.forEach(marker => map.removeLayer(marker));

            // Add new agent markers
            data.agentLocations.forEach(function(location) {
                var marker = L.marker([location.email, location.phone], { icon: redIcon }).addTo(map);
                marker.bindPopup(`POST NID: <b>${location.nid}</b><br>Names: <b>${location.names}</b><br>SPEED LIMIT: <H1>${location.location}KM/H</H1>`);
                agentMarkers.push(marker);
            });

            // Add new speed markers
            data.speedData.forEach(function(speed) {
                var marker = L.marker([speed.lat_str, speed.long_str], { icon: greenIcon }).addTo(map);
                marker.bindPopup(`VEHICLE Speed: <b>${speed.possn}</b><br>Current Passed Speed Sign: <b>${speed.speed}</b> km/h<br>Location: ${speed.location}`);
                speedMarkers.push(marker);
            });
        }

        // Function to fetch new data from the server
        function fetchData() {
            $.ajax({
                url: 'fetchData.php', // The PHP script that returns data as JSON
                method: 'GET',
                success: function(response) {
                    updateMap(response);
                },
                error: function() {
                    console.error('Error fetching data.');
                }
            });
        }

        // Fetch data initially
        fetchData();

        // Fetch data every 5 seconds (5000 milliseconds)
        setInterval(fetchData, 5000);

        // Add Legend to the map
        var legend = L.control({ position: 'bottomright' });

        legend.onAdd = function(map) {
            var div = L.DomUtil.create('div', 'legend');
            div.innerHTML += '<i style="background: green"></i> Vehicle Speed Location<br>';
            div.innerHTML += '<i style="background: red"></i> Post Speed Limit Location<br>';
            return div;
        };

        legend.addTo(map);
    </script>
     
                </div>
            </div>

        </div>

    </div>

   
</div>
</div>
</div>
</div>

   