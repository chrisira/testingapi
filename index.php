<?php
// using curl to open apis


$curl_handle = curl_init();

$headers = array(
    "Authorization: Client-ID 9yAExmas4hhPLtX_E6_XPh91x6MmpHDgZEt9_4Gbpco"

);


curl_setopt_array($curl_handle,[

    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers]

);
// writting out the response text to a new variable

$response = curl_exec($curl_handle);


// getting status code from the server

$status_code = curl_getinfo($curl_handle,CURLINFO_HTTP_CODE);

echo $status_code,'\n';

curl_close($curl_handle);

echo $response,'\n';

?>