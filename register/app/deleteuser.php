<?php
$url="http://app.icraftsoft.net:6060/users/".$_GET["id"];
print_r($url);
$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); 
curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'
    ));     
$result = curl_exec($ch);
return $result;
?>