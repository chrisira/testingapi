<?php 

// using github url to get gists

$curl_handle = curl_init();
curl_setopt_array($curl_handle,[

    CURLOPT_URL => "https://api.github.com/gists/608e5576f3e559731a9ad37c12fd2483",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT=> "chrisira",

    ]

);
$response = curl_exec($curl_handle);
curl_close($curl_handle);

$data = json_decode($response,true);

print_r($data);


?>