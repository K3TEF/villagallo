<?php
//simple GET request
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    
    //Resourse Address
    $url="http://api.aprs.fi/api/get?name=$name&what=loc&apikey=24393.2URoZUH04nfGY&format=json"
    
    //Send request to Resourse
    
    $client=curl_init($url);
    
    curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
    
    //get response to Resourse
    
    $response=curl_exec($client)
    
    echo $response;
    
    //decode
    $result=json_decode($response);
    
    echo $result->data;
}
?>