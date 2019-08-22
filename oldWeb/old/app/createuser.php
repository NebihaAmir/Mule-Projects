
<?php
$data = [
	"first" => $_GET["first"],
	"middle" => $_GET["middle"],
	"last" => $_GET["last"],
	"email" => $_GET["email"],
	"phone" => $_GET["phone"],
	"location" => $_GET["location"],
	"reference" => $_GET["reference"],
	"college" => $_GET["college"],
	"year" => $_GET["year"],
	"budget" => $_GET["budget"],
	"relocation" => $_GET["relocation"],
	"future" => $_GET["future"]
];
        $ch = curl_init("http://app.icraftsoft.net:7070/submit-users");                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
		curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json'
            ));                                                                                                                   
		 
		$result = curl_exec($ch);
		return $result;
?>