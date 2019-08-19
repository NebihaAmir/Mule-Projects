
<?php
$data = [
	"first" => $_GET["first"],
	"middle" => $_GET["middle"],
	"last" => $_GET["last"],
	"phone" => $_GET["phone"],
	"email" => $_GET["email"],	
	"state" => $_GET["state"],
	"reference" => $_GET["reference"],
	"university" => $_GET["university"],
	"fieldofStudy" => $_GET["fieldofStudy"],
	"yearofGraduation" => $_GET["yearofGraduation"],
	"interest" => $_GET["interest"],
	"relocation" => $_GET["relocation"],
	"budget" => $_GET["budget"],
	"futurePlan" => $_GET["futurePlan"],
	"itTraining" => $_GET["itTraining"]
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
