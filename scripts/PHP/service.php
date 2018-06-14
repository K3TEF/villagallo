<?php

//simple GET request
if(isset($_POST['callsign'])){
    
    //initialize curl session
    $ch = curl_init();
    
    //build curl request

    curl_setopt($ch,CURLOPT_URL,'http://api.aprs.fi/api/get?name=KB3JSV-7&what=loc&apikey=24393.2URoZUH04nfGY&format=json');
    curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type:application/json',));   
    
       
    // grab URL and pass it to the browser
    $data=curl_exec($ch);

    // close cURL resource, and free up system resources
    curl_close($ch);
    
    return $data;
    
    //echo $data;
}

?>