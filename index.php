<?php
// using curl to open apis


$curl_handle = curl_init();

// setting the url option to our handle

curl_setopt($curl_handle,CURLOPT_URL,"https://randomuser.me/api");
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true); // returning string from the reques url

// writting out the response text to a new variable

$response = curl_exec($curl_handle);
curl_close($curl_handle);

echo $response,'\n';

?>