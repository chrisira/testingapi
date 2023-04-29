<?php
// using curl to open apis


$curl_handle = curl_init();

$headers = array(
    "Authorization: token TOKEN GOES HERE",
    "User-Agent : chrisira"

);
// using user agent in headers to connect to github api

$header_callback = function($curl_handle,$header) use(&$response_headers){
    $len = strlen($header);

    $response_headers[] = $header;

    return $len;
};

curl_setopt_array($curl_handle,[

    CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie",
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