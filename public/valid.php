<?php
include 'database.php';
if($_SERVER["REQUEST_METHOD"] === "POST"){
    // get form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userMatch = findUserByEmail($email);
    if(!$userMatch){
        echo "User doesn't exist.";
        return;
    }

    echo "User found:";
    print_r($userMatch);
    
    // print_r($result);
}else{
    echo "Invalid recieved data.";
}
?>