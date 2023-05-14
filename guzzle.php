<?php
require __DIR__ ."/vendor/autoload.php";

// creating new guzzle client object
$client = new GuzzleHttp\client();

// sending the request to the api

$response = $client->request("GET","https://api.github.com/user/repos",[
    "headers"=>[
        "Authorization" =>"token YOUR_TOKEN",
        "User-Agent"=>"chrisira"
    ]
    ]);
// printing out the responses
echo $response->getStatusCode(),"\n";
echo $response->getHeader("Content-type")[0],"\n";
echo substr($response->getBody(),0,200),"...\n";


?>