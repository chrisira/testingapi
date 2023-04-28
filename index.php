<?php
// using curl to open apis


$curl_handle = curl_init();

// setting the url option to our handle

/*
curl_setopt($curl_handle,CURLOPT_URL,"https://randomuser.me/api");
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true); // returning string from the reques url
*/

// using curl_setopt_array to handle more that one option

curl_setopt_array($curl_handle,[

    CURLOPT_URL => "https://randomuser.me/api",
    CURLOPT_RETURNTRANSFER => true]

);
// writting out the response text to a new variable

$response = curl_exec($curl_handle);


// getting status code from the server

$status_code = curl_info($curl_handle,CURLINFO_HTTP_CODE);

echo $status_code,'\n';

curl_close($curl_handle);

echo $response,'\n';

?>