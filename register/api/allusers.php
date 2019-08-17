<?php

$url = "http://api.icraftsoft.net:6060/users";
        				
$result = file_get_contents($url);		
echo $result; 		
?>