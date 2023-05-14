<?php 

// using stripe api url to get customers

$curl_handle = curl_init();
curl_setopt_array($curl_handle,[

    CURLOPT_URL => "https://api.stripe.com/v1/customers",
    CURLOPT_RETURNTRANSFER => true]
    

);
$response = curl_exec($curl_handle);
curl_close($curl_handle);

echo $response;




?>