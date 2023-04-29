<?php
// using curl to open apis


$curl_handle = curl_init();

$headers = array(
    "Authorization: Client-ID 9yAExmas4hhPLtX_E6_XPh91x6MmpHDgZEt9_4Gbpco"

);
// using response headers as an array and callback function
$response_headers = [];

$header_callback = function($curl_handle,$header) use(&$response_headers){
    $len = strlen($header);

    $response_headers[] = $header;

    return $len;
};

curl_setopt_array($curl_handle,[

    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADERFUNCTION => $header_callback
    ]

); 
// writting out the response text to a new variable

$response = curl_exec($curl_handle);


// getting status code from the server

$status_code = curl_getinfo($curl_handle,CURLINFO_HTTP_CODE);

echo $status_code,'\n';

curl_close($curl_handle);

print_r($response_headers);

echo $response,'\n';

?>