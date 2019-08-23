<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">


<?php

$header = array();
$header [] = 'Authorisation: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA';
 $client = curl_init();

curl_setopt($client,CURLOPT_URL,'https://app.icraftsoft.net:9090/rest/user');
	 curl_setopt($client,CURLOPT_HTTPHEADER,$header);
	$result = curl_exec($client);
	  $myresult = json_decode($result);
	  // $myObjectMap = $myresult->MRData->RaceTable->Races;

 // echo $result;


?>
<body>

<div class="col-sm-6"> </div>
<div class="col-sm-6"> 
    <div class="">
        
        <table class="table">
            <thead class="thead-dark" >
                <tr  class="info text-center">
                    <th class="text-center">ID</th>
                    <th class="text-center">first</th>
                    <th class="text-center">last</th>
                    <th class="text-center">department</th>
                </tr>
            </thead>
            <tbody>
               <?php
               	$myresult=array();
                foreach($myresult as $key => $item): ?>
        <tr>
          <td><?PHP echo $item->id; ?></td>
          <td><?PHP echo $item->name; ?></td>
          <td><?PHP echo $item->address; ?></td>
          <td><?PHP echo $item->email; ?></td>
       
        </tr>
      	<?php endforeach; ?>

            </tbody>
        </table>
      
    </div>
</div>



    
</body>
</html>

