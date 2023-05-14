<?php 

// using stripe api url to get customers

// making variable for api key

$api_key = "sk_test_51N7fqDEt3JlsrJpnD1phI1WGY7ozp3VxLaeGrcEQcA2fyqCIlKJ87qNteyUIw1w7uz8mW4H38I3obCJbavEZYGbu00P4Zbrjrj";

$data = [
    "name" => "alice",
    "email"=> "alice@gmail.com"

];


$curl_handle = curl_init();
curl_setopt_array($curl_handle,[

    CURLOPT_URL => "https://api.stripe.com/v1/customers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $api_key,
    CURLOPT_POSTFIELDS=>http_build_query($data)
    ]
    

);
$response = curl_exec($curl_handle);
curl_close($curl_handle);

echo $response;




?>