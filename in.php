<?php
include 'DBConnection.php';
$connc=new DBConnection();

$Sne=$_GET['sn'];
$possne=$_GET['car_speed'];
$speede=$_GET['car_speed'];
$limitspeede=$_GET['limitspeede'];
$due=$_POST['limitspeede'];
$lat_str=$_GET['lat_str'];
$lng_str=$_GET['lng_str'];

// echo substr($lng_str,0,5);
//   echo substr($lat_str,0,5);



//$data=$connc->getOne("SELECT * FROM `agent` WHERE  email`=='$lat_str' OR `phone`='$lng_str'")

// SELECT `id`, `nid`, `names`, `email`, `phone`, `location`, `password`, `time` FROM `agent` WHERE 1

// if(!empty($lng_str))
// {
$data=$connc->getOne("SELECT * FROM `agent` WHERE  `email`='$lat_str' OR `phone`='$lng_str'");
    if(!empty($data))
    {
    //  echo   $limitspeed=$data['names'];
     $speed=$data['location'];
    }
    
$dsd=$connc->execute("INSERT INTO `data`( `Sn`, `possn`, `speed`, `limitspeed`,`lat_str`,`long_str`)
             VALUES ('$Sne', '$possn', '$speed', '$possne','$lat_str','$lng_str')");
if($dsd)
{
        $message=" SPEED SIGN OF  '".$possne."' ,  IS DETECTED . thank you ";
        // echo $message;
         $data=array("sender"=>'+250781832465',
         "recipients"=>'250781832465',
         "message"=>$message,
         );
           $url="https://www.intouchsms.co.rw/api/sendsms/.json";
           $data=http_build_query($data);
           $username="BUTATA";
           $password="THEGREAT1";
           $ch=curl_init();
           curl_setopt($ch,CURLOPT_URL,$url);
           curl_setopt($ch,CURLOPT_USERPWD,$username.":".$password);
           curl_setopt($ch,CURLOPT_POST,true);
           curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
           curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
           curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
           $result=curl_exec($ch);
           $httpcode=curl_getinfo($ch,CURLINFO_HTTP_CODE);
           curl_close($ch);
           $result;
           $httpcode;
        //     echo "SUCCESS Affected ";
      //  exit();
    
    
    
    
    
    echo "$speed";
}
else{
    echo "Failed";
}
// }
// else{
// echo"101";
// }
?>