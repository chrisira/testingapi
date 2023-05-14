<?php 

// using github url to get gists

$curl_handle = curl_init();
curl_setopt_array($curl_handle,[

    CURLOPT_URL => "https://api.github.com/gists",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT=> "chrisira",

    ]

);
$response = curl_exec($curl_handle);
curl_close($curl_handle);



?>