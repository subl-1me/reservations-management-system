<?php
include 'database.php'
if($_SERVER["REQUEST_METHOD"] === "POST"){
    // get form data
    $email = $_POST['email'];
    $password = $_POST['password'];
}else{
    echo "Invalid recieved data.";
}
?>