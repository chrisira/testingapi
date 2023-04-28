<?php

$response = file_get_contents("https://randomuser.me/api");


// converting json into php array
$data = json_decode($response,true);

// accessing the first element from the result
echo $data['results'][0]['name']['first'],"\n";

?>