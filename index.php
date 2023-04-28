<?php

if(!empty($_GET['name'])){
$response = file_get_contents("https://api.agify.io?name={$_GET['name']}");
// converting json into php array
$data = json_decode($response,true);

$age = $data['age'];
}
?>
<?php if(isset($age)):?>
    Age : <?php echo $age ;?>

    <?php endif;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing API in form</title>
</head>
<body>
    <center>
    <form action="">
        <label for="firstname"></label>
        <input type="text" id="name" name="name" placeholder ="Enter your name">
        <br>
        <br>
        <button>Guess my age</button>
    </form>
    </center>
    
    
</body>
</html>