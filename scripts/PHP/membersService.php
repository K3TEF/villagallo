<!--<?php

//simple GET request
if(isset($_POST['Members'])){
    
    //initialize curl session
    $ch = curl_init();
    
    //build curl request
	
	$data_string = json_encode($mdata);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		'Content-Type: application/json',                                                                                
		'Content-Length: ' . strlen($data_string))                                                                       
			);                                           
       
    // grab URL and pass it to the browser
    $data=curl_exec($ch);

    // close cURL resource, and free up system resources
    curl_close($ch);
    
    return $data;
    
    //echo $data;
}-->

?>