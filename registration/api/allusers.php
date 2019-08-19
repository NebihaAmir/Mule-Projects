
<?php
        $url = "http://api.icraftsoft.net:7070/list-users";
        				
        $result = file_get_contents($url);		
        echo $result; 	
        // $ch = curl_init("http://iib.icraftsoft.net:7070/list-users");                                                                      
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
		// curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        //     'Content-Type: application/json'
        //     ));                                                                                                                   
		
        // $result = curl_exec($ch);       
        // return $result;
  /* csv file reader  */      
    // $fh = fopen("http://iib.icraftsoft.net:7070/export-users", "r"); 
    // $csvData = array(); 
    // while (($row = fgetcsv($fh, 0, ",")) !== FALSE) {
    //     $csvData[] = $row;
    // } 
    // echo json_encode($csvData);
