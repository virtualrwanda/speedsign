<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'iotrw_speedsigns');
define('DB_PASSWORD', 'iotrw_speedsigns');
define('DB_NAME', 'iotrw_speedsigns');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}$queryx = sprintf("SELECT `categoryc`,  `amount` FROM `actual_expanses`  WHERE user ='".$ty."'");
$query = sprintf("SELECT  `category` ,  `amount`  FROM `actual_income` WHERE user ='".$ty."'");
$estimated_income = sprintf("SELECT  `category` as DFFestimated_income,  `amount` as dferestimated_income FROM `estimated_income`");
//execute query
$estimated_income = $mysqli->query($query);
$result = $mysqli->query($query);
$resultx = $mysqli->query($queryx);
// loop through the returned data
$data = array();
$data2 = array();
$data3 = array();
foreach ($result as $row) {
  $data[] = $row;
}
$result->close();
print json_encode($data);

?>