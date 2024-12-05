<?php
define("MYSQL_DB_NAME", "test_practice_reservations");
define("MYSQL_PASSWORD", "");
define("MYSQL_USERNAME", "root");
define("MYSQL_HOST", "localhost");
function userExists($email){

}

function dbConnect(){
    return new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DB_NAME);
}

function findUserByEmail($email){
    $conn = dbConnect();
    $sql = "SELECT * FROM admins WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows === 0){
            return null;
        }

        $userMatch = $result->fetch_assoc();
        return $userMatch;
    }
    return null;
}

?>