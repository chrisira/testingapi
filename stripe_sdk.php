<?php
$api_key = "sk_test_51N7fqDEt3JlsrJpnD1phI1WGY7ozp3VxLaeGrcEQcA2fyqCIlKJ87qNteyUIw1w7uz8mW4H38I3obCJbavEZYGbu00P4Zbrjrj";

$data = [
    "name" => "bob",
    "email"=> "bob@gmail.com"

];

require __DIR__ ."/vendor/autoload.php";

// creating stripe client object and passing the api key
$stripe = new \Stripe\StripeClient($api_key);

// creating the customer
$customer = $stripe->customers->create($data);

echo $customer;

?>