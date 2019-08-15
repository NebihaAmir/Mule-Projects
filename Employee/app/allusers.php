<?php

$url = "http://app.icraftsoft.net:9090/users";
        				
$result = file_get_contents($url);		
echo $result; 		
?>