<?php
// using curl to open apis


$curl_handle = curl_init();

$headers = array(
    "Authorization: token ",
    // "User-Agent : chrisira"

);
// `using user agent in headers to conngit ect to github api`

$header_callback = function($curl_handle,$header) use(&$response_headers){
    $len = strlen($header);

    $response_headers[] = $header;

    return $len;
};
$payload =json_encode([
    "name" => "Create from API",
    "description" => "an example API created Repo"
]);
curl_setopt_array($curl_handle,[

    CURLOPT_URL => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT=> "chrisira",
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $payload
    ]

); 
// writting out the response text to a new variable

$response = curl_exec($curl_handle);


// getting status code from the server

$status_code = curl_getinfo($curl_handle,CURLINFO_HTTP_CODE);

echo $status_code;

curl_close($curl_handle);

print_r($response_headers);

echo $response,'\n';

?>