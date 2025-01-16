
<?php

function getConnection() {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'tendify');
    return $con;
}


function addUser($name, $username, $email, $password, $confirm_password) {
    if ($password === $confirm_password) {
        $con = getConnection();
        $sql = "INSERT INTO users (name, username, email, password) VALUES ('{$name}', '{$username}', '{$email}', '{$password}')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            return true; 
        }
    }
    return false; 
}


function login($email, $password) {
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result); 
    }
    return false; 
}
?>
