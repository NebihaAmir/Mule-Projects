<?php
$id=$_GET["id"];
$url = "http://app.icraftsoft.net:6060/users/".$id;        				
$result = file_get_contents($url);		
echo $result; 		
?>