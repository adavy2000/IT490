<?php

session_start();
require_once('RabbitMqFunctions.php');
$username = strtolower($_POST['username']);
$password = $_POST['password'];

$response = login($username, $password);

if($response == true){
        $_SESSION['username'] = $username;
        header("location:./home.html");
}

else{
    echo("incorrect username or password");
        header("location:./login.html");
}

?>